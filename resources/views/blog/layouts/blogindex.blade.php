<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wellprune Blog</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="style.css">
       
    </head>
    <body id="blogbody">
        
        <nav class="navbar navbar-fixed-top navbar-dark bg-dark" style="position: relative; font-family: 'Special Elite', cursive; ">
            <div id="navdiv" class="container">
            <ul class="nav nav-tabs nav-justified border-bottom: 0px none;">
                <li><a href="">Home</a></li>
                <li><a href="">Portfolio</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            </div>
        </nav>

        <div id="sidenav" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px;">
            <div id="blogpropic"> 
                <img src="images/meb.png" alt="" style="width: 70%; height: 275px; border-radius: 50%; margin-left: 50px; margin-top: 10px;">
            </div> <br>
            <div>
                <p style="font-size: 14px; padding-left: 2%;"> Hi there. My name is Nyasha Makwavarara. Thanks for visiting my blog. For the most part this a documentation of my coding journey to becoming a full-stack web developer. I could use all the help you can give so feel free to drop a comment or share my content if you find it usefull.
                </p>
            </div> <br>
            <div>
                <ul style="list-style: none; padding-left: 2%">
                    <li style="margin-bottom: 3%;"><a href="{{ route('home') }}">Visit Website</a></li>
                    <li style="margin-bottom: 3%;">About</li>
                    <li style="margin-bottom: 3%;">Contact Me</li>
                </ul>
            </div> <br>
            <div>
                <ul style="list-style: none; display: flex; justify-content: space-around;">
                    <li><a href="">Twit</a></li>
                    <li><a href="">Linkd</a></li>
                    <li><a href="">Gith</a></li>
                </ul>
            </div>

        </div>


    <main>
        <div class="container" id="blogmain">
            @yield('content')
        </div>
    </main>


    </body>
</html>
