<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = [
            'Breaking Bad',
            'Game of Thrones',
            'Stranger Things',
            'The Crown',
        ];
        Return view('series.index')->with('series', $series);
    }
    public function create()
    {
        return view('series.create');
    }
}
