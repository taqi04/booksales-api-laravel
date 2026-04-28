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
        $books = Book::with('author')->get();
        return view('books', compact('books'));
    }
}
