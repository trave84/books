<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Book;

class BookController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    
    public function index()
    {
        $books = Book::limit(100)
            ->get();
        return view('books/index', ['books' => $books ] );  //compact['books']
    }

    public function store(Request $request)
    {
        // $request = request()->all();    // TEST: return all
        
        //1st
        $book = Book::create($request->all());
        
        //2nd
        // $book =  new Book();
        // $book->title = $request->input('title');

        // $book = new Book();
        // $book->fill($request->all());
        // $books->save();

        return redirect(action('BookController@index'));

        // $this->validate($request, [
        //     'title' => 'required',
        //     'authors' => 'required',
        //     'image' => 'required',
        // ]);
    }

    public function create()
    {
        return view('/books/create');
    }
}
