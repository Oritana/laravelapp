<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Jisyu5_1Controller extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from people');
        return view('jisyu5_1.index', ['items' => $items]);
    }
    public function show(Request $request)
    {
        if (isset($request->id)) {
            $param = ['id' => $request->id];
            $items = DB::select(
                'select * from people where id = :id',
                $param
            );
        } else {
            $items = DB::select('select * from people');
        }
        return view('jisyu5_1.show', ['items' => $items]);
    }
}
