<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Group;
use App\Models\Unit;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    const POSITIONS = [
        'leader',
        'vocal',
        'dance'
    ];

    const ZODIACS = [
        'Aries',
        'Taurus',
        'Gemini',
        'Cancer',
        'Leo',
        'Virgo',
        'Libra',
        'Scorpio',
        'Sagittarius',
        'Capricorn',
        'Aquarius',
        'Pisces'
    ];

    const BLOOD_TYPES = [
        'A',
        'B',
        'O',
        'AB'
    ];



    function detail($id)
    {
        $artist = Artist::with('units')->where('id', $id)->firstOrFail();

        return view('artist.detail', [
            'artist' => $artist
        ]);
    }

    function createForm()
    {
        $groups = Group::query()->get();

        return view('artist.create', [
            'groups' => $groups,
            'positions' => self::POSITIONS,
            'zodiacs' => self::ZODIACS,
            'blood_types' => self::BLOOD_TYPES,
        ]);
    }

    function create(Request $request)
    {
        $data = $request->except('_token');

        Artist::create($data);
    }

    function showUnit($id)
    {
        $artist = Artist::with('units')->where('id', $id)->firstOrFail();

        return view('artist.show-unit', [
            'artist' => $artist,
            'units' => $artist->units
        ]);
    }

    function addUnitForm($id)
    {
        $artist = Artist::with('units')->where('id', $id)->firstOrFail();

        return view('artist.add-unit-form', [
            'artist' => $artist,
            'units' => $artist->group->units /* Edit */
        ]);
    }

    function addUnit(Request $request, $id)
    {
        $artist = Artist::with('units')->where('id', $id)->firstOrFail();
        $unit = Unit::where('id', $request->unit_id)->firstOrFail();

        $artist->units()->attach($unit->id);

        return redirect()->route('artist-show-unit', ['id' => $artist->id]);
    }

    function artistRemove($artistId, $unitId)
    {
        $artist = Artist::where('id', $artistId)->firstOrFail();
        $unit = Unit::where('id', $unitId)->firstOrFail();

        $artist->units()->detach($unit->id);

        return redirect()->back();
    }

    function updateForm($id) 
    {
        $artist = Artist::where('id', $id)->firstOrFail();
        $groups = Group::query()->get();

        return view('artist.update-form', [
            'artist' => $artist,
            'groups' => $groups,
            'positions' => self::POSITIONS,
            'zodiacs' => self::ZODIACS,
            'blood_types' => self::BLOOD_TYPES,
        ]);
    }

    function update(Request $request, $id) 
    {
        $artist = Artist::where('id', $id)->firstOrFail();
        $data = $request->except('_token');
        $artist->update($data);

        return redirect()->route('artist-detail', ['id' => $artist->id]);
    }

    function delete($id)
    {
        $artist = Artist::where('id', $id)->firstOrFail();
        $artist->delete();

        return redirect()->route('group-detail', ['id' => $artist->group->id]);

    }
} 
