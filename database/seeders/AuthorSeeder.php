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
        //
    Author::create(['name' => 'Tere Liye', 'bio' => 'Penulis novel terkenal']);
    Author::create(['name' => 'Andrea Hirata', 'bio' => 'Penulis Laskar Pelangi']);
    Author::create(['name' => 'Pramoedya', 'bio' => 'Sastrawan Indonesia']);
    Author::create(['name' => 'Habiburrahman', 'bio' => 'Penulis islami']);
    Author::create(['name' => 'Dee Lestari', 'bio' => 'Penulis Supernova']);
    }
}
