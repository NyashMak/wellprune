
@extends('admin.adminindex')
@section('content')



<div id="editpostform" class="form-group">
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="coverimage">Cover Image</label>
        <input type="file" id="coverimage" accept="image/*" name="coverimage" class="form-control" value="{{ $postDB->coverimage }}"><br>

        <label for="topic">Topic</label>
        <input type="text" name="topic" id="topic" class="form-control" value="{{ $postDB->topic }}"><br>

        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control" rows="5" value="{{ $postDB->content }}"></textarea><br>

        <label for="tags">Tags</label>
        <input type="text" id="tags" name="tags" class="form-control" value="{{ $postDB->tags }}"><br>

        <label for="link">Link</label>
        <input type="text" id="link" name="link" class="form-control" value="{{ $postDB->link }}"><br>

        <button type="submit" name="updatepost" id="updatepost">Update Post</button>
    
    </form>
</div>


@endsection