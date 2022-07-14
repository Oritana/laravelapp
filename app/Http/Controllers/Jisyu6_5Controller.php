<?php

namespace App\Http\Controllers;

use App\Person;

class Jisyu6_5Controller extends Controller
{
    public function index()
    {
        $items = Person::all();
        return view('jisyu6_5.index', ['items' => $items]);
    }

    public function show()
    {
        $items = Person::show;
        return view('___(8)___', ['items' => $items]);
    }
}
