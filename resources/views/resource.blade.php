@extends('layouts.app')
@section('title','Resources')
@section('content')
    <h1 class="funny-title section-title">@lang("messages.Resources")</h1>
    <div class="container">
        <a class="btn btn-outline-info" href="{{route('resources',"pdf")}}">PDF</a>
        <a class="btn btn-outline-info" href="{{route('resources',"pptx")}}">Presentations</a>
        <ul class="list-group list-group-flush">
            @foreach($files as $file)
                <li  class="list-group-item">
                    <img class="file-icon" src="{{asset('/images/file.png')}}" alt=""/>
                    <a href="{{asset($file->path)}}" target="_blank">{{$file->name}}</a>
                </li>
            @endforeach
        </ul>
    </div>

{{--    <script>--}}
{{--        $('#pdf').on('click', function () {--}}
{{--            $.ajax({--}}
{{--                method:"GET",--}}
{{--                url: '/resources',--}}
{{--                data: {--}}
{{--                    type: "pdf",--}}
{{--                },--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}

@endsection
