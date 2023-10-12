<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('components.show',[
            'books'=>Book::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('components.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title'=>'max:255',
            'author'=>'max:255',
            'publ_year'=>'max:4'
        ]);

        Book::create($validated);

        return redirect(route('books.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book): View
    {
      return view('components.edit', ['book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book): RedirectResponse
    {
        $validated = $request->validate([
            'title'=>'max:255',
            'author'=>'max:255',
            'publ_year'=>'max:4'
        ]);

        $book->update($validated);

        return redirect(route('books.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        
    }
}
