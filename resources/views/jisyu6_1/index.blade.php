@extends('layouts.jisyu')

@section('title', 'Jisyu')

@section('menu_title')
ユーザ情報一覧画面
@endsection

@section('content')
    <form action="/jisyu13/find" method="post">   {{-- 検索をクリックすると、actionが実行され/jisyu13/findで結果表示 --}}
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="検索">
    </form>
   <table>
   <tr><th>Name(Age)</th><th>Mail</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->getData()}}</td>
           <td>{{$item->mail}}</td>
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
