<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'name' => 'Rahim Uddin',
                'email' => 'rahim.uddin@example.com',
                'phone' => '01755556677',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ayesha Akter',
                'email' => 'ayesha.akter@example.com',
                'phone' => '01844445566',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tanvir Hossain',
                'email' => 'tanvir.hossain@example.com',
                'phone' => '01977778899',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shamima Begum',
                'email' => 'shamima.begum@example.com',
                'phone' => '01788889900',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Abdul Karim',
                'email' => 'abdul.karim@example.com',
                'phone' => '01899990011',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nusrat Jahan',
                'email' => 'nusrat.jahan@example.com',
                'phone' => '01933334455',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fahim Ahmed',
                'email' => 'fahim.ahmed@example.com',
                'phone' => '01722223344',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mehnaz Sultana',
                'email' => 'mehnaz.sultana@example.com',
                'phone' => '01855556677',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rashedul Islam',
                'email' => 'rashedul.islam@example.com',
                'phone' => '01911112233',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Farhana Akter',
                'email' => 'farhana.akter@example.com',
                'phone' => '01766667788',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
