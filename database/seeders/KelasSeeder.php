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
        $KelasEnumValues = ['X', 'XI', 'XII'];
        shuffle($KelasEnumValues);
    
        foreach ($KelasEnumValues as $kelas) {
            Kelas::factory()->create([
                'Kelas' => $kelas,
            ]);
        }

        
    }
}
