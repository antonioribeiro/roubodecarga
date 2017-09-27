<?php

namespace App\Data\Models;

class Slide
{
    protected static $slides = [

        [
            'filename' => 'slider_001.jpg',
        ],

        [
            'filename' => 'slider_002.jpg',
        ],

        [
            'filename' => 'slider_003.jpg',
        ],

        [
            'filename' => 'slider_004.jpg',
        ],

        [
            'filename' => 'slider_005.jpg',
        ],

        [
            'filename' => 'slider_006.jpg',
        ],

        [
            'filename' => 'slider_007.jpg',
        ],

        [
            'filename' => 'slider_008.jpg',
        ],

        [
            'filename' => 'slider_009.jpg',
        ],

        [
            'filename' => 'slider_010.jpg',
        ],

        [
            'filename' => 'slider_011.jpg',
        ],

        [
            'filename' => 'slider_012.jpg',
        ],

    ];

    public static function all()
    {
        return collect(static::$slides);
    }

    public static function shuffle()
    {
        return static::all()->shuffle();
    }
}
