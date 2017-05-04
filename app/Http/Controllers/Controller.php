<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Landlord;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $companyId = Landlord::getTenants()['company']->id;
            $userRoles = Auth::user()->roles;
            // echo "<pre>";print_r($userRoles);echo "</pre>";exit;
            foreach ($userRoles as $userRole) {
                // echo "<pre>";print_r($userRole->permissions);echo "</pre>";exit;
                // dd($userRole->permissions);
            }
            $menu = Menu::where('company_id', $companyId)->where('name', 'Sidebar')->first();
            $menuArray = [];
            if ($menu) {
                $menuArray = $menu->generate();
            }
            View::share('menu_items', $menuArray);
            if (Auth::check()) {
                View::share('companies', Auth::user()->companies);
            }

            return $next($request);
        });
    }
}
