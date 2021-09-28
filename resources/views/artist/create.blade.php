@extends('layouts.main')

@section('title', $artist->name : Create)

@section('content')
<form class="form" action="{{ route('artist-create') }}" method="post">
    @csrf
    <table>
    <tr>
        <td><strong>Stage Name</strong></td>
        <td><strong>::</strong></td>
        <td><input type="text" name="name" id="" value="{{ old('name')}}" required></td>
    </tr>
    <tr>
        <td><strong>Birth Name</strong></td>
        <td><strong>::</strong></td>
        <td><input type="number" name="birthday" value="{{ old('birthday')}}" required></td>
    </tr>
    <tr>
        <td><strong>Position</strong></td>
        <td><strong>::</strong></td>
        <td><input type="text" name="position" id="" value="{{ old('position')}}" required></td>
    </tr>
    <tr>
        <td><strong>Zodiac Sign</strong></td>
        <td><strong>::</strong></td>
        <td><input type="text" name="zodiac" id="" value="{{ old('zodiac')}}" required></td>
    </tr>    
    
    <tr>
        <td><strong>Height</strong></td>
        <td><strong>::</strong></td>
        <td><input type="number" name="height" value="{{ old('height')}}" required></td>
    </tr>    
    
    <tr>
        <td><strong>Weight</strong></td>
        <td><strong>::</strong></td>
        <td><input type="number" name="weight" value="{{ old('weight')}}" required></td>
    </tr>    
    
    <tr>
        <td><strong>Blood Type</strong></td>
        <td><strong>::</strong></td>
        <td><input type="text" name="blood_type" id="" value="{{ old('blood_type')}}" required></td>
    </tr>       
    <tr>
        <td><strong>Sub-Unit</strong></td>
        <td><strong>::</strong></td>
        <td> @foreach($artist->units as $unit)
            {$unit->name}}
            
            @endforeach
        </td>
    </tr>    
    
    <tr>
        <td><strong>Instagram</strong></td>
        <td><strong>::</strong></td>
        <td><a href="https://www.instagram.com/{{$artist->instagram}}">{{$artist->instagram}} </a>   </td>
    </tr>    
    
    <tr>
        <td><strong>{{$artist->name}} ideal type</strong></td>
        <td><strong>::</strong></td>
        <td><textarea name="ideal" required>{{ old('ideal')}}</textarea></td>
    </tr>
</table>

<div class="actions">
    <button type="submit">Create</button>
</div>

</form>
@endsection