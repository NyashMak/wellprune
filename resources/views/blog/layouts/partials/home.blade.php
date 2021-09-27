@extends('blog.layouts.blogindex')

@section('content')

<h1 style="text-align: center;">Wellprune Blog</h1><br>
<hr>

<table id="topicstable">
    <thead>
        <tr>
            <th>Date </th>
            <th>Topic </th>
        </tr>
    </thead>
    <tbody>

        @foreach ( $posts as $post)
        <tr>
            <td>{{ $post->created_at }}</td>
            <td><a href="{{ route('blogpost') }}">{{ $post->topic }}</a></td>
        </tr>    
        @endforeach
        
    </tbody>
</table>

@endsection