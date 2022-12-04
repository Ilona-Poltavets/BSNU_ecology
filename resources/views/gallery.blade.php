@extends('layouts.app')
@section('title','Gallery')
@section('content')
    <div class="container">
        @foreach($images as $image)
            <a data-fancybox="images" href="{{$image->path}}">
                <img class="tile" src="{{$image->path}}" alt="">
            </a>
        @endforeach
        <div style="clear: left">
            {{$images->links()}}
        </div>
    </div>
@endsection
