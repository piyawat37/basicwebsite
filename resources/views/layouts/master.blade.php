<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <title>Master Page</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

    <!-- @include('layouts.login') -->
      @include('inc.navbar')

      <div class="container">
        @if(Request::is('/'))
          @include('inc.showcase')
        @endif
        <div class="row">
          <div class="col-md-8 col-lg-8">
            @include('inc.messages')
            @yield('content')
          </div>
          <div class="col-md-4 col-lg-4">
            @include('inc.sidebar')
          </div>
        </div>
      </div>

      <footer id="footer" class="text-center">
        <p>Copyright 2018 &copy; Piyawat Pemwattana</p>
      </footer>
  </body>
</html>
