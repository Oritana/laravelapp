<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Jissyu5_2Controller extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from people');
        return view('___(8)___', ['items' => $items]);
    }
    public function show(Request $request)
    {
        $param = ['id' => ___(9)___];
        $items = DB::select(
            '___(10)___',
            $param
        );
        return view('jisyu5_2.show', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('___(11)___');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => ___(12)___,
            'age' => ___(13)___,
        ];
        DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);
        return redirect('/jisyu11');
    }
    public function edit(Request $request)
    {
        $param = ['id' => $request->id];
        $items = DB::select('select * from people where id = :id', $param);
        return view('___(14)___', ___(15)___);
    }

    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::update('___(16)___', $param);
        return redirect('/jisyu11');
    }

    public function del(Request $request)
    {
        $param = ['id' => $request->id];
        $items = DB::select('select * from people where id = :id', $param);
        return view('jisyu5_2.del', ['items' => $items]);
    }

    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('___(17)___', $param);
        return redirect('___(18)___');
    }
}
