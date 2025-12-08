<?php

namespace App\Http\Controllers;


use App\Models\aktivitas;

use Illuminate\Http\Request;

class ActivityViewController extends Controller
{
    public function activityData()
    {
        $experiences = Aktivitas::all();

        return view('experience', compact('experiences'));
    }
}
