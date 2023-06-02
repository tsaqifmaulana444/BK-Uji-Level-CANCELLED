<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create([
            'nama' => 'x ipa',
            'guru_id' => 1,
        ]);
        Kelas::create([
            'nama' => 'x ips',
            'guru_id' => 1,
        ]);
        
    }
}
