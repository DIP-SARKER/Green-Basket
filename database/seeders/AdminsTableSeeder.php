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
                'name' => 'Dip Sarker',
                'email' => 'dip.sarker@example.com',
                'password' => Hash::make('password'),
                'phone' => '01711112233',
                'avatar' => 'avatars/dip.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rashid Hridoy',
                'email' => 'mamun.rashid@example.com',
                'password' => Hash::make('password'),
                'phone' => '01822223344',
                'avatar' => 'avatars/mamun.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
