<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
      <!-- Styles -->
        <style>
            
        </style>
      <link href="/css/style.css" rel="stylesheet">
  </head>
  <body>
      @include ('verk7.layouts.nav')
    <ul>
      @yield('list')
    </ul>
  </body>
</html>