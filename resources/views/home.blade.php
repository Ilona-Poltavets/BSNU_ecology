<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">

    <!-- Font Awesome 6.1.0 Iconic Font -->
    <link rel="stylesheet" href="{{url('css/fontawesome/css/fontawesome.css')}}"/>

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>

    <!-- JQUERY 3.6.0 LIBRARY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Fancypps -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>

    <!-- FILTERS, AJAX, STYLE JS -->

</head>
<body class="">
<nav class="navbar navbar-expand-lg navbar-dark menu fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"></div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="nav navbar-nav nav-text">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#">@lang("messages.Home")</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{route("about")}}">@lang("messages.About")</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#">@lang("messages.Our Team")</a>
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
        </div>
    </div>
</nav>

{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <!-- Left Side Of Navbar -->--}}
{{--            <ul class="navbar-nav me-auto">--}}

{{--            </ul>--}}

{{--            <!-- Right Side Of Navbar -->--}}
{{--            <ul class="navbar-nav ms-auto">--}}
{{--                <!-- Authentication Links -->--}}
{{--                @guest--}}
{{--                    @if (Route::has('login'))--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}

{{--                    @if (Route::has('register'))--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                @else--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
{{--                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                            {{ Auth::user()->name }}--}}
{{--                        </a>--}}

{{--                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                            <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                               onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                {{ __('Logout') }}--}}
{{--                            </a>--}}

{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endguest--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
<div class="">
    <div class="textBlock">
        <img class="logo-title1 mx-4" src="{{asset("images/logo.jpg")}}" alt=""/>
        <h2 class="text">"European Green Dimensions"</h2>
    </div>
    <div class="textBlock2">
        <img class="logo-title2 mx-4" src="{{asset("images/logo_bsnu.jpg")}}" alt=""/>
        <h3 class="text">@lang("messages.Bsnu")</h3>
    </div>
    <img src="{{asset('images/background.jpg')}}" alt="background" class="mainBackground"/>
</div>
<h1 class="funny-title section-title">@lang("messages.Our Team")</h1>
<div>

</div>
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
</body>
</html>
