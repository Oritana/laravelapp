<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class Jisyu6_4Controller extends Controller
{
    public function index(Request $request)
    {
        $items = ___(7)___;
        return view('jissyu6_4.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('___(8)___');
    }

    public function create(Request $request)
    {
        $this->validate($request, Subject::$rules);
        $subject = ___(9)___;
        $form = ___(10)___;
        unset($form['_token']);
        $subject->___(11)___;
        return redirect('/jissyu15');
    }
}
