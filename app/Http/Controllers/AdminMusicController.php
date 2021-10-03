<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Music;
use App\Models\Unit;
use Illuminate\Http\Request;

class AdminMusicController extends Controller
{
    function __construct() {
        $this->middleware('auth');
    }
    
    function detail($id)
    {
        $music = Music::with('unit')->where('id', $id)->firstOrFail();

        return view('admin.music.detail', [
            'music' => $music,
        ]);
    }

    function list()
    {
        $music = Music::query();

        return view('admin.music.list', [
            'music' => $music->get(),
        ]);
    }

    function createForm()
    {
        $music = Music::query()->get();
        $groups = Group::query()->get();
        $units = Unit::query()->get();

        return view('admin.music.create', [
            'music' => $music,
            'groups' => $groups,
            'units' => $units,
        ]);
    }

    function create(Request $request)
    {
        $data = $request->except('_token');
        $music = Music::create($data);
            return redirect()->route('music-list');
    }
    
    function updateForm($id)
    {
        $music = Music::query()->where('id', $id)->firstOrFail();
        $groups = Group::query()->get();
        $units = Unit::query()->get();

        return view('admin.music.update-form', [
            'music' => $music,
            'groups' => $groups,
            'units' => $units,
        ]);
    }

    function update(Request $request, $id)
    {
        $music = Music::query()->where('id', $id)->firstOrFail();
        $data = $request->except('_token');
        $music->update($data);
            return redirect()->route('music-list');
    }

    function delete($id)
    {
            $music = Music::query()->where('id', $id)->firstOrFail();
            $music->delete();

            return redirect()->route('music-list', ['id' => $music->id]);
    }
}
