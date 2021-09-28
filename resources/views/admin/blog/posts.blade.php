@extends('admin.adminindex')

@section('content')

<div id="posts-container" style="font-size: 14px;">
    <h3>All Posts</h3>
    <hr>

    <div id="allposts">
        <a href="{{ route('addpost') }}"><button class="btn">Add Post</button></a>
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


            @foreach ( $posts as $post)
            <tr>
                <td>{{ $post->post_id }}</td>
                <td><img src="" alt="Cover Image">{{ $post->coverimage }}</td>
                <td>{{ $post->topic }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->tags }}</td>
                <td>{{ $post->link }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td>{{ $post->comments }}</td>
                <td>
                    <button class="btn" href="">View</button>
                    <a href="{{ route('editpost', $post->post_id) }}"><button class="btn">Edit</button></a>

                    {{-- <a href="{{ route('pages.update.view', $call->id) }}">update</a> --}}
                    {{-- ('profile', ['id' => 1]); --}}

                    <button class="btn" href="">Delete</button>
                </td>
            </tr>

            @endforeach
            

        </table>
    </div>
    
</div>

@endsection