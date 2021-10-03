@extends('layouts.main')

@section('title', $blog->title)

@section('content')

<div class="left"> {!! $blog->trixRichText->first()->content !!}</div>

<img class="blog-cover" src="{{$blog->photo}}" alt="">

@endsection