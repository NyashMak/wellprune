@extends('admin.adminindex')

@section('content')

<div id="posts-container" style="font-size: 14px;">
    <h3>All Posts</h3>
    <hr>

    <div id="allposts">
        <button class="btn" href="">Add Post</button>
    </div><br>

    <div id="poststable">
        <table>
            <tr>
                <th>ID</th>
                <th>Cover Image</th>
                <th>Topic</th>
                <th>Content</th>
                <th>Tags</th>
                <th>Link</th>
                <th>Date Created</th>
                <th>Last Edit</th>
                <th>Comments</th>
                <th>Action</th>
            </tr>

            <tr>
                <td>001</td>
                <td><img src="" alt="Cover Image"></td>
                <td>Ctreating Backend Layout for my blog</td>
                <td>This is where a snippet of the content will appear</td>
                <td>Laravel, PHP, HTML, CSS</td>
                <td>Link to repository if available</td>
                <td>09/09/21</td>
                <td>09/09/21</td>
                <td>12</td>
                <td>
                    <button class="btn" href="">View</button>
                    <button class="btn" href="">Edit</button>
                    <button class="btn" href="">Delete</button>
                </td>
            </tr>
        </table>
    </div>
    
</div>

@endsection