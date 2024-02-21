<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $books = Book::latest()->paginate(5);
        return view("books.index",compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view("books.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title"=>"required",
            "author"=>"required",
            "description"=>"required"
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')
        ->with('success','Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book):View
    {
        return view('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book):View
    {
        return view("books.edit",compact("book"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'description'=>'required',
        ]);

        $book->update($request->all()); 

        return redirect()->route('books.index')
        ->with('success','Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')
        ->with('success','Book deleted successfully');
    }
}
