<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Jisyu5_2Controller extends Controller
{



    public function index(Request $request)
    {
        $items = DB::select('select * from people');            /* peopleテーブルから全データとってきて$itemsに入れてね */
        return view('jisyu5_2.index', ['items' => $items]);     /* select文でレコードを配列に取得し、  */
    }                                                           /* 'items'という名前でテンプレートにreturn viewで渡す */

    public function show(Request $request)                      /* ユーザ詳細情報画面表示 */
    {
        $param = ['id' => $request->id];              /* ['id' => $request->id]という配列を用意。 */
        $items = DB::select(                          /* クエリ文字を使い、idの値を渡すようにしている。 */
            'select * from people where id = :id',    /* クエリ文字で受け取った'id'のレコードをDB::selectで検索し、 */
            $param                                    /* SQL文と一緒にselectメソッドに渡す。 */
        );                                            /* ':id'に第2引数の$param配列から'id'の値を取り出して、はめ込む */
        return view('jisyu5_2.show', ['items' => $items]);   /* それを'items'という名前でテンプレートにreturn viewで渡す */
    }


    

    public function add(Request $request)        /* 新規登録画面 */
    {
        return view('jisyu5_2.add');             /* jisyu5_2フォルダの'add.blade.php'を表示させる */
    }

    public function create(Request $request)     /* createアクションは、addで入力後、新規登録をクリックし、 */
    {                                            /* peopleテーブルに入力されたデータを格納するもの */
        $param = [                               /* createアクションメソッドで新規登録されたフォームの内容を基に */
            'name' => $request->name,            /* レコードの作成を行う */
            'mail' => $request->mail,            /* $paramに新規登録フォームの値を保管する */
            'age' => $request->age,
        ];
        DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);
        return redirect('/jisyu11');   /* 第2引数の$param配列をパラメータ引数にして、DB::insertを呼び出し実行 */
    }                                  /* return viewで(/jisyu11)に一覧と一緒に表示させる */



    public function edit(Request $request)          /* ユーザ情報更新画面 */
    {                                               /* ['id' => $request->id]という配列を用意。 */
        $param = ['id' => $request->id];            /* クエリ文字を使い、idの値を渡すようにしている。 */
        $items = DB::select('select * from people where id = :id', $param); /* クエリ文字で受け取った'id'のレコードをDB::selectで検索し、 */
        return view('jisyu5_2.edit', ['items' => $items]);                  /* SQL文と一緒にselectメソッドに渡す。 */
    }                                                                        /* ':id'に第2引数の$param配列から'id'の値を取り出して、はめ込む */                                                       

    public function update(Request $request)         /* updateアクションは、editで入力後、更新をクリックし、 */
    {                                                /* peopleテーブルに入力されたデータを格納するもの */
        $param = [                                   /* updateアクションメソッドで更新されたフォームの内容を基に */
            'id' => $request->id,                    /* レコードの更新を行う */
            'name' => $request->name,                /* $paramに更新フォームの値を保管する */
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::update('update people set name =:name, mail = :mail, age = :age where id =:id', $param);
        return redirect('/jisyu11');                 /* 第2引数の$param配列をパラメータ引数にして、DB::updateを呼び出し実行 */
    }                                                /* return viewで(/jisyu11)に一覧と一緒に表示させる */



    public function del(Request $request)            /* ユーザ情報削除画面 */
    {                                                /* ['id' => $request->id]という配列を用意。 */
        $param = ['id' => $request->id];             /* クエリ文字を使い、idの値を渡すようにしている。 */
        $items = DB::select('select * from people where id = :id', $param); /* クエリ文字で受け取った'id'のレコードをDB::selectで検索し、 */
        return view('jisyu5_2.del', ['items' => $items]);                   /* SQL文と一緒にselectメソッドに渡す。 */
    }                                                               /* ':id'に第2引数の$param配列から'id'の値を取り出して、はめ込む(削除するレコード表示) */ 

    public function remove(Request $request)          /* removeアクションは、del で select されたレコードを */
    {                                                 /* peopleテーブルから削除するもの */
        $param = ['id' => $request->id];              /* removeアクションメソッドで削除されたフォームの内容を基に */
        DB::delete('delete from people where id = :id', $param);  /* peopleテーブル更新する */
        return redirect('/jisyu11');                  /* return viewで(/jisyu11)に更新された一覧が表示される */
    }
}
