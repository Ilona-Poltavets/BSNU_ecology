@extends('layouts.app')
@section('title','Resources')
@section('content')
    <object class="show-content__preview" data='{{asset($file->path)}}' type="{{$file->type=='pdf'?'application/pdf':'application/pptx'}}">
        <iframe src='{{asset($file->path)}}'>
            <p>This browser does not support PDF!</p>
        </iframe>
    </object>
@endsection
