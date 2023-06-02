<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(10);

        User::create([
            'name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'role' => 1,
            'no_identitas' => 182323092,
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'user1',
            'email' => 'udin@gmail.com',
            'role' => 0,
            'kelas_id' => 1,
            'no_identitas' => 182323092,
            'password' => bcrypt('12345678')
        ]);
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'role' => 0,
                'kelas_id' => 1,
                'no_identitas' => $faker->randomNumber(9),
                'password' => bcrypt('12345678')
            ]);
        }
        User::create([ 
            'name' => 'spadmin1',
            'email' => 'spadmin1@gmail.com',
            'role' => 2,
            'no_identitas' => 182323092,
            'password' => bcrypt('12345678')
        ]);
    }
}
