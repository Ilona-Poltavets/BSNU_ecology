<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield("title")</title>

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
            integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Fancypps -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/loader.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
</head>
<body onload="myFunction()">
<div id="loader" class="body">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<div style="display:none;" id="myDiv">
    <div class="logos">
        <img class="logo" src="{{asset("images/logos/logo1.png")}}" alt="">
        <img class="logo" src="{{asset("images/logos/logo2.png")}}" alt="">
        <img class="logo" src="{{asset("images/logo_bsnu1.jpg")}}" alt="">
        <img class="logo" src="{{asset("images/logos/logo3.jpg")}}" alt="">
        <img class="logo" src="{{asset("images/logos/logo4.jpg")}}" alt="">
        <img class="logo" src="{{asset("images/logos/logo5.jpg")}}" alt="">
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark menu position-absolute top-20">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse"></div>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="nav navbar-nav nav-text">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{route("home")}}">@lang("messages.Home")</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{route("about")}}">@lang("messages.About")</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{route("home")}}#team">@lang("messages.Our Team")</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{route('all_news')}}">@lang("messages.News")</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{route('gallery')}}">@lang("messages.Gallery")</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{route('resources',"pdf")}}">@lang("messages.Resources")</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <a href="{{route('setlocale',['lang'=>'uk'])}}"><img class="flag {{(App::isLocale('uk') ? 'active' : '')}}" alt="ukraine" src="{{asset('images/langs/uk.png')}}"/></a>
                    <a href="{{route('setlocale',['lang'=>'en'])}}"><img class="flag {{(App::isLocale('en') ? 'active' : '')}}" alt="english" src="{{asset('images/langs/en.png')}}"/></a>
                </ul>
            </div>
        </div>
    </nav>

    <div class="py-4 main">
        @yield('content')
    </div>

    <hr>
    <div class="footer" style="clear: left">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <b>Copyrigths</b>
                    <p style="text-align: justify">@lang("messages.footer_copyrights")</p>
                </div>
                <div class="col">
                    <b>@lang("messages.footer_last_news")</b>
                    <ul class="">
                        @foreach($news as $post)
                            <li><a style="text-decoration: none;color:black"
                                   href="{{route("news.show",$post->id)}}">{{App::isLocale("uk")?$post->titleUkr:$post->titleEng}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col">
                    <b>@lang("messages.footer_contacts")</b>
                    <ul class="list">
                        <li>@lang("messages.footer_coordinator")</li>
                        <li><i class="fa-solid fa-phone"></i> +38(095)2880479</li>
                        <li><i class="fa-solid fa-location-dot"></i>@lang("messages.footer_location")</li>
                        <li><i class="fa-regular fa-envelope"></i> eco-terra@ukr.net</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/script.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
</body>
</html>
