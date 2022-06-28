@extends('layouts.parent')     {{-- layoutsフォルダのparent.blade.phpを継承する --}}

@section('title')              {{-- sectionでページに表示されるコンテンツの区画を定義する --}}
    岡山情報ITクリエイター専門学校
@endsection

@section('header')
    @component('components.header')
        @slot ('h_contents')        {{-- slotは、{{  }}で指定された変数に値を設定するためのもの --}}
            岡山
        @endslot
    @endcomponent
@endsection

@section('content')
@parent
    <ul>
    @each ('components.items', [   /* componetsフォルダにitem's'でファイル作成しているので、items とする */       
                    'ITスペシャリストシステム開発コース', 
                    'ITスペシャリストネットワークセキュリティコース', 
                    'IT公務員コース'],
                    'items')
    </ul>
@endsection
