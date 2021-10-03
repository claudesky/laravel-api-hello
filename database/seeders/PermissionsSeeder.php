<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'create_labels',
        ]);

        Permission::create([
            'name' => 'update_labels',
        ]);

        Permission::create([
            'name' => 'delete_labels',
        ]);

        Permission::create([
            'name' => 'generate_language_files',
        ]);

        // Site Admin
        $site_admin_role = Role::create([
            'name' => 'site_admin',
        ]);

        // Client Admin
        $client_admin_role = Role::create([
            'name' => 'client_admin',
        ]);

        // Customer
        $customer_role = Role::create([
            'name' => 'customer',
        ]);

        $site_admin_role->givePermissionTo([
            'create_labels',
            'update_labels',
            'delete_labels',
        ]);
    }
}
