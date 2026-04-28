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
        //
    Book::create(['title' => 'Bumi', 'author_id' => 1, 'price' => 80000]);
    Book::create(['title' => 'Laskar Pelangi', 'author_id' => 2, 'price' => 75000]);
    Book::create(['title' => 'Bumi Manusia', 'author_id' => 3, 'price' => 90000]);
    Book::create(['title' => 'Ayat-Ayat Cinta', 'author_id' => 4, 'price' => 70000]);
    Book::create(['title' => 'Supernova', 'author_id' => 5, 'price' => 85000]);
    }
}
