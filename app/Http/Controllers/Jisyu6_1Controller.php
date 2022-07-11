<?php                                       /* DBがないエラーがでる場合「.env」の*/
                                            /* DB_DATABASE=database_test　を DB_DATABASE=databaseに変更 */
namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class Jisyu6_1Controller extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();
        $param = ['input' => '','items'=> $items];
        return view('jisyu6_1.index', $param);
    }
    public function find(Request $request)
    {
        $item = Person::where('name', $request-> input)->first();
        return view('jisyu6_1.show', ['item' => $item]);
    }
}

