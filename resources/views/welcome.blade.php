<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wellprune</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="style.css">
       
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
        <nav class="navbar navbar-fixed-top navbar-dark bg-dark" style="position: relative;">
            <div id="navdiv" class="container">
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

    <footer>
        <div id="contactdetails">
            <h5>Get in touch</h5>
            <span>Email Address: nyashagmakwavarara@gmail.com</span><br>
            <span>Phone Number: +27782611328</span><br>
        </div>
        <div id="socials">
            <h5>Socials</h5>
            <span>Twitter: _______</span><br>
            <span>LinkedIN: ________</span><br>
            <span>GitHub: _______</span><br>
        </div>
    </footer>
    </body>
</html>
