<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
        <title>Laravel</title>

    </head>
    <body>
    <h2 style="text-align: center"> Laravel and React application </h2>
        <div id="root"></div>
        <script src="{{mix('js/app.js')}}" ></script>
    </body>
</html>
