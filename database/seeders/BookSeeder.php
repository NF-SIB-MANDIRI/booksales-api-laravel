<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
        'title' => 'Pulang',
        'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya',
        'price' => 40000,
        'stock' => 15,
        'cover_photo' => 'pulang.jpg',
        ]);

        Book::create([
            'title' => 'Sebuah seni untuk bersikap bodo amat',
            'description' => 'Buku yang membahas tentang kehidupan dan filosofi hidup seseorang',
            'price' => 25000,
            'stock' => 5,
            'cover_photo' => 'sebuah_seni.jpg',
        ]);

        Book::create([
            'title' => 'Naruto',
            'description' => 'Buku yang membahas jalan ninja seseorang',
            'price' => 30000,
            'stock' => 55,
            'cover_photo' => 'naruto.jpg',
        ]);

        Book::create([
            'title' => 'Laskar Pelangi',
            'description' => 'Kisah inspiratif anak-anak dari Belitong yang penuh semangat belajar',
            'price' => 35000,
            'stock' => 10,
            'cover_photo' => 'laskar_pelangi.jpg',
        ]);

        Book::create([
            'title' => 'Harry Potter and the Philosopher\'s Stone',
            'description' => 'Petualangan seorang penyihir muda di dunia sihir yang penuh keajaiban',
            'price' => 50000,
            'stock' => 20,
            'cover_photo' => 'harry_potter1.jpg',
        ]);
    }
}
