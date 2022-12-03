@extends('layouts.admin')
@section('title','Редагувати новину')
@section('content')
    <form method="post" enctype="multipart/form-data" action="{{route('news.update',$post->id)}}">
        @method('PATCH')
        @csrf
        @include('news.form')
    </form>
@endsection
