@extends('admin.adminindex')

@section('content')

<div id="siteaboutportfolioform">
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="about">About</label>
        <textarea id="about" name="about" class="form-control"  rows="5" ></textarea><br>
        <button type="submit" class="btn">Edit About</button>
    </form>
    
</div>

@endsection