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


    public function details(Artikel $article)
    {
        $experienceList = Artikel::where('id_artikel', '!=', $article->id_artikel)
            ->get();

        return view('articleDetails', compact(
            'article',

        ));
    }
}
