@extends('layouts.main-admin')

@section('title','Blog List')

@section('content')

<a class="link" href="{{ route('blog-create-form')}}">New Blog</a>


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