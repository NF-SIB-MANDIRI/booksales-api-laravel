<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
        'id' => 1,
        'name' => 'Tere Liye',
        'photo' => 'tere.jpg',
        'bio' => 'Penulis terkenal asal Indonesia dengan genre fiksi dan motivasi.',
        ]);

        Author::create([
            'id' => 2,
            'name' => 'Dewi Lestari',
            'photo' => 'dee.jpg',
            'bio' => 'Penulis novel dan musisi, dikenal lewat karya “Supernova”.',
        ]);

        Author::create([
            'id' => 3,
            'name' => 'Andrea Hirata',
            'photo' => 'andrea.jpg',
            'bio' => 'Penulis novel “Laskar Pelangi”, berlatar Belitung.',
        ]);

        Author::create([
            'id' => 4,
            'name' => 'Habiburrahman El Shirazy',
            'photo' => 'kang_abik.jpg',
            'bio' => 'Penulis dengan latar islami, populer lewat “Ayat-Ayat Cinta”.',
        ]);

        Author::create([
            'id' => 5,
            'name' => 'Pramoedya Ananta Toer',
            'photo' => 'pram.jpg',
            'bio' => 'Sastrawan besar Indonesia, banyak menulis tema sejarah dan kemanusiaan.',
        ]);
    }
}
