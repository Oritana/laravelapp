@extends('layouts.jisyu')

@section('title', 'Jisyu')

@section('menu_title')
ユーザ情報一覧画面
@endsection

@section('content')
   <a href="/jisyu11/add">新規登録</a>  {{-- 新規登録をクリックするとa hrefのaddページにとぶ --}}
   <table>
   <tr><th>Name</th><th>Mail</th><th>Age</th><th>Select</th><th>Update</th><th>Delete</th></tr>
   @foreach ($items as $item)   {{-- @foreachで$itemsから順にオブジェクトを$itemに取り出していく --}}
       <tr>
           <td>{{$item->name}}</td>  {{-- $itemに取り出したレコードがnameフィールドの値として出力されている --}}
           <td>{{$item->mail}}</td>  {{-- $itemに取り出したレコードがmailフィールドの値として出力されている --}}
           <td>{{$item->age}}</td>   {{-- $itemに取り出したレコードがageフィールドの値として出力されている --}}
           <td><a href="/jisyu11/show?id={{$item->id}}">詳細</a></td>  {{-- 各レコードの詳細をクリックするとhrefから'show.blade.php'にとんで、$itemがDBのidにアクセスして各レコードのユーザ詳細情報が表示される --}}
           <td><a href="/jisyu11/edit?id={{$item->id}}">更新</a></td>  {{-- 各レコードの更新をクリックするとhrefから'edit.blade.php'にとんで、$itemがDBのidにアクセスして各レコードのユーザ情報更新画面が表示される --}}
           <td><a href="/jisyu11/del?id={{$item->id}}">削除</a></td>   {{-- 各レコードの削除をクリックするとhrefから'del.blade.php'にとんで、$itemがDBのidにアクセスして各レコードの削除画面が表示される --}}
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
