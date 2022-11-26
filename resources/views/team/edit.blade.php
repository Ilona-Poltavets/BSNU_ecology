@extends('layouts.admin')
@section('title','Редагувати учасника команди')
@section('content')
    <div class="container">
        <form enctype="multipart/form-data" action="{{route('team.update',$member->id)}}" method="post">
            @csrf
            @method('PATCH')
            @include('team.form')
        </form>
    </div>
@endsection
