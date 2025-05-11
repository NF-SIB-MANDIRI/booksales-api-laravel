<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        [
            'id' => 1, 
            'name' => 'Fiksi', 
            'description' => 'Karya sastra berdasarkan imajinasi dan kreativitas.'
        ],

        [
            'id' => 2, 
            'name' => 'Non-Fiksi', 
            'description' => 'Buku berdasarkan fakta dan kejadian nyata.'
        ],

        [
            'id' => 3, 
            'name' => 'Fantasi', 
            'description' => 'Bercerita tentang dunia imajinatif dan magis.'
        ],

        [
            'id' => 4, 
            'name' => 'Sejarah', 
            'description' => 'Mengulas peristiwa dan tokoh-tokoh sejarah.'
        ],

        [
            'id' => 5, 
            'name' => 'Romantis', 
            'description' => 'Cerita tentang hubungan percintaan.'
        ],
    ];

    public function getGenres(){
        return $this->genres;
    }
}
