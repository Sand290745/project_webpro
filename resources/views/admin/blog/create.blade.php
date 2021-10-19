@extends('layouts.main-admin')

@section('title', 'Blog : Create')

@section('content')
<form class="form" action="{{ route('blog-create') }}" method="post">
    @csrf

    <table class="group">
        <tr>
            <td><strong>Title</strong></td>
            <td><input type="text" name="title" id="" value="{{ old('title')}}" required></td>
        </tr>
        <tr>
            <td><strong>Photo</strong></td>
            <td><input type="text" name="photo" id="" value="{{ old('photo')}}" required></td>
        </tr>
        <tr>
            <td><strong>Content</strong></td>
            <td>@trix(\App\Blog::class, 'content')</td>
        </tr>
        <tr>
            <td><strong>Group</strong></td>
            <td>
                <select name="group_id" required>
                    <option value="">Please select group</option>
                    @foreach($groups as $group)
                    <option value="{{ $group->id }}" {{ ($group->id === old('group'))? 'selected' : '' }}>
                        {{ $group->name }}
                    </option>
                    @endforeach
                </select>
            </td>
        </tr>
    </table>
    
    <div>
        <button class="submit" type="submit">Create</button>
    </div>

</form>
@endsection