@extends('layouts.jisyu')

@section('title', 'Jisyu')

@section('menu_title')
ユーザ情報一覧画面
@endsection

@section('content')
    <form action="/jisyu14/find" method="post">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="検索">
    </form>
   <a href="/jisyu14/add">新規登録</a>
   <table>
   <tr><th>Name(Age)</th><th>Mail</th><th>Select</th><th>Update</th><th>Delete</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->getData()}}</td>
           <td>{{$item->mail}}</td>
           <td><a href="/jisyu14/show?id={{$item->id}}">詳細</a></td>
           <td><a href="/jisyu14/edit?id={{$item->id}}">更新</a></td>
           <td><a href="/jisyu14/del?id={{$item->id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
