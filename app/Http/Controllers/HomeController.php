<?php

namespace App\Http\Controllers;

use App\Data\Models\Slide;
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
        $videos = config('app.show_videos', true) ? Video::all() : [];

        return view('home.index')
            ->with('videos', $videos)
            ->with('slides', Slide::shuffle())
        ;
    }
}
