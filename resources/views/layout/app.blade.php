<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    @include('layout.css')
    
  </head>
  {{-- @if (request()->is('varian/detail'))
    <body style="background: #ddd">
  @else
    <body>
  @endif --}}
  <body style="background: #eee">
    @include('layout.nav')

    
    @yield('content')
    

    @include('layout.js')
    
  </body>
</html>