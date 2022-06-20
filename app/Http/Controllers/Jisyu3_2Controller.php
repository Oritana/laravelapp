<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jisyu3_2Controller extends Controller
{
    public function index()
    {
        $data = [
            'msg'=>'必要事項を記入してください。',
        ];
        return view('jisyu3_2.input',$data);                   //
    }

    public function post(Request $request)                     //ユーザから受け取る値
    {
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'age'=>$request->age
        ];
        return view('jisyu3_2.output', ['data'=>$data]);       //テンプレートで使われるキー
    }
}
