@extends('admin.adminindex')
@section('content')

<div id="siteintroform" class="form-group">
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="intropic">Intro Pic</label>
        <input type="file" id="intropic" accept="image/*" name="intropic" class="form-control"><br>

        <label for="intro">Introduction</label>
        <textarea name="siteintro" id="siteintro" class="form-control" rows="3"></textarea><br>

        <label for="skills">Skillset</label>
        <input type="text" id="skills" name="skills" class="form-control"><br>

        <input class="btn" type="submit" name="submit" id="submit">
    
    </form>
</div>


@endsection