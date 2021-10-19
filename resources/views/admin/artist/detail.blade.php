@extends('layouts.main-admin')

@section('title',"{$artist->name} - {$artist->group->name}" )

@section('content')

<div class="action-bar">
    <a href="{{ route('artist-show-unit',['id' => $artist->id])}}">
        <button class="action"> 
            <img src="https://img.icons8.com/ios/24/000000/show-property.png"/>Show Unit 
        </button>
    </a>

    <a href="{{ route('artist-update-form',['id' => $artist->id])}}">
        <button class="action">
        <img src="https://img.icons8.com/ios/24/000000/approve-and-update.png"/>Update
        </button>
    
    </a>

    <a href="{{ route('artist-delete',['id' => $artist->id])}}">
        <button class="action">
        <img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/24/000000/external-delete-miscellaneous-kiranshastry-lineal-kiranshastry.png"/>Delete
        </button>
    </a>
</div>
   

   
   <img class="img-box" src="{{$artist->photo}}" alt="">

   <table class="list">
   <tr>
        <td><strong>Stage Name</strong></td>
        <td>{{$artist->name}}</td>
    </tr>
    <tr>
        <td><strong>Nationality</strong></td>
        <td>{{$artist->nationality}}</td>
    </tr>
    <tr>
        <td><strong>Birthday</strong></td>
        <td>{{$artist->birthday}}</td>
    </tr>
    <tr>
        <td><strong>Position</strong></td>
        <td>{{$artist->position}}</td>
    </tr>
    <tr>
        <td><strong>Zodiac Sign</strong></td>
        <td>{{$artist->zodiac}}</td>
    </tr>    
    
    <tr>
        <td><strong>Height</strong></td>
        <td>{{$artist->height}}</td>
    </tr>    
    
    <tr>
        <td><strong>Weight</strong></td>
        <td>{{$artist->weight}}</td>
    </tr>    
    
    <tr>
        <td><strong>Blood Type</strong></td>
        <td>{{$artist->blood_type}}</td>
    </tr>       

    @if($artist->units->isNotEmpty())
    <tr>
        <td><strong>Sub-Unit</strong></td>
        <td> 
            {{$artist->units->pluck('name')->join(", ")}}
        </td>
    </tr>    
    @endif
    
    <tr>
        <td><strong>Instagram</strong></td>
        <td> 
            <div class="ig-box">
                <img src="https://img.icons8.com/material-outlined/24/000000/instagram-new--v1.png" /><a href="https://www.instagram.com/{{$artist->instagram}}">{{$artist->instagram}} </a></td>
            </div>
    </tr>    
    @if(!empty($artist->ideal))
    <tr>
        <td><strong>Ideal type</strong></td>
        <td>{{$artist->ideal}}</td>
    </tr>
    @endif
</table>
@endsection