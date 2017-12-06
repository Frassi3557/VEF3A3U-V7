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
		<script type="text/javascript" src="/js/find.js"></script>
  </head>
  <body>
      @include ('verk7.layouts.nav')
    <ul id="myUL">
      @yield('list')
    </ul>
  </body>
</html>