<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create Role

        // $role_name = ['superadmin','admin','editor','user'];

        // foreach ($role_name as $name) {
        //     Role::create([
        //         'name' => $name
        //     ]);
        // }

        $superadmin = Role::create(['name' => 'superadmin']);
        $admin = Role::create(['name' => 'admin']);
        $editor = Role::create(['name' => 'editor']);
        $user = Role::create(['name' => 'user']);

        //create permission

        $permission = [

            //dashboard
            'dashboard.view',

            //blog Permission
            'blog.create',
            'blog.view',
            'blog.edit',
            'blog.delete',

            // //admin Permission
            // 'admin.create',
            // 'admin.view',
            // 'admin.edit',
            // 'admin.delete',

            // //role Permission
            // 'role.create',
            // 'role.view',
            // 'role.edit',
            // 'role.delete',

            // //profile Permission
            // 'profile.view',
            // 'profile.edit',
        ];

        foreach ($permission as $data) {
            $permission = Permission::create([
                'name' => $data,
            ]);

            $superadmin->givePermissionTo($permission);
            $permission->assignRole($superadmin);
        }


        //create and assign role permission

    }


}
