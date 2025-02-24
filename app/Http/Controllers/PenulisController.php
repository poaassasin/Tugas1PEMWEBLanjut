<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    public function index()
    {
        return Penulis::with('books')->get();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $penulis = Penulis::create($validatedData);
        return response()->json($penulis, 201);
    }

    public function show(Penulis $penulis)
    {
        return response()->json($penulis);
    }

}