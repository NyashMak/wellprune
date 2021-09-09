@extends('welcome')
@section('content')


<div id="introrow">
        <div id="profile_container"> 
            <div id="propic"> 
                <img id="propicme" src="images/wdp.png" alt="" >
            </div>
            <hr id="hrintro">
            <div id="skills">
                <h4 style="text-align: center;">SKILLSET</h4>
                <p style="text-align: center;">PHP, Laravel, MySQL, Bootstrap, Javascript</p>

            </div>
        </div>

        <div id="intro">
        <p>I am self taught web developer, lorem ipsum</p>
        </div>
    
</div>

{{-- Decoration --}}
<div id="backbox1"> </div>
<div id=backbox2> </div>
{{-- End of landing page decoration boxes --}}

    <div id="portfoliosec">
        <h2 style="color: rgb(255, 145, 0); font-family: 'Special Elite', cursive;"> <strong>PORTFOLIO</strong></h2> <br>
        <hr style="border: 1px solid rgb(255, 145, 0); width: 60%; "><br>
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
    <div id="backbox3"></div>

    <div id="blogsec">
        <h2 style="color: rgb(255, 145, 0); font-family: 'Special Elite', cursive;"><strong>FEATURES FROM MY BLOG</strong></h2> <br>
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
        <button class="btn"><a href="">Visit Blog</a></button>
    </div>
    <div id="backbox4"></div>

    <div id="aboutsec">
        <h2>ABOUT</h2>
        <div>
            <p>This is where a brief insight into the person I am will come <br> i.e Education, Interests, Hobbies etc</p><br>
            <button><a href="">Read Full Story</a></button>
        </div>
    </div>


@endsection