<?php

namespace App\Http\Controllers;

use App\Data\Models\Video;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index')->with('videos', Video::all());
    }
}
