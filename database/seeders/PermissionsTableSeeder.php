<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Laratrust\Models\Permission;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('permissions')->delete();

        $permissions = [
            'list_user-management',
            
            'list_user',
            'show_user',
            'create_user',
            'edit_user',
            'delete_user',

            'list_role',
            'show_role',
            'edit_role',
            'create_role',
            'delete_role',

            'list_master-data',

            'list_machines',
            'show_machines',
            'create_machines',
            'edit_machines',
            'delete_machines',

            'list_bladder-size',
            'show_bladder-size',
            'create_bladder-size',
            'edit_bladder-size',
            'delete_bladder-size',

            'list_bladder',
            'show_bladder',
            'create_bladder',
            'edit_bladder',
            'delete_bladder',

            'list_finding',
            'show_finding',
            'create_finding',
            'edit_finding',
            'delete_finding',

            'list_bladder-transactions',
            'show_bladder-transactions',
            'create_bladder-transactions',
            'edit_bladder-transactions',
            'delete_bladder-transactions',
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission,
                'display_name' => ucfirst(str_replace('_', ' ', $permission)),
                'description' => 'Allows a user to ' . str_replace('_', ' ', $permission),
            ]);
        }
    }
}
