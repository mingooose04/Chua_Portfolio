<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function index()
    {
        $experience = Experience::all();

        return view('pages.experience', compact('experience'));
    }
}

