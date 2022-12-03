@extends('layouts.app')
@section('title','News')
@section('content')
    <h1 class="funny-title section-title">@lang("messages.News")</h1>
    <div class="container">
        @foreach($news as $post)
            <a href="{{route("news.show",$post->id)}}">
                <div class="card">
                    <div class="card__header">
                        <img src="{{$post->title_image}}" alt="card__image" class="card__image">
                    </div>
                    <div class="card__body">
                        <h4>{{App::isLocale('uk')?$post->titleUkr:$post->titleEng}}</h4>
                    </div>
                    <div class="card__footer">
                        <p class="date">{{$post->created_at}}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
