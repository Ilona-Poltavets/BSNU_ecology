@extends('layouts.admin')
@section('title','Додати зображення')
@section('content')
<form action="{{route('photos.store')}}" method="post" enctype="multipart/form-data">
    @method("POST")
    @csrf
    @include('gallery.form')
</form>
@endsection()
