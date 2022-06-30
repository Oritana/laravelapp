<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Jisyu4_3Request;

class Jisyu4_3Controller extends Controller
{
    public function index()
    {
        $data = [
            'msg'=>'必要事項を記入してください。',
        ];
        return view('jisyu4_3.input', $data);    /* view(テンプレート,配列) */
    }

    public function post(Jisyu4_3Request $request)
    {
        //全データの取得
        $data = $request->all();

        return view('jisyu4_3.output', ['data' => $data]);
    }

}
