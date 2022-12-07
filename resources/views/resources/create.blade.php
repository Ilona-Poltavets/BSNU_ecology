@extends('layouts.admin')
@section('title','Додати ресурси')
@section('content')
    <form method="post" action="{{route('resource.store')}}" enctype="multipart/form-data">
        @method('POST')
        @csrf
        @include('resources.form')
    </form>
@endsection
