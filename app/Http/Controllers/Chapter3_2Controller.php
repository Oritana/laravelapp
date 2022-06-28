<?php

namespace App\Http\Controllers;

use  Illuminate\Http\Request;
use  Illuminate\Http\Response;

class Chapter3_2Controller extends Controller
{
    public function index()
    {
        return view('ohara.index');
    }
}
