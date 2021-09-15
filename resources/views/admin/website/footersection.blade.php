@extends('admin.adminindex')

@section('content')

<div id="sitefooterform">
    <form class="form-group" action="" method="POST" enctype="multipart/form-data">
        <label for="about">Email</label>
        <input type="email" id="email" name="email" class="form-control"><br>

        <label for="phonenumber">Phone Number</label>
        <input type="number" name="cell" id="cell" class="form-control"><br>

        <label for="city">City</label>
        <input type="text" id="city" name="city" class="form-control"><br>

        <label for="country">Country</label>
        <input type="text" id="country" name="country" class="form-control"><br>

        <label for="twitter">Twitter</label>
        <input type="text" id="twitter" name="twitter" class="form-control" placeholder="Enter Link to Twitter"><br>

        <label for="linkedin">LinkedIN</label>
        <input type="text" id="linkedin" name="linkedin" class="form-control" placeholder="Enter Link to LinkedIn"><br>

        <label for="github">Github</label>
        <input type="text" id="github" name="github" class="form-control" placeholder="Enter Link to Github"><br>

        <button type="submit" class="btn">Edit Footer</button>
    </form>
    
</div>

@endsection