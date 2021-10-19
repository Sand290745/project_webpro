@extends('layouts.main-admin')

@section('title',"{$company->name}" )

@section('content')

<div class="action-bar">
    <a href="{{ route('company-update-form',['id' => $company->id])}}">
        <button class="action">
            <img src="https://img.icons8.com/ios/24/000000/approve-and-update.png"/>Update 
        </button>
    </a>

    <a href="{{ route('company-delete',['id' => $company->id])}}">
        <button class="action">
            <img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/24/000000/external-delete-miscellaneous-kiranshastry-lineal-kiranshastry.png"/>Delete 
        </button>
    </a>
</div>
    


<img class="img-box" src="{{$company->logo}}" alt="">

<table class="list">
    <tr>
        <td><strong>Name</strong></td>
        <td>{{$company->name}}</td>
    </tr>
    @if(!empty($company->other_name))
    <tr>
        <td><strong>Other name</strong></td>
        <td>{{$company->other_name}}</td>
    </tr>
    @endif
    <tr>
        <td><strong>Founded</strong></td>
        <td>{{$company->founded}}</td>
    </tr>
    <tr>
        <td><strong>Founder</strong></td>
        <td>{{$company->founder}}</td>
    </tr>
    <tr>
        <td><strong>Location</strong></td>
        <td>{{$company->location}}</td>
    </tr>
    <tr>
        <td><strong>Description</strong></td>
        <td>{{$company->description}}</td>
    </tr>
    <tr>
        <td><strong>Group</strong></td>
        <td>
            @foreach($company->groups as $group)
            <a href="{{route('group-detail',['id' => $group->id])}}">{{$group->name}}</a>
            @endforeach
        </td>
    </tr>
</table>
@endsection