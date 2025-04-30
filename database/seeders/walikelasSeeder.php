<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\walikelas;

class WaliKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $waliKelasEnumValues = ['Hana', 'Ilham', 'Gerald'];
        shuffle($waliKelasEnumValues);

        foreach ($waliKelasEnumValues as $name) {
            WaliKelas::factory()->create([
                'WaliKelas' => $name, 
            ]);
        }
    }
}
