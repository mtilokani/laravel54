<?php

namespace Modules\Module\Database\Seeders;

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_items')->delete();
        DB::table('menu_items')->insert(
            [
                [
                    'menu_id'          => 1,
                    'name'             => 'Home',
                    'url'              => '/admin/home',
                    'type'             => 'Page',
                    'parent_id'        => null,
                    'order'            => 0,
                    'icon'             => 'fa-home',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Organisation',
                    'url'              => '#',
                    'type'             => 'Module',
                    'parent_id'        => null,
                    'order'            => 0,
                    'icon'             => 'fa-coffee',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'User Manager',
                    'url'              => '#',
                    'type'             => 'Module',
                    'parent_id'        => 2,
                    'order'            => 3,
                    'icon'             => 'fa-user',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Manage users',
                    'url'              => '/admin/users',
                    'type'             => 'Page',
                    'parent_id'        => 3,
                    'order'            => 0,
                    'icon'             => 'fa-sliders',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Add new user',
                    'url'              => '/admin/users/create',
                    'type'             => 'Page',
                    'parent_id'        => 3,
                    'order'            => 0,
                    'icon'             => 'fa-plus-square',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Role manager',
                    'url'              => '#',
                    'type'             => 'Module',
                    'parent_id'        => 2,
                    'order'            => 4,
                    'icon'             => 'fa-user',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Manage role',
                    'url'              => '/admin/groups',
                    'type'             => 'Page',
                    'parent_id'        => 6,
                    'order'            => 0,
                    'icon'             => 'fa-sliders',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Add new role',
                    'url'              => '/admin/groups/create',
                    'type'             => 'Page',
                    'parent_id'        => 6,
                    'order'            => 0,
                    'icon'             => 'fa-plus-square',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Client manager',
                    'url'              => '#',
                    'type'             => 'Module',
                    'parent_id'        => 2,
                    'order'            => 4,
                    'icon'             => 'fa-user',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Manage client',
                    'url'              => '/admin/clients',
                    'type'             => 'Page',
                    'parent_id'        => 9,
                    'order'            => 0,
                    'icon'             => 'fa-sliders',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Add new client',
                    'url'              => '/admin/clients/create',
                    'type'             => 'Page',
                    'parent_id'        => 9,
                    'order'            => 0,
                    'icon'             => 'fa-plus-square',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Assets manager',
                    'url'              => '#',
                    'type'             => 'Module',
                    'parent_id'        => 2,
                    'order'            => 4,
                    'icon'             => 'fa-user',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Manage assets',
                    'url'              => '/admin/assets',
                    'type'             => 'Page',
                    'parent_id'        => 12,
                    'order'            => 0,
                    'icon'             => 'fa-sliders',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Add new asset',
                    'url'              => '/admin/assets/create',
                    'type'             => 'Page',
                    'parent_id'        => 12,
                    'order'            => 0,
                    'icon'             => 'fa-plus-square',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Department manager',
                    'url'              => '#',
                    'type'             => 'Module',
                    'parent_id'        => 2,
                    'order'            => 4,
                    'icon'             => 'fa-user',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Manage department',
                    'url'              => '/admin/departments',
                    'type'             => 'Page',
                    'parent_id'        => 15,
                    'order'            => 0,
                    'icon'             => 'fa-sliders',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Technology manager',
                    'url'              => '#',
                    'type'             => 'Module',
                    'parent_id'        => 2,
                    'order'            => 4,
                    'icon'             => 'fa-user',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Manage technology',
                    'url'              => '/admin/technologies',
                    'type'             => 'Page',
                    'parent_id'        => 17,
                    'order'            => 0,
                    'icon'             => 'fa-sliders',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Projects',
                    'url'              => '#',
                    'type'             => 'Module',
                    'parent_id'        => null,
                    'order'            => 0,
                    'icon'             => 'fa-code',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Project Manager',
                    'url'              => '#',
                    'type'             => 'Module',
                    'parent_id'        => 19,
                    'order'            => 3,
                    'icon'             => 'fa-user',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Manage projects',
                    'url'              => '/admin/projects',
                    'type'             => 'Page',
                    'parent_id'        => 20,
                    'order'            => 0,
                    'icon'             => 'fa-sliders',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Add new project',
                    'url'              => '/admin/projects/create',
                    'type'             => 'Page',
                    'parent_id'        => 20,
                    'order'            => 0,
                    'icon'             => 'fa-plus-square',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Human resource',
                    'url'              => '#',
                    'type'             => 'Module',
                    'parent_id'        => null,
                    'order'            => 0,
                    'icon'             => 'fa-users',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Recruitment manager',
                    'url'              => '#',
                    'type'             => 'Module',
                    'parent_id'        => 23,
                    'order'            => 3,
                    'icon'             => 'fa-user',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Manage recruitment',
                    'url'              => '/admin/recruitments',
                    'type'             => 'Page',
                    'parent_id'        => 24,
                    'order'            => 0,
                    'icon'             => 'fa-sliders',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Add new recruitment',
                    'url'              => '/admin/recruitments/create',
                    'type'             => 'Page',
                    'parent_id'        => 24,
                    'order'            => 0,
                    'icon'             => 'fa-plus-square',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Vacancy manager',
                    'url'              => '#',
                    'type'             => 'Module',
                    'parent_id'        => 23,
                    'order'            => 3,
                    'icon'             => 'fa-user',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Manage vacancy',
                    'url'              => '/admin/vacancies',
                    'type'             => 'Page',
                    'parent_id'        => 27,
                    'order'            => 0,
                    'icon'             => 'fa-sliders',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Add new vacancy',
                    'url'              => '/admin/vacancies/create',
                    'type'             => 'Page',
                    'parent_id'        => 27,
                    'order'            => 0,
                    'icon'             => 'fa-plus-square',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Configuration',
                    'url'              => '#',
                    'type'             => 'Module',
                    'parent_id'        => null,
                    'order'            => 0,
                    'icon'             => 'fa-gears',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Module Manager',
                    'url'              => '#',
                    'type'             => 'Module',
                    'parent_id'        => 30,
                    'order'            => 1,
                    'icon'             => 'fa-user',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Manage module',
                    'url'              => '/admin/modules',
                    'type'             => 'Page',
                    'parent_id'        => 31,
                    'order'            => 0,
                    'icon'             => 'fa-sliders',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Add new module',
                    'url'              => '/admin/modules/create',
                    'type'             => 'Page',
                    'parent_id'        => 31,
                    'order'            => 0,
                    'icon'             => 'fa-plus-square',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Widget manager',
                    'url'              => '#',
                    'type'             => 'Module',
                    'parent_id'        => 30,
                    'order'            => 2,
                    'icon'             => 'fa-user',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Manage widget',
                    'url'              => '/admin/widgets',
                    'type'             => 'Page',
                    'parent_id'        => 34,
                    'order'            => 0,
                    'icon'             => 'fa-sliders',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'menu_id'          => 1,
                    'name'             => 'Add new widget',
                    'url'              => '/admin/widgets/create',
                    'type'             => 'Page',
                    'parent_id'        => 34,
                    'order'            => 0,
                    'icon'             => 'fa-plus-square',
                    'is_active'        => 1,
                    'is_shown_on_menu' => 1,
                    'created_at'       => Carbon::now()->format('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
