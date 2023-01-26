<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/main_style.css')}}">
    <link rel="stylesheet" href="{{url('css/loader.css')}}">

    <!-- Font Awesome 6.1.0 Iconic Font -->
    <link rel="stylesheet" href="{{url('css/fontawesome/css/all.css')}}"/>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.0/jquery-migrate.min.js"
            integrity="sha512-QDsjSX1mStBIAnNXx31dyvw4wVdHjonOwrkaIhpiIlzqGUCdsI62MwQtHpJF+Npy2SmSlGSROoNWQCOFpqbsOg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Fancypps -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>

    <!-- Slider -->
    @vite('resources/sass/app.scss')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <script type="text/javascript" src="{{url('js/carusel.js')}}"></script>
    <script type="text/javascript" src="{{url('js/script.js')}}"></script>

    <link rel="stylesheet" href="{{url('js/leaflet/leaflet.css')}}"/>
    <script src="{{url('js/leaflet/leaflet.js')}}"></script>
</head>
<body onload="myFunction()" style="overflow-x: hidden">
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
            <button class="navbar-toggler menuBtn" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup"
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

    <div>
        <div class="textBlock">
            <img class="logo-title1 mx-4" src="{{asset("images/ue.jpg")}}" alt=""/>
            <h2 class="text">@lang("messages.title")</h2>
        </div>
        <div class="textBlock2">
            <img class="logo-title2 mx-4" src="{{asset("images/logo.jpg")}}" alt=""/>
            <h3 class="text">@lang("messages.Bsnu")</h3>
        </div>
        <img src="{{asset('images/background.jpg')}}" alt="background" class="mainBackground"/>
    </div>

    <h1 class="funny-title section-title" id="team">@lang("messages.Our Team")</h1>

    <div class="gtco-testimonials">
        <div class="owl-carousel owl-carousel1 ">
            @foreach($team as $member)
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper text-center">
                                    <img class="cap-img" src="{{asset('images/cap.png')}}" alt="">
                                    <img class="card-image" src="{{asset($member->image)}}" alt="">
                                </div>
                                <div class="card-body text-center">
                                    <h4 class="card-title">{{App::isLocale('en')?$member->nameEng:$member->nameUkr}}</h4>
                                    <p>
                                        {{App::isLocale('en')?$member->rankEng:$member->rankUkr}}
                                    </p>
                                    <p class="card-text">
                                        {{App::isLocale('en')?$member->aboutEng:$member->aboutUkr}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <h1 class="funny-title section-title">@lang("messages.Gallery")</h1>

    <div class="container" id="photos">
    </div>
    <div class="row p-4" style="clear: left">
        <div class="col text-center">
            <button class="btn btn-outline-primary" id="viewmore">@lang('messages.View more')</button>
        </div>
    </div>

    <h1 class="header-title" style="clear: left" id="team">@lang("messages.Keep in touch")</h1>
    <div class="container">
        <div class="socials">
            <div class="social youtube">
                <a href="https://www.youtube.com/@olenamitryasova7363" target="_blank"><i
                        class="fa-brands fa-youtube fa-2x"></i></a>
            </div>
            <div class="social instagram">
                <a href="https://www.instagram.com/europeangreendimensions/" target="_blank"><i
                        class="fa-brands fa-instagram fa-2x"></i></a>
            </div>
            <div class="social facebook">
                <a href="https://www.facebook.com/groups/2047397135306751" target="_blank"><i
                        class="fa-brands fa-facebook fa-2x"></i></a>
            </div>
            <div class="social linkedin">
                <a href="https://www.linkedin.com/company/88021671/admin/" target="_blank"><i
                        class="fa-brands fa-linkedin fa-2x"></i></a>
            </div>
        </div>
    </div>

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
        {{--        <div id="map" style="width:100%;height: 300px;"></div>--}}
    </div>
</div>
{{--<script src="{{asset('js/map.js')}}"></script>--}}
<script>
    var len = 4;
    var maxLen = 0;
    var array = JSON.parse('<?php echo $images; ?>');
    maxLen = array.length - 4;

    function getPhotos() {
        var newHTML = [];
        for (var i = 0; i < len; i++) {
            newHTML.push('<a data-fancybox="images" href="' + array[i].path + '"><img class="tile" src="' + array[i].path + '" alt=""></a>');
        }
        $("#photos").html(newHTML.join(""));
    }

    getPhotos();
    $('#viewmore').on('click', function () {
        if (maxLen - 4 < 0) {
            len = array.length;
            this.hidden = true;
        } else {
            len += 4;
            maxLen -= 4;
        }
        getPhotos();
    })
</script>
</body>
</html>
