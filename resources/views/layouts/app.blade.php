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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark menu shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse"></div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
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
                            <a class="nav-link" href="#">@lang("messages.News")</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">@lang("messages.Gallery")</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">@lang("messages.Resources")</a>
                        </li>
                    </ul>

{{--                    <!-- Right Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav ms-auto">--}}
{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            @if (Route::has('login'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}

{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }}--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <div class="footer">
            <select name="setLocale" class="form-select" onchange="window.location.href=this.options[this.selectedIndex].value;">
                <option value="{{route('setlocale', ['lang' => 'en'])}}" {{(App::isLocale('en') ? 'selected' : '')}}>
                    English
                </option>
                <option value="{{route('setlocale', ['lang' => 'uk'])}}" {{(App::isLocale('uk') ? 'selected' : '')}}>
                    Українська
                </option>
            </select>
            <div class="logos">
                <img class="logo" src="{{asset("images/logos/logo1.png")}}" alt="">
                <img class="logo" src="{{asset("images/logos/logo2.png")}}" alt="">
                <img class="logo" src="{{asset("images/logo_bsnu.jpg")}}" alt="">
                <img class="logo" src="{{asset("images/logos/logo3.jpg")}}" alt="">
                <img class="logo" src="{{asset("images/logos/logo4.jpg")}}" alt="">
                <img class="logo" src="{{asset("images/logos/logo5.jpg")}}" alt="">
            </div>
        </div>
    </div>
</body>
</html>
