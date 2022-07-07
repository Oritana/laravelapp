@extends('layouts.jisyu')

@section('title', 'Jisyu')

@section('menu_title')
ユーザ情報一覧画面
@endsection

@section('content')
   <a href="/jisyu5_2/add">新規登録</a>
   <table>
   <tr><th>Name</th><th>Mail</th><th>Age</th><th>Select</th><th>Update</th><th>Delete</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->name}}</td>
           <td>{{$item->mail}}</td>
           <td>{{$item->age}}</td>
           <td><a href="/jisyu11/show?id={{$item->id}}">詳細</a></td>
           <td><a href="/jisyu11/edit?id={{$item->id}}">更新</a></td>
           <td><a href="/jisyu11/del?id={{$item->id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection