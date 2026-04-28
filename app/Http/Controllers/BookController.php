<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Genre;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    //
    public function index() {
         $genre = new Genre();
        $author = new Author();

         return view('books', [
            'genres' => $genre->getAll(),
            'authors' => $author->getAll()
        ]);
    }
}
