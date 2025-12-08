<?php

namespace App\Http\Controllers;

use App\Models\Artikel;

use Illuminate\Http\Request;

class ArtikelViewController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        return view('articles', compact('artikel'));
    }
}
