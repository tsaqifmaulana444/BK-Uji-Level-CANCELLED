<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\LoginSeeder;

class DatabaseSeeder extends Seeder
{
 
    public function run(): void
    {
      $this->call([
        LoginSeeder::class,
        KelasSeeder::class
      ]);
    }
}
