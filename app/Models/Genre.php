<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //
      public function getAll() {
        return [
            ['id' => 1, 'name' => 'Fiction'],
            ['id' => 2, 'name' => 'Non-Fiction'],
            ['id' => 3, 'name' => 'Science'],
            ['id' => 4, 'name' => 'History'],
            ['id' => 5, 'name' => 'Fantasy'],
        ];
    }
}
