@extends('layouts.admin')
@section('title','Редагувати картинку')
@section('content')
    <div class="container">
        <form enctype="multipart/form-data" action="{{route('photos.update',$image->id)}}" method="post">
            @csrf
            @method('PATCH')
            @include('gallery.form')
        </form>
    </div>
@endsection
