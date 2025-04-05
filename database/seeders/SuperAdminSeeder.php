<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        // $superAdmin = User::create([
        //     'name' => 'Kisanet Gidey',
        //     'email' => 'kibrug474@gmail.com',
        //     'password' => Hash::make('45kg45kg')
        // ]);
        // $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Aynalem Lemi',
            'username'=>'ahsan@allphptricks.com',
            'email' => 'ahsan@allphptricks.com',
            'password' => Hash::make('ahsan1234')
        ]);
        $admin->assignRole('Admin');



         // Creating  receptionist User
         $receptionist = User::create([
            'name' => 'Rahel Alema',
            'username'=>'uqeet@allphptricks.com',
            'email' => 'uqeet@allphptricks.com',
            'password' => Hash::make('muqeet1234')
        ]);
        $receptionist->assignRole('Receptionist');

         // Creating  cashier User
         $cashier = User::create([
            'name' => '.Loza Abdi',
            'username'=>'qeet@allphptricks.com',
            'email' => 'qeet@allphptricks.com',
            'password' => Hash::make('muqeet1234')
        ]);
        $cashier->assignRole('Cashier');
         // Creating  cooker  User
         $cooker = User::create([
            'name' => 'Reem Dawd',
            'username'=>'eet@allphptricks.com',
            'email' => 'eet@allphptricks.com',
            'password' => Hash::make('muqeet1234')
        ]);
        $cooker->assignRole('Cooker');

         // Creating  cooker  User
         $customer = User::create([
            'name' => 'customer Dawd',
            'username'=>'customer@allphptricks.com',
            'email' => 'customer@allphptricks.com',
            'password' => Hash::make('customer1234')
        ]);
        $customer->assignRole('Customer');
    }
}