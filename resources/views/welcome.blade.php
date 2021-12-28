<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wellprune</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        
        {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet"> --}}

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

        <script src="https://use.fontawesome.com/08af36425e.js"></script>
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       
    </head>
    <body>
        
        <nav class="navbar navbar-fixed-top navbar-dark bg-dark" style="position: relative; ">
            <div id="navDiv">
                
                <div id="homelink" style="color: white;">Nyasha</div>

                {{-- <div>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div> --}}
            
                <div>
                    <ul id="navUl">
                        <li id="navLi"><a href="">Home</a></li>
                        <li id="navLi"><a href="">Projects</a></li>
                        <li id="navLi"><a href="">Resume</a></li>
                        <li id="navLi"><a href="">Contact</a></li>
                    </ul>
                </div>

            </div>
        </nav>

        <div id="adminlink">
            <a href="{{ route('adminhome') }}">Log In</a>
        </div>

          {{-- <div id=name_container>
            <h1 id="name" style="text-align: center;"> Nyasha Makwavarara </h1>
            <p id="heading"> The journey of a self taught web developer </p>
          </div>  --}}

    <main>
        <div>
            @yield('content')
        </div>
        
    </main>

    <footer>
        <div id="contactdetails">
            <h5>Get in touch</h5>
            <span>Email Address: nyashagmakwavarara@gmail.com</span><br>
            <span>Phone Number: +27782611328</span><br>
            <span>City: Cape Town</span><br>
            <span>Country: South Africa</span>
        </div>
        <div id="socials">
            <h5>Socials</h5>
            <span>Twitter: <a href="https://twitter.com/NiazLuther" target="_blank">https://twitter.com/NiazLuther</a></span><br>
            <span>LinkedIN: <a href="https://www.linkedin.com/in/nyasha-makwavarara-08a80a13a/" target="_blank">https://www.linkedin.com/in/nyasha-makwavarara-08a80a13a/</a></span><br>
            <span>GitHub: <a href="https://github.com/NyashMak" target="_blank">https://github.com/NyashMak</a><br>
        </div>
    </footer>
    </body>
</html>
