<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class Jisyu6_4Controller extends Controller
{
    public function index(Request $request)
    {
        $items = Subject::all();
        return view('jisyu6_4.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('jisyu6_4.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Subject::$rules);
        $subject =new Subject ;
        $form = $request->all();
        unset($form['_token']);
        $subject->fill($form)->save();
        return redirect('/jisyu15');
    }
}
