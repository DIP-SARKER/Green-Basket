<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('admins')->insert([
            [
                'name' => 'DIP SARKER',
                'email' => 'sarker15-5274@diu.edu.bd',
                'password' => Hash::make('password'),
                'phone' => '01863540808',
                'avatar' => 'https://dip-sarker.github.io/DIP_SARKER/images/home.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Md. Mamun Ur Rashid Hridoy',
                'email' => 'rashid15-5273@diu.edu.bd',
                'password' => Hash::make('password'),
                'phone' => '01822223344',
                'avatar' => 'avatars/mamun.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Md. Mashiur Rrahman',
                'email' => 'rahman15-4766@diu.edu.bd',
                'password' => Hash::make('password'),
                'phone' => '01933334455',
                'avatar' => 'avatars/rahman.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Md. Sakib Khan',
                'email' => 'khan15-5728@diu.edu.bd',
                'password' => Hash::make('password'),
                'phone' => '01644445566',
                'avatar' => 'avatars/khan.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sumaiya Tabassum Prome',
                'email' => 'prome15-5902@diu.edu.bd',
                'password' => Hash::make('password'),
                'phone' => '01555556677',
                'avatar' => 'avatars/prome.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
