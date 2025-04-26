<?php

namespace Database\Seeders;

use App\Models\Gedung;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GedungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $GedungEnumValues = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O'];
    shuffle($GedungEnumValues);

    foreach ($GedungEnumValues as $Gedung) {
        Gedung::factory()->create([
            'Gedung' => $Gedung,
        ]);
    }
}
}
