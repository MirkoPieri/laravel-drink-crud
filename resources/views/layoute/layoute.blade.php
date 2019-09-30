<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Drink</title>
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
      <header>
        <h1>Get Drink from {{$title}}</h1>
      </header>

      <div class="container">
        @yield('content')
      </div>

      <footer>
        <h4>Powered by Bool</h4>
        <p>From {{$title}}</p>
      </footer>
    </body>
</html>
