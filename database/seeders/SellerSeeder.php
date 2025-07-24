<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seller;
use Illuminate\Support\Facades\Hash;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Seller::insert([
            [
                'name' => 'Rahim Uddin',
                'email' => 'rahim@sellbd.com',
                'phone' => '01710000011',
                'address' => 'Dhaka',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Selina Begum',
                'email' => 'selina@sellbd.com',
                'phone' => '01820000012',
                'address' => 'Chittagong',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tariqul Islam',
                'email' => 'tariq@sellbd.com',
                'phone' => '01930000013',
                'address' => 'Rajshahi',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nasima Akter',
                'email' => 'nasima@sellbd.com',
                'phone' => '01640000014',
                'address' => 'Sylhet',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jahirul Haque',
                'email' => 'jahir@sellbd.com',
                'phone' => '01350000015',
                'address' => 'Khulna',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rokeya Sultana',
                'email' => 'rokeya@sellbd.com',
                'phone' => '01760000016',
                'address' => 'Barisal',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Anwar Hossain',
                'email' => 'anwar@sellbd.com',
                'phone' => '01870000017',
                'address' => 'Rangpur',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fatema Khatun',
                'email' => 'fatema@sellbd.com',
                'phone' => '01980000018',
                'address' => 'Mymensingh',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kamal Ahmed',
                'email' => 'kamal@sellbd.com',
                'phone' => '01690000019',
                'address' => 'Comilla',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shirin Akhter',
                'email' => 'shirin@sellbd.com',
                'phone' => '01300000020',
                'address' => 'Jessore',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

    }
}
