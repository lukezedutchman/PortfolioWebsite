<!doctype html>
<html lang="">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('../css/home.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('../css/require/create_project.css')}}"/>
    </head>
    <body>
        @include('../require_files/sales_navbar')
        <div class="container">
            @include('../require_files/create_project')
        </div>
    </body>
</html>