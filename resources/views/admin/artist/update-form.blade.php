@extends('layouts.main-admin')

@section('title', 'Artist : Update')

@section('content')
<form class="form" action="{{ route('artist-update-form', ['id' => $artist->id])}}" method="post">
    @csrf
    <table>
        <tr>
            <td><strong>Stage Name</strong></td>
            <td><strong>::</strong></td>
            <td><input type="text" name="name" id="" value="{{ old('name', $artist->name)}}" required></td>
        </tr>
        <tr>
            <td><strong>Nationality</strong></td>
            <td><strong>::</strong></td>
            <td><input type="text" name="nationality" id="" value="{{ old('nationality', $artist->nationality)}}" required></td>
        </tr>
        <tr>
            <td><strong>Birth Name</strong></td>
            <td><strong>::</strong></td>
            <td><input type="date" name="birthday" value="{{ old('birthday', $artist->birthday)}}" required></td>
        </tr>
        <tr>
            <td><strong>Position</strong></td>
            <td><strong>::</strong></td>
            <td>
                <select name="position">
                    @foreach($positions as $position)
                    <option value="{{ $position }}" {{ ($position === old('position'))? 'selected' : '' }}>
                        {{ $position }}
                    </option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td><strong>Zodiac Sign</strong></td>
            <td><strong>::</strong></td>
            <td>
            <select name="zodiac">
                    @foreach($zodiacs as $zodiac)
                    <option value="{{ $zodiac }}" {{ ($zodiac === old('zodiac', $artist->zodiac))? 'selected' : '' }}>
                        {{ $zodiac }}
                    </option>
                    @endforeach
                </select>
            </td>
        </tr>

        <tr>
            <td><strong>Height</strong></td>
            <td><strong>::</strong></td>
            <td><input type="number" name="height" value="{{ old('height', $artist->height)}}" required></td>
        </tr>

        <tr>
            <td><strong>Weight</strong></td>
            <td><strong>::</strong></td>
            <td><input type="number" name="weight" value="{{ old('weight', $artist->weight)}}" required></td>
        </tr>

        <tr>
            <td><strong>Blood Type</strong></td>
            <td><strong>::</strong></td>
            <td>
                <select name="blood_type">
                    @foreach($blood_types as $blood_type)
                    <option value="{{ $blood_type }}" {{ ($blood_type === old('blood_type', $artist->blood_type))? 'selected' : '' }}>
                        {{ $blood_type }}
                    </option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td><strong>Group</strong></td>
            <td><strong>::</strong></td>
            <td>
                <select name="group_id" required>
                    <option value="">-- Please select group --</option>
                    @foreach($groups as $group)
                    <option value="{{ $group->id }}" {{ ($group->id == old('group_id', $artist->group_id))? 'selected' : '' }}>
                        {{ $group->name }}
                    </option>
                    @endforeach
                </select>
            </td>
        </tr>

        <tr>
            <td><strong>Instagram</strong></td>
            <td><strong>::</strong></td>
            <td><input type="text" name="instagram" id="" value="{{ old('instagram', $artist->instagram)}}" required></td>
        </tr>

        <tr>
            <td><strong>Ideal type</strong></td>
            <td><strong>::</strong></td>
            <td><textarea name="ideal" required>{{ old('ideal', $artist->ideal)}}</textarea></td>
        </tr>

        <tr>
            <td><strong>Photo</strong></td>
            <td><strong>::</strong></td>
            <td><input type="text" name="photo" id="" value="{{ old('photo', $artist->photo)}}" required></td>
        </tr>
    </table>

    <div class="actions">
        <button type="submit">Update</button>
    </div>

</form>
@endsection