<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>@yield('title')-ホームページ-</title>     {{-- タブ部分 @yieldでセクションの内容をはめ込んで表示 --}}
</head>
<body>
<h1>@yield('title')へようこそ！</h1>             

@yield('header')

@section('content')
    <p>設置コース一覧</p>
@show
</body>
</html>


{{--index.blade.phpの

    @section('title')     
    岡山情報ITクリエイター専門学校
    @endsection 
    
    部分からparent.blade.phpの8行目　～('title')へようこそ～　にはめ込まれて表示される--}}