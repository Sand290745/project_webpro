@extends('layouts.main')

@section('title','Channels')

@section('content')

<div class="logo-grid">
    @foreach(App\Models\Group::all() as $group)
    <div>
        <a class="channel-name" href="{{route('user-group-detail',['id' => $group->id])}}">
            <img class="channel-logo" src="{{$group->logo}}" alt="">
            <p>{{$group->name}}</p>
        </a>
    </div>
    @endforeach
</div>

<form id="form" class="form" action="" method="get">
    <table>
        <tr>
            <td> <label for="term">Search</label> </td>
            <td> <strong class="color">::</strong></td>
            <td> <input type="text" name="term" id="term"> </td>
        </tr>
    </table>

    <div>
        <button form="form" class="blue" type="submit">Search</button>
    </div>

</form>

@endsection