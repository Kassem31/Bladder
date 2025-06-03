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
            'order'      => $order++,
            'permission' => 'list_user',
            'svg'        => 'svg/users.svg', // Users management icon
            // 'panel_type' => '1',
        ]);

        $subOrder = 1;
        Menu::create([
            'name'       => 'Users',
            'route'      => 'users.index',
            'parent_id'  => $users->id,
            'order'      => $subOrder++,
            'permission' => 'list_user',
            // 'panel_type' => '1',
        ]);

        Menu::create([
            'name'       => 'Roles',
            'route'      => 'roles.index',
            'parent_id'  => $users->id,
            'order'      => $subOrder++,
            'permission' => 'list_role',
            // 'panel_type' => '1',
        ]);

        $MasterData = Menu::create([
            'name'       => 'Master Data',
            'order'      => $order++,
            'permission' => 'list_master-data',
            // 'panel_type' 
            'svg'        => 'svg/master-data.svg',
            'route'      => 'master-data.index',
        ]);
        $subOrder = 1;
        Menu::create([
            'name'       => 'Bladder Sizes',
            'route'      => 'bladder-sizes.index',
            'parent_id'  => $MasterData->id,
            'order'      => $subOrder++,
            'permission' => 'list_bladder-sizes',
        ]);

        Menu::create([
            'name'       => 'Bladders',
            'route'      => 'bladders.index',
            'parent_id'  => $MasterData->id,
            'order'      => $subOrder++,
            'permission' => 'list_bladder',
        ]);

        // Machines
        Menu::create([
            'name'       => 'Machines',
            'route'      => 'machines.index',
            'parent_id'  => $MasterData->id,
            'order'      => $subOrder++,
            'permission' => 'list_machine',
        ]);

        // observations submenu

        Menu::create([
            'name'       => 'Observations',
            'route'      => 'findings.index',
            'parent_id'  =>  $MasterData->id,
            'order'      =>  $subOrder++,
            'permission' => 'list_findings',
        ]);

        $bladderTransactions = Menu::create([
            'name'       => 'Bladder Transactions',
            'order'      =>  $order++,
            'permission' => 'list_bladder-transactions',
            'svg'        => 'svg/bladder-transactions.svg',
            'route'      => 'bladder-transactions.index',
        ]);

        $subOrder = 1;

        Menu::create([
            'name'       => 'View Transactions',
            'route '     => 'bladder-transactions.index',
            'parent_id'  =>  $bladderTransactions->id,
            'order'      =>  $subOrder++,
            'permission' => 'list_bladder-transactions',
        ]);
    }
}
