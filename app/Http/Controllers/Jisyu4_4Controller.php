<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Jisyu4_4Request;

class Jisyu4_4Controller extends Controller
{
    public function index(Request $request)
    {
        if($request->hasCookie('name')){                  //クッキーの確認
            $data = array(                                //$dataへクッキーのデータを保存
                'name' => $request->cookie('name'),
                'address' => $request->cookie('address'),
                'login_id' => $request->cookie('login_id'),
            );
        }else{
            $data =[
                'name' => '',
                'address' => '',
                'login_id' => '',
            ];
        }
        return view('jisyu4_4.input', ['data' => $data]);
    }

    public function post(Jisyu4_4Request $request)
    {
        //全データの取得
        $data = $request->all();
        $response = response()->view('jisyu4_4.output',['data' => $data]);
        $response->cookie('name',$data['name'],100);
        $response->cookie('address',$data['address'],100);
        $response->cookie('login_id',$data['login_id'],100);

        return $response;

    }

}
