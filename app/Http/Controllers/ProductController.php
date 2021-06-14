<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        print_r(route('products'));
        $title = 'Welcome to my Laravel 8 course';
        $data = [
            'name' => 'raven',
            'age' => 28,
        ];

        $phones = [
            'iphone' => 'iPhone',
            'samsung' => 'samsung',
        ];

        /* return view('products.index', compact('title', 'data')); */
        /* return view('products.index')->with('data', $data); */
        return view('products.index')->with('phones', $phones);
    }

    public function show($name, $id)
    {
        $phones = [
            'iphone' => 'iPhone',
            'samsung' => 'samsung',
        ];

        $phone = $phones[$name] ?? 'Product ' . $name . ' with an id of ' . $id . ' not exists';

        /* if (key_exists($name, $phones)) { */
        /*   $phone = $phones[$name]; */
        /* } else { */
        /*   $phone = 'Phone not exists'; */
        /* } */

        /* return $id; */
        return view('products.show')->with('phone', $phone);
    }

    public function about()
    {
        return 'About us page';
    }
}
