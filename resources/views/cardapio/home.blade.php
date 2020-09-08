<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JLSonline - cardápio</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta name='csrf-token' content="{{ csrf_token() }}">
       
    </head>
    <body>
        <div id="app" class="flex-center position-ref full-height">       
        
            <app-cardapio></app-cardapio>

            <router-view></router-view>
        </div>
        <script src="{{mix('/js/app.js')}}"></script>
    </body>
</html>