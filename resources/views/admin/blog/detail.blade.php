@extends('layouts.main-admin')

@section('title',$blog->title)

@section('content')
<div class="action-bar">
    <a href="{{ route('blog-update-form',['id' => $blog->id])}}">
        <button class="action">
            <img src="https://img.icons8.com/ios/24/000000/approve-and-update.png"/>Update
        </button>
    </a>

    <a href="{{ route('blog-delete',['id' => $blog->id])}}">
        <button class="action">
            <img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/24/000000/external-delete-miscellaneous-kiranshastry-lineal-kiranshastry.png"/>Delete
        </button>
    </a>
</div>

<table class="list">
    <div class="left"> {!! $blog->trixRichText->first()->content !!}</div>
    <img class="blog-cover" src="{{$blog->photo}}" alt="">
</table>


@endsection