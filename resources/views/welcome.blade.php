<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}"/>

        <title>barroc-it</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


        <!-- Styles -->
        <div class="wrapper">
            <header>

                <nav>

                    <div class="menu-icon">
                        <i class="fa fa-bars fa-2x"></i>
                    </div>

                    <div class="logo">
                        <a>BARROC IT</a>
                    </div>

                    <div class="menu">

                        <ul>

                            <i class="fas fa-question"></i>
                                <li>@if (Route::has('login'))

                                        @auth
                                            <a href="{{ url('/home') }}">Home</a>
                                        @else
                                            <a href="{{ route('login') }}">LOGIN</a>
                            <li><a href="#"></a>
                                            <a href="{{ route('register') }}">REGISTER</a>
                                        @endauth </li>
                            <i class="fas fa-sign-out-alt"></i>
                                    </div>
                                @endif
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
                <p>If you need help or have any questions then look for the "?" located at the nav bar on every page.</p>
            </div>
    </head>
</html>
