<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class Jisyu6_1Controller extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();                       //peopleテーブルの全レコードを取得
        $param = ['input'=> '' ,'items' => $items];   // [ => ''] は空を設定
        return view('jisyu6_1.index', $param);        //
    }
    public function find(Request $request)
    {
        $item = Person::where('name',$request->input)->first();
        return view('jisyu6_1.show', ['item' => $item]);
    }
}
