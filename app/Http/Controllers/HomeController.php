<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();

        return view('pages.home', compact('profiles'));
    }
}