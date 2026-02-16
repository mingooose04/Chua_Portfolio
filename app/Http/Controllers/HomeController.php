<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class HomeController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('pages.home', compact('profiles'));
    }
}
