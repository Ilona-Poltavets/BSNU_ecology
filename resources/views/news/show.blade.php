@extends('layouts.app')
@section('title',"post")
@section('content')
    <div class="container">
        @if(App::isLocale('uk'))
            {!! $post->contentUkr !!}
        @else
            {!! $post->contentEng !!}
        @endif
    </div>
@endsection()
