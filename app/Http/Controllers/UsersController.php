<?php

namespace App\Http\Controllers;

use App\Models\CompanyUser;
use App\Models\Person;
use App\Models\User;
use Carbon\Carbon as Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Landlord;
use Spatie\Permission\Models\Role;
use View;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->title = 'User';
        $this->request = $request;
        View::share('title', $this->title);
        parent::__construct();
    }

    public function __destruct()
    {
        unset($this->title);
    }

    public function init()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }

    public function validateEmail(Request $request)
    {
        $email = $request->email;
        if ($email !== null && !empty($email)) {
            $userQuery = User::where('email', $email);
            if ($request->id) {
                $userQuery->where('id', '!=', $request->id);
            }
            $user = $userQuery->first();
            if ($user) {
                return 'false';
            }
        }

        return 'true';
    }

    public function getUserData()
    {
        $request = $this->request->all();
        $companyId = Landlord::getTenants()['company']->id;

        $users = DB::table('users')->join('company_user', 'company_user.user_id', 'users.id')->join('people', 'users.person_id', 'people.id')->where('company_user.company_id', $companyId)->select('*', DB::raw('DATE_FORMAT(users.created_at, "%d-%m-%Y %H:%i:%s") as "created_datetime"'), DB::raw('users.id as user_id'));

        $sortby = 'users.id';
        $sorttype = 'desc';
        if (isset($request['sortby'])) {
            $sortby = $request['sortby'];
            $sorttype = $request['sorttype'];
        }

        $users->orderBy($sortby, $sorttype);

        // $users->where('users.deleted_at', '=', null);
        if (isset($request['name']) && trim($request['name']) !== '') {
            $users->where('users.name', 'like', '%'.$request['name'].'%');
        }

        if (isset($request['email']) && trim($request['email']) !== '') {
            $users->where('users.email', 'like', '%'.$request['email'].'%');
        }

        $usersList = [];

        if (!array_key_exists('pagination', $request)) {
            $users = $users->paginate($request['pagination_length']);
            $usersList = $users;
        } else {
            $usersList['total'] = $users->count();
            $usersList['data'] = $users->get();
        }

        $response = $usersList;

        return $response;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companyId = Landlord::getTenants()['company']->id;
        $roles = Role::where('name', 'LIKE', $companyId.'%')->get();

        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->init();
        $companyId = Landlord::getTenants()['company']->id;

        $person = new Person();
        $person->first_name = $request->first_name;
        $person->last_name = $request->last_name;
        $person->save();

        $user = new User();
        $user->person_id = $person->id;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->get('password'));
        $user->verification_token = md5(uniqid(mt_rand(), true));
        $user->banned_at = Carbon::parse($request->banned_at)->format('Y-m-d H:i:s');
        $user->save();
        $user->assignRole($request->get('roles'));

        $companyUser = new CompanyUser();
        $companyUser->company_id = $companyId;
        $companyUser->user_id = $user->id;
        $companyUser->save();

        flash()->success(config('config-variables.flash_messages.dataSaved'));

        return redirect()->route('users.index', ['domain' => app('request')->route()->parameter('company')]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $userId
     *
     * @return \Illuminate\Http\Response
     */
    public function show($userId)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $userId
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($company, $userId)
    {
        $user = User::find($userId);
        $companyId = Landlord::getTenants()['company']->id;
        $roles = Role::where('name', 'LIKE', $companyId.'%')->get();

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $userId
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $company, $userId)
    {
        $this->init();
        $user = User::findOrFail($userId);
        $person = Person::findOrFail($user->person_id);

        $person->first_name = $request->first_name;
        $person->last_name = $request->last_name;
        $person->save();

        $user->email = $request->email;
        $user->banned_at = Carbon::parse($request->banned_at)->format('Y-m-d H:i:s');
        $user->save();
        $user->syncRoles();
        $user->assignRole($request->get('roles'));
        flash()->success(config('config-variables.flash_messages.dataSaved'));

        return redirect()->route('users.index', ['domain' => app('request')->route()->parameter('company')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $userId
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($company, $userId)
    {
        $message = config('config-variables.flash_messages.dataDeleted');
        $type = 'success';
        $user = User::find($userId);
        $user->syncRoles();
        if (!$user->delete()) {
            $message = config('config-variables.flash_messages.dataNotDeleted');
            $type = 'danger';
        }
        flash()->message($message, $type);

        return redirect()->route('users.index', ['domain' => app('request')->route()->parameter('company')]);
    }
}
