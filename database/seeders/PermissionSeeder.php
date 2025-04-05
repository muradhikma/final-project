<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'create-role',
            'edit-role',
            'delete-role',
            'create-user',
            'edit-user',
            'delete-user',
            'create-product',
            'edit-product',
            'delete-product',
            'create-food',
            'edit-food',
            'delete-food',
            
            'create-reservation',
            'edit-reservation',
            'delete-reservation',
            'create-payment',
            'edit-payment',
            'delete-payment',
          
            'create-waitlist',
            'edit-waitlist',
            'delete-waitlist',
            'create-table',
            'edit-table',
            'delete-table',
         ];

          // Looping and Inserting Array's Permissions into Permission Table
         foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
          }
    }
}