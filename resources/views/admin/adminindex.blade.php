<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        

    </head>
    <body>

        <nav class="navbar navbar-fixed-top navbar-dark bg-dark" style="position: relative; font-family: 'Special Elite', cursive; ">
            <div id="navdiv" class="container" style="display: flex;">

                <ul class="nav nav-tabs nav-justified border-bottom: 0px none;">
                    <li><a href="{{ route('adminhome') }}">Home</a></li>
                    <li><a href="{{ route('home') }}">Website</a></li>
                    <li><a href="{{ route('bloghome') }}">Blog</a></li>
                </ul>

                <div>
                    <button><a href="">Log Out</a></button>
                </div>

            </div>
          </nav>

        <div id=adminsidenav>
            
            <div>  
              <h3>Website</h3><br>
              
              <div>
                    <ul id="websitenavlist">
                        <li class="asidenavlist"><a href="{{ route('editsiteintro') }}">Intro Section</a></li>
                        <li class="asidenavlist"><a href="{{ route('editsiteabout') }}">About Section</a></li>
                        <li class="asidenavlist"><a href="{{ route('editfooter') }}">Footer Section</a></li>
                    </ul>
              </div><br>
            </div>
            
            <hr><br>
            <div>
                <h3>Blog</h3><br>

                <div>
                    <ul id="blognavlist">
                        <li class="asidenavlist"><a href="{{ route('listadminposts') }}">Posts</a></li>
                        <li class="asidenavlist"><a href="">Blog Intro Section</a></li>
                        <li class="asidenavlist"><a href="">About Blog Section</a></li>
                        <li class="asidenavlist"><a href="">Contact Me Section</a></li>
                        <li class="asidenavlist"><a href="">Users</a></li>
                    </ul>
                </div>
            </div>
        
        </div>
    <main>
        <div class="container"> 
            
            <div id="adminmain">
                
                @yield('content')
            
            </div>   
        
        </div>
    </main>

    </body>
</html>
