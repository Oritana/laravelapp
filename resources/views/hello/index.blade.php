@extends('layouts.helloapp')   {{-- レイアウトの継承設定(レイアウトフォルダ内のhelloappを継承) --}}

@section('title', 'Index')  {{-- titleという名前のセクションに、Indexというテキスト値を設定　
                              → @yieldのtitleに埋め込まれる(※webページ右上に薄くIndexの表示がされる--}}

@section('menubar')           {{-- 親レイアウト(ここではhelloapp.blade.php)に'menubar'というyieldがあれば、そこに、はめ込まれる。 --}}
   @parent                    {{-- @parentは親レイアウトのセクションを示している＝ 親レイアウトの'※メニュー'も残し、子の'インデックスページ'も残す --}}
   インデックスページ
@endsection

@section('content')
   <p>ここが本文のコンテンツです。</p>
   <p>Controller value<br>'message' = {{$message}}</p>
   <p>ViewComposer value<br>'view_message' = {{$view_message}}</p>
@endsection


@section('footer')                       {{-- @yieldのfooterに埋め込まれる --}}
copyright 2020 tuyano.
@endsection