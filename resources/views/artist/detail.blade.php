@extends('layouts.main')

@section('title',"{$artist->name} - {$artist->group->name}" )

@section('content')
<nav>
    <a href="{{ route('artist-show-unit',['id' => $artist->id])}}">Show Unit</a>
    <a href="{{ route('artist-update-form',['id' => $artist->id])}}">Update</a>
</nav>

       <img src="{{$artist->photo}}" alt="">

<table class="list">
    <tr>
        <td><strong>Stage Name</strong></td>
        <td><strong>::</strong></td>
        <td>{{$artist->name}}</td>
    </tr>
    <tr>
        <td><strong>Birth Name</strong></td>
        <td><strong>::</strong></td>
        <td>{{$artist->birthday}}</td>
    </tr>
    <tr>
        <td><strong>Position</strong></td>
        <td><strong>::</strong></td>
        <td>{{$artist->position}}</td>
    </tr>
    <tr>
        <td><strong>Zodiac Sign</strong></td>
        <td><strong>::</strong></td>
        <td>{{$artist->zodiac}}</td>
    </tr>    
    
    <tr>
        <td><strong>Height</strong></td>
        <td><strong>::</strong></td>
        <td>{{$artist->height}}</td>
    </tr>    
    
    <tr>
        <td><strong>Weight</strong></td>
        <td><strong>::</strong></td>
        <td>{{$artist->weight}}</td>
    </tr>    
    
    <tr>
        <td><strong>Blood Type</strong></td>
        <td><strong>::</strong></td>
        <td>{{$artist->blood_type}}</td>
    </tr>       
    <tr>
        <td><strong>Sub-Unit</strong></td>
        <td><strong>::</strong></td>
        <td> 
            {{$artist->units->pluck('name')}}

            <!-- @foreach($artist->units as $unit)
                {{$unit->name}}
            @endforeach -->
        </td>
    </tr>    
    
    <tr>
        <td><strong>Instagram</strong></td>
        <td><strong>::</strong></td>
        <td><a href="https://www.instagram.com/{{$artist->instagram}}">{{$artist->instagram}} </a>   </td>
    </tr>    
    
    <tr>
        <td><strong>Taeyong’s ideal type</strong></td>
        <td><strong>::</strong></td>
        <td>{{$artist->ideal}}</td>
    </tr>
</table>
@endsection