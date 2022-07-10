{{-- show ユーザ詳細情報画面の表示 --}}

@extends('layouts.jisyu')

@section('title', 'Jisyu')

@section('menu_title')
ユーザ情報詳細画面

@endsection
@section('content')
   <table>
   <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
   @foreach ($items as $item)    {{-- @foreachで$itemsから順にオブジェクトを$itemに取り出していく --}}
       <tr>
           <td>{{$item->name}}</td>  {{-- $itemに取り出したレコードがnameフィールドの値として出力し表示される --}}
           <td>{{$item->mail}}</td>  {{-- $itemに取り出したレコードがmailフィールドの値として出力し表示される --}}
           <td>{{$item->age}}</td>   {{-- $itemに取り出したレコードがageフィールドの値として出力し表示される --}}
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
