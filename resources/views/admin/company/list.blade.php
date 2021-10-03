@extends('layouts.main-admin')

@section('title','Company List')

@section('content')

<a class="link" href="{{ route('company-create-form')}}">New Company</a>


<table class="list">
    <tr>
        <th>logo</th>
        <th>Name</th>
    </tr>

    @foreach($companies as $companies)
    <tr>
        <td><img width="80" src="{{$companies->logo}}" alt=""></td>
        <td><a href="{{route('company-detail',['id' => $companies->id])}}">{{$companies->name}}</a> </td>
    </tr>
    @endforeach
</table>
@endsection