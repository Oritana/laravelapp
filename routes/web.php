<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello','HelloController@index');
Route::post('hello','HelloController@post');

//ーーーー実習用ーーーーー
Route::get('jissyu2', 'JissyuController@index');

//Jisyu3_1
Route::get('jisyu3_1','Jisyu3_1Controller@index');
Route::post('jisyu3_1','Jisyu3_1Controller@post');

//Jisyu3_2
Route::get('jisyu3_2','Jisyu3_2Controller@index');     //Route::get(アドレス,コントローラ名@アクション名)
Route::post('jisyu3_2','Jisyu3_2Controller@post');     //Route::post(アドレス,コントローラ名@アクション名)

Route::get('jisyu3_3','Jisyu3_3Controller@index');     //Route::post(アドレス,コントローラ名@アクション名)

use App\Http\Middleware\HelloMiddleware;

Route::get('hello','HelloController@index')
    ->middleware(HelloMiddleware::class);

Route::get('hello','HelloController@index');
Route::post('hello','HelloController@post');

Route::get('Chapter3_2','Chapter3_2Controller@index');

Route::get('ohara','OharaController@index');

Route::get('jisyu4_1', 'Jisyu4_1Controller@index');
Route::post('jisyu4_1', 'Jisyu4_1Controller@post');

Route::get('jisyu4_2', 'Jisyu4_2Controller@index'); //Route::get(アドレス,コントローラ名@アクション名)
Route::post('jisyu4_2', 'Jisyu4_2Controller@post');  //Route::post(アドレス,コントローラ名@アクション名)

Route::get('jisyu4_3', 'Jisyu4_3Controller@index'); //Route::get(アドレス,コントローラ名@アクション名)
Route::post('jisyu4_3', 'Jisyu4_3Controller@post');  //Route::post(アドレス,コントローラ名@アクション名)

Route::get('jisyu9', 'Jisyu4_4Controller@index'); //Route::get(アドレス,コントローラ名@アクション名)
Route::post('jisyu9', 'Jisyu4_4Controller@post');  //Route::post(アドレス,コントローラ名@アクション名)
