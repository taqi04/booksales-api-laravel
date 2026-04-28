<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    private $books = [
        [
            'title' => 'bolang',
            'description' => 'petualangan seorang pemuda',
            'price' => 40.000,
            'stock' => 15,
            'cover_photo' => 'bolang.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ], 
        [
            'title' => 'Sebuah seni untuk bersikap',
            'description' => 'buku yang membahas kehidupan dan filosopi',
            'price' => 25.000,
            'stock' => 5,
            'cover_photo' => 'sebuah_seni.jpg',
            'genre_id' => 2,
            'author_id' => 2
        ],
        [
            'title' => 'pulang',
            'description' => 'buku kehidupan menggapai kehidupan bahagia',
            'price' => 30.000,
            'stock' => 55,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 3,
            'author_id' => 3
        ]
    ];

    public function getBooks(){
        return $this->books;
    }
}
