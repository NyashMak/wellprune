@extends('welcome')
@section('content')

<div id=name_container>
  <h1 id="name" style="text-align: center;"> Nyasha Makwavarara </h1>
  <p id="heading"> The journey of a self taught web developer </p>
</div>

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

<div id="backbox1"> </div>

<div id=backbox2> </div>

    <div id="portfoliosec">
        <h2 style="color: rgb(255, 145, 0);">PORTFOLIO</h2>
        <div class="ftblock">
            <div class="portft">
                
                <div class="nametag">Izi_Stock</div>
            </div>
            <div class="portft">

                <div class="nametag">Vis_Advies</div>
            </div>
            <div class="portft">

                <div class="nametag">Kulture_Interludes</div>
            </div>
        </div>
        <p>This is where a snippet of the portfolio will appear</p><br>
            <button><a href="">View Portfolio</a></button>
    </div>

    <div id="blogsec">
        <h3>BLOG</h3>
        <div>
            <p>This where a slide of the latest and most popular blog posts will appear</p><br>
            <button><a href="">Visit Blog</a></button>
        </div>
    </div>

    <div id="aboutsec">
        <h3>ABOUT</h3>
        <div>
            <p>This is where a brief insight into the person I am will come <br> i.e Education, Interests, Hobbies etc</p><br>
            <button><a href="">Read Full Story</a></button>
        </div>
    </div>


@endsection