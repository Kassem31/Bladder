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

            'list_bladder-sizes',
            'show_bladder-sizes',
            'create_bladder-sizes',
            'edit_bladder-sizes',
            'delete_bladder-sizes',

            'list_bladders',
            'show_bladders',
            'create_bladders',
            'edit_bladders',
            'delete_bladders',

            'list_findings',
            'show_findings',
            'create_findings',
            'edit_findings',
            'delete_findings',

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
