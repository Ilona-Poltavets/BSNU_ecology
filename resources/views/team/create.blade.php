@extends('layouts.admin')
@section('title','Додати учасника команди')
@section('content')
    <div class="container">
        <form enctype="multipart/form-data" action="{{route('team.store')}}" method="post">
            @csrf
            @method('POST')
            @include('team.form')
        </form>
    </div>
@endsection
