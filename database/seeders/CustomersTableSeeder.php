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
                'address' => 'House 12, Road 5, Dhanmondi, Dhaka',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ayesha Akter',
                'email' => 'ayesha.akter@example.com',
                'phone' => '01844445566',
                'address' => 'Flat 3B, Lake View Apartments, Gulshan, Dhaka',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tanvir Hossain',
                'email' => 'tanvir.hossain@example.com',
                'phone' => '01977778899',
                'address' => '23/C, Station Road, Narayanganj',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shamima Begum',
                'email' => 'shamima.begum@example.com',
                'phone' => '01788889900',
                'address' => 'House 7, Block A, Bashundhara R/A, Dhaka',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Abdul Karim',
                'email' => 'abdul.karim@example.com',
                'phone' => '01899990011',
                'address' => '55, Kazir Dewri, Chattogram',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nusrat Jahan',
                'email' => 'nusrat.jahan@example.com',
                'phone' => '01933334455',
                'address' => 'House 19, Road 3, Rajlokkhi, Uttara',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fahim Ahmed',
                'email' => 'fahim.ahmed@example.com',
                'phone' => '01722223344',
                'address' => '32, College Gate, Mirpur, Dhaka',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mehnaz Sultana',
                'email' => 'mehnaz.sultana@example.com',
                'phone' => '01855556677',
                'address' => 'House 8, Block C, Rampura, Dhaka',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rashedul Islam',
                'email' => 'rashedul.islam@example.com',
                'phone' => '01911112233',
                'address' => '74, Mymensingh Road, Tongi, Gazipur',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Farhana Akter',
                'email' => 'farhana.akter@example.com',
                'phone' => '01766667788',
                'address' => '12, Green Road, Farmgate, Dhaka',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);


    }
}
