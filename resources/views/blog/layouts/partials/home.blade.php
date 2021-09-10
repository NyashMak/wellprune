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
        <tr>
            <td>09 September 2021</td>
            <td><a href="{{ route('blogpost') }}">Creating the Backend Scaffolding Using Laravel UI</a></td>
        </tr>
    </tbody>
</table>

@endsection