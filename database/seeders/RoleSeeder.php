<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleUser = Role::create(['name' => 'User']);
        $permissionAdmin = Permission::create(['name' => 'admin.home']);
        $permissionUser = Permission::create(['name' => 'user.home']);

        $roleAdmin->givePermissionTo($permissionAdmin);
        $roleUser->givePermissionTo($permissionUser);
    }
}
