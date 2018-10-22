<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::limit(100)
            ->get();
        return view('books/index', ['books' => $books ] );
    }
}
