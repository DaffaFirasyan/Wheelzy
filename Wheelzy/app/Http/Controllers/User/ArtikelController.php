<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::with('user')->orderBy('created_at', 'desc')->get(); // Urutkan berdasarkan created_at secara descending
        return view('artikel', compact('artikels'));
    }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel-show', compact('artikel'));
    }
}
