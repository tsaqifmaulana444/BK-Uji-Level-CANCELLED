<?php

namespace Database\Seeders;

use App\Models\Login;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    public function run(): void
    {
        Login::create([
            'name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('12345678')
        ]);
        Login::create([
            'name' => 'user1',
            'email' => 'udin@gmail.com',
            'role' => 'user',
            'password' => bcrypt('12345678')
        ]);
        Login::create([
            'name' => 'spadmin1',
            'email' => 'spadmin1@gmail.com',
            'role' => 'superadmin',
            'password' => bcrypt('12345678')
        ]);
    }
}
