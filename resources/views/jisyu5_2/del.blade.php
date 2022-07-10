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
      <input type="hidden" name="id" value="{{$item->id}}">   {{-- $items から取り出した $item で'id'にアクセスしvalueに設定 --}}
      <tr><th>name: </th><td>{{$item->name}}</td></tr>        {{-- $item に取り出した'id'のレコードの name　を表示 --}}
      <tr><th>mail: </th><td>{{$item->mail}}</td></tr>        {{-- $item に取り出した'id'のレコードの mail を表示 --}}
      <tr><th>age: </th><td>{{$item->age}}</td></tr>          {{-- $item に取り出した'id'のレコードの age を表示 --}}
      <tr><th></th><td><input type="submit" value="削除"></td></tr> {{-- 削除をクリックするとデータが削除される 　　↑　 --}}
      @endforeach

   </table>
   </form>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection



