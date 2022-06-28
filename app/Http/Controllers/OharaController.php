<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OharaController extends Controller
{
    public function index(){
        return view('ohara.index');   /* oharaフォルダのindex.blade.phpを呼び出す */
    }

}
