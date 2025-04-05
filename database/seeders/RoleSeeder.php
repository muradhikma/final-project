<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #Role::create(['name' => 'Super Admin']);

        $admin = Role::create(['name' => 'Admin']);
        $customer = Role::create(['name' => 'Customer']);
        $receptionist =  Role::create(['name' => 'Receptionist']);
        $cashier =  Role::create(['name' => 'Cashier']);
        $cooker=Role::create(['name' => 'Cooker']);



        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-role',
            'edit-role',
            'delete-role',
            'create-table',
            'edit-table',
            'delete-table',
            'edit-reservation',
            'create-food',
            'edit-food',
            'delete-food',
            'create-waitlist',
            'edit-waitlist',
            'delete-waitlist',
        ]);



        $receptionist ->givePermissionTo([
            // 'create-report',
            // 'edit-report',
            // 'delete-report'
            'create-payment',
            'edit-payment',
            'delete-payment',
        ]);
        $cashier ->givePermissionTo([
            'create-payment',
            'edit-payment',
            'delete-payment',
        ]);
        $cooker ->givePermissionTo([

            'edit-reservation',

        ]);

        $customer ->givePermissionTo([
            'create-payment',
            'edit-payment',
            'delete-payment',
            'create-reservation',

          
        ]);

    }
}