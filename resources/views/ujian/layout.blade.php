<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">

    {{-- My CSS --}}
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

    <title>@yield('title')</title>
  </head>
  <body>
    {{-- navbar --}}
    <!-- Image and text -->
        <nav class="navbar navbar-expand-lg navbar-light shadow">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('/img/laravel.svg')}}" width="30" height="30"> Create And Read Laravel </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    {{-- ./navbar --}}

    @yield('container')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('/js/jquery-3.4.1.slim.min.js')}}"></script>
    <script src="{{asset('/js/popper.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
  </body>
</html>
