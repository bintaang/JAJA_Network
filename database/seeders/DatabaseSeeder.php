<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\This;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this ->call([
            TSmkSeeder::class,
        ]);

        $this ->call([
            GedungSeeder::class,
        ]);
        $this ->call([
            JurusanSeeder::class,
        ]);
        $this ->call([
            KelasSeeder::class,
        ]);
        $this->call([
            walikelasSeeder::class,
        ]);
    }
}
