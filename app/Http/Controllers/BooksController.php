<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        return Books::with('penulis')->get();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis_id' => 'required|exists:penulis,id',
        ]);

        $books = Books::create($validatedData);
        return response()->json($books, 201);
    }

    public function show(Books $books)
    {
        return response()->json($books);
    }

}