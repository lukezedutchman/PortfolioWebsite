@extends('layouts.app')

@section('content')
        <!doctype html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <title>Document</title>
</head>
<body>
<div class="welcometexthome">
    <h1>Select your department</h1>
</div>
<!-- mid center section admin page */ -->
<div class="container">
    <div class="selectdepartement">
        <ul>
            <li>
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2><i class="fas fa-dollar-sign"></i></h2>
                        </div>
                        <div class="flip-box-back">
                            <a href="{{ url('/finance') }}"><h2>FINANCE</h2></a>

                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2><i class="fas fa-laptop-code"></i></h2>
                        </div>
                        <div class="flip-box-back">
                            <a href="{{ url('/development') }}"><h2>DEVELOPMENT</h2></a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2><i class="fas fa-chart-line"></i></h2>
                        </div>
                        <div class="flip-box-back">
                            <a href="{{ url('/sales') }}"><h2>SALES</h2></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>





    <!-- end mid center section admin page -->
</body>
</html>
@endsection
