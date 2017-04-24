<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_items')->truncate();
        DB::table('menu_items')->insert([
        [
            'menu_id' => 1,
            'name' => 'Dashboard',
            'url' => '/dashboard',
            'type' => 'Page',
            'parent_id' => null,
            'order' => 0,
            'icon' => 'fa-home',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'Organisation',
            'url' => '/admin/organization',
            'type' => 'Module',
            'parent_id' => null,
            'order' => 0,
            'icon' => 'fa-shield',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'List all organizations',
            'url' => '/admin/organization/list',
            'type' => 'Page',
            'parent_id' => 2,
            'order' => 1,
            'icon' => 'fa-list',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'Add organisation',
            'url' => '/admin/organization',
            'type' => 'Page',
            'parent_id' => 2,
            'order' => 2,
            'icon' => 'fa-plus',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'User',
            'url' => '/admin/users',
            'type' => 'Module',
            'parent_id' => 2,
            'order' => 3,
            'icon' => 'fa-user',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'List all user',
            'url' => '/admin/users',
            'type' => 'Page',
            'parent_id' => 5,
            'order' => 0,
            'icon' => 'fa-list',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'Add user',
            'url' => '/admin/users/create',
            'type' => 'Page',
            'parent_id' => 5,
            'order' => 0,
            'icon' => 'fa-plus',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'Configuration',
            'url' => '#',
            'type' => 'Module',
            'parent_id' => null,
            'order' => 0,
            'icon' => 'fa-cog',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'Module Manager',
            'url' => '/admin/modules',
            'type' => 'Module',
            'parent_id' => 8,
            'order' => 0,
            'icon' => 'fa-user',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'List all modules',
            'url' => '/admin/modules',
            'type' => 'Page',
            'parent_id' => 9,
            'order' => 0,
            'icon' => 'fa-list',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'Add modules',
            'url' => '/admin/modules/create',
            'type' => 'Page',
            'parent_id' => 9,
            'order' => 0,
            'icon' => 'fa-plus',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'Widgets Manager',
            'url' => '/admin/widgets',
            'type' => 'Module',
            'parent_id' => 8,
            'order' => 0,
            'icon' => 'fa-user',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'List all widgets',
            'url' => '/admin/widgets',
            'type' => 'Page',
            'parent_id' => 12,
            'order' => 0,
            'icon' => 'fa-list',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'Add widgets',
            'url' => '/admin/widgets/create',
            'type' => 'Page',
            'parent_id' => 12,
            'order' => 0,
            'icon' => 'fa-plus',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'Access Control',
            'url' => '#',
            'type' => 'Module',
            'parent_id' => null,
            'order' => 0,
            'icon' => 'fa-check-square-o',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'Permission',
            'url' => '/admin/permissions',
            'type' => 'Module',
            'parent_id' => 15,
            'order' => 0,
            'icon' => 'fa-check',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'List all permission',
            'url' => '/admin/permissions',
            'type' => 'Page',
            'parent_id' => 16,
            'order' => 0,
            'icon' => 'fa-list',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'Add permission',
            'url' => '/admin/permissions/create',
            'type' => 'Page',
            'parent_id' => 16,
            'order' => 0,
            'icon' => 'fa-plus',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'Role',
            'url' => '/admin/roles',
            'type' => 'Module',
            'parent_id' => 15,
            'order' => 0,
            'icon' => 'fa-sign-in',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'List all role',
            'url' => '/admin/roles',
            'type' => 'Page',
            'parent_id' => 19,
            'order' => 0,
            'icon' => 'fa-list',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'menu_id' => 1,
            'name' => 'Add role',
            'url' => '/admin/roles/create',
            'type' => 'Page',
            'parent_id' => 19,
            'order' => 0,
            'icon' => 'fa-plus',
            'is_active' => 1,
            'is_shown_on_menu' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        ]);
    }
}
