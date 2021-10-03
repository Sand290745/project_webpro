<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Group;
use App\Models\Unit;
use Illuminate\Http\Request;

class AdminUnitController extends Controller
{
    function __construct() {
        $this->middleware('auth');
    }
    
    function list()
    {
        $unit = Unit::query();

        return view('admin.unit.list', [
            'unit' => $unit->get(),
        ]);
    }

    function detail($id)
    {
        $unit = Unit::with('artists')->where('id', $id)->firstOrFail();
        $artists = $unit->artists;

        return view('admin.unit.detail', [
            'unit' => $unit,
            'artists' => $artists,
        ]);
    }

    function createForm()
    {
        $unit = Unit::query()->get();
        $groups = Group::query()->get();

        return view('admin.unit.create', [
            'unit' => $unit,
            'groups' => $groups,
        ]);
    }

    function create(Request $request)
    {
        $data = $request->except('_token');
        $unit = Unit::create($data);
            return redirect()->route('unit-list');
    }

    function updateForm($id)
    {
        $unit = Unit::query()->where('id', $id)->firstOrFail();
        $groups = Group::query()->get();
        
        return view('admin.unit.update-form', [
            'unit' => $unit,
            'groups' => $groups,
        ]);
    }

    function update(Request $request, $id)
    {
        $unit = Unit::query()->where('id', $id)->firstOrFail();
        $data = $request->except('_token');
        $unit->update($data);
            return redirect()->route('unit-list');
    }

    function delete($id)
    {
        $unit = Unit::query()->where('id', $id)->firstOrFail();
        $unit->delete();
             return redirect()->route('unit-list', ['id' => $unit->id]);
    }

    function artistRemove($artistId, $unitId)
    {
            $artist = Artist::where('id', $artistId)->firstOrFail();
            $unit = Unit::where('id', $unitId)->firstOrFail();

            $artist->units()->detach($unit->id);

            return redirect()->back();
    }
}
