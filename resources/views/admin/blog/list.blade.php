@extends('layouts.main-admin')

@section('title','Blog List')

@section('content')

<div class="action-bar">
    <a class="link" href="{{ route('blog-create-form')}}">
        <button class="action">
            <img src="https://img.icons8.com/material-outlined/24/000000/add.png" />New Blog
        </button>
    </a>
</div>



<table class="list">
    <tr>
        <th>Title</th>
    </tr>

    @foreach($blogs as $blog)
    <tr>
        <td class="left"><a href="{{route('blog-detail',['id' => $blog->id])}}">{{$blog->title}}</a></td>
    </tr>
    @endforeach
</table>

@endsection