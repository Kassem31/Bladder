<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    public function run()
    {
        // 0 for admin and clinic , 1 for admin only , 2 for clinic only
        Menu::truncate();

        $order = 2;
        // User Management

        $users = Menu::create([
            'name'       => 'Users Management',
            'translation_key' => 'menu_users_management',
            'order'      => $order++,
            'permission' => 'list_user',
            'svg'        => 'svg/users.svg', // Users management icon
            // 'panel_type' => '1',
        ]);

        $subOrder = 1;
        Menu::create([
            'name'       => 'Users',
            'translation_key' => 'menu_users',
            'route'      => 'users.index',
            'parent_id'  => $users->id,
            'order'      => $subOrder++,
            'permission' => 'list_user',
            // 'panel_type' => '1',
        ]);

        Menu::create([
            'name'       => 'Roles',
            'translation_key' => 'menu_roles',
            'route'      => 'roles.index',
            'parent_id'  => $users->id,
            'order'      => $subOrder++,
            'permission' => 'list_role',
            // 'panel_type' => '1',
        ]);

        $MasterData = Menu::create([
            'name'       => 'Master Data',
            'translation_key' => 'menu_master_data',
            'order'      => $order++,
            'permission' => 'list_master-data',
            // 'panel_type' 
            'svg'        => 'svg/menu/master-data.svg',
            'route'      => 'master-data.index',
        ]);
        $subOrder = 1;
        Menu::create([
            'name'       => 'Bladder Sizes',
            'translation_key' => 'menu_bladder_sizes',
            'route'      => 'bladder-sizes.index',
            'parent_id'  => $MasterData->id,
            'order'      => $subOrder++,
            'permission' => 'list_bladder-sizes',
        ]);

        Menu::create([
            'name'       => 'Bladders',
            'translation_key' => 'menu_bladders',
            'route'      => 'bladders.index',
            'parent_id'  => $MasterData->id,
            'order'      => $subOrder++,
            'permission' => 'list_bladder',
        ]);

        // Machines
        Menu::create([
            'name'       => 'Machines',
            'translation_key' => 'menu_machines',
            'route'      => 'machines.index',
            'parent_id'  => $MasterData->id,
            'order'      => $subOrder++,
            'permission' => 'list_machine',
        ]);

        // observations submenu

        Menu::create([
            'name'       => 'Observations',
            'translation_key' => 'menu_observations',
            'route'      => 'findings.index',
            'parent_id'  =>  $MasterData->id,
            'order'      =>  $subOrder++,
            'permission' => 'list_findings',
        ]);

        $bladderTransactions = Menu::create([
            'name'       => 'Bladder Transactions',
            'translation_key' => 'menu_bladder_transactions',
            'order'      =>  $order++,
            'permission' => 'list_bladder-transactions',
            'svg'        => 'svg/menu/bladder-transactions.svg',
            'route'      => 'bladder-transactions.index',
        ]);

        $subOrder = 1;

        Menu::create([
            'name'       => 'View Transactions',
            'translation_key' => 'menu_view_transactions',
            'route '     => 'bladder-transactions.index',
            'parent_id'  =>  $bladderTransactions->id,
            'order'      =>  $subOrder++,
            'permission' => 'list_bladder-transactions',
        ]);
    }
}
