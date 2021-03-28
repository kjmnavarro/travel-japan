<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Travel Japan</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet"> --}}
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">


        <!-- Styles -->
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    </head>
    <body>
        <section id="loading">
            <div id="loading-content"></div>
        </section>
        <div class="flex-center position-ref full-height" id="banner-tjp">
            @if (Route::has('login'))
                <div class="top-right">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Planning a trip <br> to Japan?
                </div>

                <div class="links">
                    <a href="{{ route('tokyo') }}" title="Click to check Tokyo">Tokyo</a>
                    <a href="{{ route('yokohama') }}" title="Click to check Yokohama">Yokohama</a>
                    <a href="{{ route('kyoto') }}" title="Click to check Kyoto">Kyoto</a>
                    <a href="{{ route('osaka') }}" title="Click to check Osaka">Osaka</a>
                    <a href="{{ route('sapporo') }}" title="Click to check Sapporo">Sapporo</a>
                    <a href="{{ route('nagoya') }}" title="Click to check Nagoya">Nagoya</a>
                </div>
            </div>
        </div>
    </body>
</html>
