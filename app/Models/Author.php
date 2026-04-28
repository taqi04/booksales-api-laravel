<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
     public function getAll() {
        return [
            ['id' => 1, 'name' => 'Tere Liye'],
            ['id' => 2, 'name' => 'Andrea Hirata'],
            ['id' => 3, 'name' => 'Pramoedya'],
            ['id' => 4, 'name' => 'Habiburrahman El Shirazy'],
            ['id' => 5, 'name' => 'Dee Lestari'],
        ];
    }
}
