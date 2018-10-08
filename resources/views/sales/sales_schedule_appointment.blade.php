<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="{{asset('../css/require/navbar.css')}}"/>
</head>
    <body>
        @include('../require_files/navbar')
        <form action="">
            <div class="input-client-details-row1">
                client name <input type="text" name="Client Name"><br>
                date <input type="text" name="Date"><br>
                Phonenumber <input type="number" name="Phone Number"><br>
            </div>
            <div class="input-client-details-row2">
                Location <input type="text" name="Location"><br>
                Time <input type="time" name="Time"><br>
                Description <input type="number" name="Description"><br>
            </div>

            <input type="submit" value="Submit">
        </form>
    </body>
</html>