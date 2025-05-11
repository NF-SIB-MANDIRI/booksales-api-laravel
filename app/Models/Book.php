<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private $books = [
        [
            'title' => 'Pulang',
            'description' => 'Petualangan seorang pemuda yag kembali ke desa kelahirannya',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ],

        [
            'title' => 'Sebuah seni untuk bersikap bodo amat',
            'description' => 'Buku yang membahas tetang kehidupan dan filosofi hidup seseorang',
            'price' => 25000,
            'stock' => 5,
            'cover_photo' => 'sebuha_seni.jpg',
            'genre_id' => 2,
            'author_id' => 2
        ],

        [
            'title' => 'Naruto',
            'description' => 'Buku yang membahas jalan ninja seseorang',
            'price' => 30000,
            'stock' => 55,
            'cover_photo' => 'naruto.jpg',
            'genre_id' => 3,
            'author_id' => 3
        ],
    ];

    public function getBooks(){
        return $this->books;
    }
}
