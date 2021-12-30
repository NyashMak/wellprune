@extends('welcome')
@section('content')


<div id="introrow">

    <div id="intro">
        <p>Hi, my name is <span id="introName">Nyasha Makwavarara</span><p> <br>
        <p>I am a full-stack web developer based in Cape Town, South Africa with a strong BackEnd Development background. I enjoy taking complex problems and turning them into user friendly web applications and websites to help businesses do better internally and online. I always strive to write elegant, efficient and easy to maintain code </p> <br>
        <h4 style="text-align: center; font-weight:bold;">SKILLSET</h4> 
        <p style="text-align: center;">PHP, Laravel, MySQL, FileMaker Pro 19, Javascript, React, Vue JS, CSS, Bootstrap, HTML</p><br>
        
        <button id="projectsBTN" >My Projects</button>

        </div>
        
        <div id="profile_container"> 
            <div id="propic"> 
                <img id="propicme" src="images/meb.png" alt="" >
            </div>
        </div>

    
</div>

{{-- 
    <div id="portfoliosec">
        <h2 style="color: rgb(255, 145, 0);"> <strong>PORTFOLIO</strong></h2> <br>
        <hr style="border: 1px solid rgb(32, 32, 32); width: 60%; "><br>
        <p>Some of the work I have done on my journey!</p> <br>
        <div class="ftblock">
            <div class="portft">
                
                <div class="nametag">Izi_Stock</div>
            </div>
            <div class="portft">

                <div class="nametag">Vis_Advies</div>
            </div>
            <div class="portft">

                <div class="nametag">Kulture_Int</div>
            </div>
        </div> <br>

        <p>This is where a snippet of the portfolio will appear</p><br>
            <button class="btn"><a href="">View Portfolio</a></button>
    </div>
    <div id="backbox3"></div> --}}

    <div id="blogsec">
        <h2><strong>FEATURES FROM MY BLOG</strong></h2> <br>
        <div id="blogcont">
            <div id="bloghead">
                
                    <ul id=blogstats>
                        <li>Posted: <strong>10 August 2021</strong></li>
                        <li>By: <strong>Nyasha Makwavarara</strong></li>
                        <li>Comments: <strong>20</strong></li>
                        <li>Views: <strong>60</strong></li>
                    </ul>

            </div>
            <h3>Creating the Backend for my Website/ Blog</h3><br>
            <p>Unfortunately you guys didn't get to see how I built the front end of both my website and my blog using HTML, Bootsrap4 and Vanilla Javascript.
                But not to worry, I will be creating the backend scaffolding as well using HTML, Bootsrap, Vanilla Javascript & JQuery. For the server side scripting we will use PHP (Laravel) ofcourse ;) and MySQL for our database. Let's do this!! <br> <br>
                Disclaimer: I am more of backend developer so please forgive me if my CSS is a bit unpolished LOL. 
            </p>
        </div><br>
        <p>This where a slide of the latest and most popular blog posts will appear</p>
        <button class="btn"><a href="{{ route('bloghome') }}">Visit Blog</a></button>
    </div>


@endsection