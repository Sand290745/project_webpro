@extends('layouts.main-admin')

@section('title', $artist->name)

@section('content')

<a href="{{ route('artist-show-unit',['id' => $artist->id])}}"><strong> &lt; Back</strong></a>

<form action="{{ route('artist-add-unit', ['id' => $artist->id])}}" method="post">
    @csrf
<table class="list">
<tr>
<td><strong>Unit</strong></td>
            <td><strong>::</strong></td>
            <td>
                <select name="unit_id" required>
                    <option value="">-- Please select unit--</option>
                    @foreach($units as $unit)
                    <option value="{{ $unit->id }}" {{ ($unit->id === old('unit'))? 'selected' : '' }}>
                        {{ $unit->name }}
                    </option>
                    @endforeach
                </select>
            </td>
            <td><button type="submit" value="{{$unit->id}}">Add</button></td>
</tr>
</table>
</form>
@endsection