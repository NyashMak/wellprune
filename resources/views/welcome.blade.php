<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wellprune</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
       
    </head>
    <body>
        {{-- <nav id="navbar">
            <div id="nav-container">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Portfolio</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
        </nav> --}}
        <nav class="navbar navbar-default navbar-fixed-top" style="position: relative;">
            <div class="container">
            <ul class="nav nav-tabs nav-justified">
                <li><a href="">Home</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Portfolio</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            </div>
          </nav>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    </body>
</html>
