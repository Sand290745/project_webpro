@extends('layouts.main-admin')

@section('title',"{$company->name}" )

@section('content')

<img class="unit-photo" src="{{$company->logo}}" alt="">

<table class="company-list">
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>::</strong></td>
        <td>{{$company->name}}</td>
    </tr>
    <tr>
        <td><strong>Other name</strong></td>
        <td><strong>::</strong></td>
        <td>{{$company->other_name}}</td>
    </tr>
    <tr>
        <td><strong>Founded</strong></td>
        <td><strong>::</strong></td>
        <td>{{$company->founded}}</td>
    </tr>
    <tr>
        <td><strong>Founder</strong></td>
        <td><strong>::</strong></td>
        <td>{{$company->founder}}</td>
    </tr>
    <tr>
        <td><strong>Location</strong></td>
        <td><strong>::</strong></td>
        <td>{{$company->location}}</td>
    </tr>
    <tr>
        <td><strong>Description</strong></td>
        <td><strong>::</strong></td>
        <td>{{$company->description}}</td>
    </tr>
    <tr>
        <td><strong>Group</strong></td>
        <td><strong>::</strong></td>
        <td>
            @foreach($company->groups as $group)
            <a href="{{route('group-detail',['id' => $group->id])}}">{{$group->name}}</a>
            @endforeach
        </td>
    </tr>
</table>
@endsection