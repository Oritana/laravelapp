<?php
namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider             /* サービスプロバイダの定義 */
{
    public function boot()
    {
       View::composer(                                          /* View:composerメソッドの実行 */
           'hello.index', 'App\Http\Composers\HelloComposer'    /* View::composer(ビューの指定、関数またはクラス) */
       );                                                       /* HelloComposerをビューコンポーザとして利用する */
    }

}