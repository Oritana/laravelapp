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

Route::get('jisyu4_2', 'Jisyu4_2Controller@index');
Route::post('jisyu4_2', 'Jisyu4_2Controller@post');

//------------------------トップページの表示-------------
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

//--------------------データの更新-------------
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

//--------------------データの削除-------------
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

//-------------------- 5-20 ---------------------
Route::get('hello/show', 'HelloController@show');

//-------------------- 6-4 ---------------------
Route::get('person', 'PersonController@index');

//-------------------- 6-9 ---------------------
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');

//保存----------------- 6-21 ---------------------
Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');

//更新----------------- 6-24 ---------------------
Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');

//削除----------------- 6-27 ---------------------
Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');

//----------------- 6-34 ---------------------
Route::get('board', 'BoardController@index');

Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');

//----------------- リスト7-6 ---------------------
Route::resource('rest', 'RestappController');

//----------------- リスト7-12 ---------------------
Route::get('hello/rest', 'HelloController@rest');

//----------------- リスト7-15 ---セッションの利用------
Route::get('hello/session', 'HelloController@ses_get');
Route::post('hello/session', 'HelloController@ses_put');
Auth::routes();
//----------------- リスト7-31 --認証チェック------
Route::get('hello', 'HelloController@index')
    ->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
//----------------- リスト7-34 --ログイン認証------
Route::get('hello/auth', 'HelloController@getAuth');
Route::post('hello/auth', 'HelloController@postAuth');


//-------------- 効果測定2-1  ------
Route::get('kouka2_1', 'Kouka2_1Controller@index');
Route::post('kouka2_1/find', 'Kouka2_1Controller@find');

//-------------- 効果測定2-2  ------
Route::get('kouka2_2', 'Kouka2_2Controller@index');
Route::post('kouka2_2/find', 'Kouka2_2Controller@find');
Route::get('kouka2_2/show', 'Kouka2_2Controller@show');
Route::get('kouka2_2/add', 'Kouka2_2Controller@add');
Route::post('kouka2_2/create', 'Kouka2_2Controller@create');
Route::get('kouka2_2/edit', 'Kouka2_2Controller@edit');
Route::post('kouka2_2/update', 'Kouka2_2Controller@update');
Route::get('kouka2_2/del', 'Kouka2_2Controller@del');
Route::post('kouka2_2/remove', 'Kouka2_2Controller@remove');

