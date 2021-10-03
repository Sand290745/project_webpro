@extends('layouts.main-admin')

@section('title',$blog->title)

@section('content')
<nav>
    <a href="{{ route('blog-update-form',['id' => $blog->id])}}">Update</a>
    <a href="{{ route('blog-delete',['id' => $blog->id])}}">Delete</a>
</nav>

<div class="left"> {!! $blog->trixRichText->first()->content !!}</div>

<img class="blog-cover" src="{{$blog->photo}}" alt="">

@endsection