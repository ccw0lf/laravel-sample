<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getAllBooks()
    {
        $allBooks = Books::all();
      
        return view('books.getAllBooks', [
            "books" => $allBooks
        ]);
    }

    public function createBook(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'isbn' => 'required|max:255',
        ]);

        $book = new Books();
        $book->title = $validatedData['title'];
        $book->isbn = $validatedData['isbn'];
        $book->save();

        return redirect()->route('books')->with('success', 'Book created successfully.');
    }
}
