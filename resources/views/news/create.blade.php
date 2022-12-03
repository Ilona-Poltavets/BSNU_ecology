@extends('layouts.admin')
@section('title','Додати новину')
@section('content')
    <form method="post" enctype="multipart/form-data" action="{{route('news.store')}}">
        @method('POST')
        @csrf
        @include('news.form')
    </form>
@endsection
