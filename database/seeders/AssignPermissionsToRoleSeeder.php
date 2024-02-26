<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AssignPermissionsToRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Role::where('name', 'user')->first();
        $admin = Role::where('name', 'admin')->first();

        $user->givePermissionTo('user permission');
        $admin->givePermissionTo('admin permission');
    }
}
