<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use Illuminate\Http\Request;

class ActivityViewController extends Controller
{
    public function activityData()
    {
        $experiences = Aktivitas::all();

        return view('experience', compact('experiences'));
    }

    public function details(Aktivitas $experience)
    {
        $experienceList = Aktivitas::where('id_aktivitas', '!=', $experience->id_aktivitas)
            ->take(4)
            ->get();

        return view('experience_details', compact(
            'experience',
            'experienceList'
        ));
    }
}
