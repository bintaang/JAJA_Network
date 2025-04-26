<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusanEnumValues = ['RPL', 'TKJ', 'DKV', 'TKTL', 'TAV', 'TOI'];
        shuffle($jurusanEnumValues);
    
        foreach ($jurusanEnumValues as $jurusan) {
            Jurusan::factory()->create([
                'Jurusan' => $jurusan,
            ]);
        }
    }
}
