<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            //admin
            [
                'full_name' => 'John Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt(12345678),
                'role' => 'admin',
                'status' => 'active',
            ],
        );
        User::create(
            //vendor
            [
                'full_name' => 'Tony Vendor',
                'username' => 'vendor',
                'email' => 'vendor@gmail.com',
                'password' => bcrypt(12345678),
                'role' => 'vendor',
                'status' => 'active',
            ],
        );
        User::create(
            //customer
            [
                'full_name' => 'Bil Customer',
                'username' => 'customer',
                'email' => 'customer@gmail.com',
                'password' => bcrypt(12345678),
                'role' => 'customer',
                'status' => 'active',
            ]
        );
    }
}
