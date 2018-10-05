<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}"/>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <div class="wrapper">
            <header>

                <nav>

                    <div class="menu-icon">
                        <i class="fa fa-bars fa-2x"></i>
                    </div>

                    <div class="logo">
                        BARROC IT
                    </div>

                    <div class="menu">

                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">SERVICES</a></li>
                            <li><a href="#">CONTACT</a></li>
                            <div class="flex-center position-ref full-height">
                                @if (Route::has('login'))
                                    <div class="top-right links">
                                        @auth
                                            <a href="{{ url('/home') }}">Home</a>
                                        @else
                                            <a href="{{ route('login') }}">Login</a>
                                            <a href="{{ route('register') }}">Register</a>
                                        @endauth
                                    </div>
                                @endif
                            <i class="far fa-question-circle"></i>
                        </ul>

                    </div>
                </nav>

            </header>

            <!-- ================ sticky nav bar pre ============= -->

            <div class="container">
                <div class="welcometext">
                    <h1>WELCOME</h1>
                </div>
            </div>
            <div class="subtext">
                <p>We're thrilled that you are using the new application, to begin click one of the buttons above!</p>
                <p>If you need help or have any questions then look for the "?" located at the top right on every page.</p>
            </div>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
