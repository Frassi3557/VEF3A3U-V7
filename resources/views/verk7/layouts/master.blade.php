<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href="http://www.tskoli.is/skin/basic9k/i/fav-large.png">
    <title>@yield('title')</title>
      <!-- Styles -->
        <style>
            
        </style>
      <link href="/css/style.css" rel="stylesheet">
  </head>
  <body>
      @include ('verk7.layouts.nav')
    
      @yield('list')
  </body>
</html>