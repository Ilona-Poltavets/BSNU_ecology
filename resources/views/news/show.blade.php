@extends('layouts.app')
@section('title',"post")
@section('content')
    <div class="container">
        <h1 style="text-align: center">{{App::isLocale('uk')?$post->titleUkr:$post->titleEng}}</h1>
        @if(App::isLocale('uk'))
            {!! $post->contentUkr !!}
        @else
            {!! $post->contentEng !!}
        @endif
    </div>
@endsection()
