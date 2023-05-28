<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'role' => 1,
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'user1',
            'email' => 'udin@gmail.com',
            'role' => 0,
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'spadmin1',
            'email' => 'spadmin1@gmail.com',
            'role' => 2,
            'password' => bcrypt('12345678')
        ]);
    }
}
