<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        $name = '';
        $option = 5;

        return view('pages.about', compact('name', 'option'));
    }

    public function loop()
    {
        $data = ['raven', 'kristine', 'iya', 'el'];
        return view('pages.loop', compact('data'));
    }
}
