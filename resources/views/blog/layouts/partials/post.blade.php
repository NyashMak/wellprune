@extends('blog.layouts.blogindex')
@section('content')

<div id=postcontainer>

    <div id="coverimage">
        <img src="" alt="" style="width: 100%; height: 300px;">
        <strong>Post Cover Image</strong>
    </div><br>

    <h2 id="posttitle"> Creating the Backend Scaffolding Using Laravel UI </h2><br>
    
    <div id="posthead" style="display: flex;">

        <div id="postdate"> 09 September 2021</div>

        <div id="post_tags" style="display: flex;">
            <button class="btn">PHP</button>
            <button class="btn">Laravel</button>
            <button class="btn">HTML</button>
            <button class="btn">CSS</button>
        </div>

        <div id="shareoptions">
            <ul style="display: flex; list-style: none;">
                <li>FcBk</li>
                <li>Twt</li>
                <li>LinkD</li>
                <li>Redt</li>
            </ul>
        </div>

    </div>
    <hr>

    <div id="postcontent">
        <p><strong>POST CONTENT PLACEHOLDER</strong><br>
            My first Laravel App was a CMS for my blog and my website was .......</p>
    </div> <br>
    <hr>   

</div> <br>
{{-- End of Post Container --}}

<div id="disquscontainer">
    <p>This is just a placeholder for DISQUS</p>
</div>

@endsection