@extends('admin.adminindex')
@section('content')

<div id="addpostform" class="form-group">
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="coverimage">Cover Image</label>
        <input type="file" id="coverimage" accept="image/*" name="coverimage" class="form-control"><br>

        <label for="topic">Topic</label>
        <input type="text" name="topic" id="topic" class="form-control"><br>

        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control" rows="3"></textarea><br>

        <label for="tags">Tags</label>
        <input type="text" id="tags" name="tags" class="form-control"><br>

        <label for="link">Link</label>
        <input type="text" id="link" name="link" class="form-control"><br>

        <button type="submit" name="addpost" id="addpost">Create New Post</button>
    
    </form>
</div>


@endsection