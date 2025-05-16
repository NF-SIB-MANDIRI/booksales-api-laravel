<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
        'id' => 1,
        'name' => 'Fiksi',
        'description' => 'Karya sastra berdasarkan imajinasi dan kreativitas.',
        ]);

        Genre::create([
            'id' => 2,
            'name' => 'Non-Fiksi',
            'description' => 'Buku berdasarkan fakta dan kejadian nyata.',
        ]);

        Genre::create([
            'id' => 3,
            'name' => 'Fantasi',
            'description' => 'Bercerita tentang dunia imajinatif dan magis.',
        ]);

        Genre::create([
            'id' => 4,
            'name' => 'Sejarah',
            'description' => 'Mengulas peristiwa dan tokoh-tokoh sejarah.',
        ]);

        Genre::create([
            'id' => 5,
            'name' => 'Romantis',
            'description' => 'Cerita tentang hubungan percintaan.',
        ]);
    }
}
