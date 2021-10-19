@extends('layouts.main')

@section('content')

<div class="profile-container">
    <div class="profile-header">
        <div>
            <img class="profile-img" src="{{$artist->photo}}" alt="">
        </div>

        <div class="profile-title">

            <span>{{$artist->position}}</span> <br>
            <p class="profile-name">{{$artist->name}}</p>

            <div class="ig-box">
                <img src="https://img.icons8.com/material-outlined/24/000000/instagram-new--v1.png" /> <a href="https://www.instagram.com/{{$artist->instagram}}"><span>{{$artist->instagram}}</span> </a>
            </div>

        </div>
    </div>

    <div class="profile-detail">
        <table>
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

        
            @if(!empty($artist->ideal))
            <tr>
                <td><strong>Ideal type</strong></td>

                <td>{{$artist->ideal}}</td>
            </tr>
            @endif
        </table>
    </div>
</div>

@endsection