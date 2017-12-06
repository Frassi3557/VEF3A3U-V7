<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
      <!-- Styles -->
        <style>
            
        </style>
      <link href="/css/style.css" rel="stylesheet">
  </head>
  <body>
      @include ('verk7.layouts.nav')
    <ul>
      @yield('info')
    </ul>
  </body>
</html>