@extends('layouts.helloapp')   {{-- レイアウトの継承設定(レイアウトフォルダ内のhelloappを継承) --}}

@section('title', 'Index')  {{-- titleという名前のセクションに、Indexというテキスト値を設定　
                              → @yieldのtitleに埋め込まれる(※webページ右上に薄くIndexの表示がされる--}}

@section('menubar')           {{-- 親レイアウト(ここではhelloapp.blade.php)に'menubar'というyieldがあれば、そこに、はめ込まれる。 --}}
   @parent                    {{-- @parentは親レイアウトのセクションを示している＝ 親レイアウトの'※メニュー'も残し、子の'インデックスページ'も残す --}}
   インデックスページ
@endsection

@section('content')
    <p>{{$msg}}</p>
    @if (count($errors) > 0)
        <p>入力に問題があります。再入力して下さい。</p>
    @endif
    <form action="/hello" method="post">
    <table>
        @csrf
        @error('name')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>name: </th><td><input type="text" 
            name="name" value="{{old('name')}}"></td></tr>
        @error('mail')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>mail: </th><td><input type="text" 
            name="mail" value="{{old('mail')}}"></td></tr>
        @error('age')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>age: </th><td><input type="text" 
            name="age" value="{{old('age')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send">
        </td></tr>
    </table>
    </form>
@endsection


@section('footer')                       {{-- @yieldのfooterに埋め込まれる --}}
copyright 2020 tuyano.
@endsection