<?php

namespace App\Http\Controllers;

use App\Models\aktivitas;
use App\Models\Artikel;
use App\Models\Pengunjung;
use Illuminate\Http\Request;

class HomeViewController extends Controller
{
    public function homeData()
    {
        $artikels = Artikel::all();
        $pengunjungs = Pengunjung::all();
        $experiences = Aktivitas::all(); 

        return view('home', compact('artikels', 'pengunjungs', 'experiences'));
    }
}
