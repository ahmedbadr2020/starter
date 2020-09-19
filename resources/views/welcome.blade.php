<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

     
    </head>
    <body>
        <p>{{__('messages.welcome')}}</p>
        @if (1 === 3)
            <p> Yes IS Eqaul</p>
        @else    
          <p>not Eqaul</p>
        @endif

    </body>
</html>
