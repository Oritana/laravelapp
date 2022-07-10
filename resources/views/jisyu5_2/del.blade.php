@extends('layouts.jisyu')

@section('title', 'Jisyu')

@section('menu_title')
ユーザ情報削除画面
@endsection

@section('content')
   <form action="/jisyu11/remove" method="post">    {{-- 削除クリック後、del処理で一覧(/jisyu11)表示する --}}
   <table>
    @foreach ($items as $item)                       {{-- @foreachで $items から順にオブジェクトを $item に取り出していく --}}
      @csrf                                                   {{-- 'hidden'隠しフィールドで主キー(id)も送信 --}}
      <input type="hidden" name="id" value="{{$item->id}}">   {{-- valueに $items から取り出した $item の値を設定(表示) --}}
      <tr><th>name: </th><td>{{$item->name}}</td></tr>        {{-- $item に取り出した値を name　に表示し入力上書き --}}
      <tr><th>mail: </th><td>{{$item->mail}}</td></tr>        {{-- $item に取り出した値を mail　に表示し入力上書き --}}
      <tr><th>age: </th><td>{{$item->age}}</td></tr>          {{-- $item に取り出した値を age　に表示し入力上書き --}}
      <tr><th></th><td><input type="submit" value="削除"></td></tr> {{-- 削除をクリックするとデータが削除される 　　↑　 --}}
      @endforeach

   </table>
   </form>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection



