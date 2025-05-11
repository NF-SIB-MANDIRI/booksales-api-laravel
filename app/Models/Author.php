<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'id' => 1, 
            'name' => 'Tere Liye', 
            'photo' => 'tere.jpg', 
            'bio' => 'Penulis terkenal asal Indonesia dengan genre fiksi dan motivasi.'
        ],

        [
            'id' => 2, 
            'name' => 'Dewi Lestari', 
            'photo' => 'dee.jpg', 
            'bio' => 'Penulis novel dan musisi, dikenal lewat karya “Supernova”.'
        ],

        [
            'id' => 3, 
            'name' => 'Andrea Hirata', 
            'photo' => 'andrea.jpg', 
            'bio' => 'Penulis novel “Laskar Pelangi”, berlatar Belitung.'
        ],

        [
            'id' => 4, 
            'name' => 'Habiburrahman El Shirazy', 
            'photo' => 'kang_abik.jpg', 
            'bio' => 'Penulis dengan latar islami, populer lewat “Ayat-Ayat Cinta”.'
        ],

        [
            'id' => 5, 
            'name' => 'Pramoedya Ananta Toer', 
            'photo' => 'pram.jpg', 
            'bio' => 'Sastrawan besar Indonesia, banyak menulis tema sejarah dan kemanusiaan.'
        ],
    ];

    public function getAuthors(){
        return $this->authors;
    }
}
