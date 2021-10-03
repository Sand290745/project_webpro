<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use App\Models\Artist;
use App\Models\Group;
use App\Models\Unit;
use Illuminate\Http\Request;

class AdminArtistController extends Controller
{
    function __construct() {
        $this->middleware('auth');
    }

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

    function list()
    {
        $artists = Artist::with('units')->get();

        return view('admin.artist.list', [
            'artists' => $artists
        ]);
    }
    
    function detail($id)
    {
        $artist = Artist::with('units')->where('id', $id)->firstOrFail();

        return view('admin.artist.detail', [
            'artist' => $artist
        ]);
    }

    function createForm()
    {
        $groups = Group::query()->get();

        return view('admin.artist.create', [
            'groups' => $groups,
            'positions' => self::POSITIONS,
            'zodiacs' => self::ZODIACS,
            'blood_types' => self::BLOOD_TYPES,
        ]);
    }

    function create(Request $request)
    {
        try {
            $data = $request->except('_token');
            $artist = Artist::create($data);
            return redirect()->route('group-detail', ['id' => $request->group_id])
                ->with('status', "Artist {$artist->name} was created.");
        } catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'error' => $excp->errorInfo[2],
            ]);
        }
    }

    function showUnit($id)
    {
        $artist = Artist::with('units')->where('id', $id)->firstOrFail();

        return view('admin.artist.show-unit', [
            'artist' => $artist,
            'units' => $artist->units
        ]);
    }

    function addUnitForm($id)
    {
        $artist = Artist::with('units')->where('id', $id)->firstOrFail();

        return view('admin.artist.add-unit-form', [
            'artist' => $artist,
            'units' => $artist->group->units /* Edit */
        ]);
    }

    function addUnit(Request $request, $id)
    {
        try {
            $artist = Artist::with('units')->where('id', $id)->firstOrFail();
            $unit = Unit::where('id', $request->unit_id)->firstOrFail();

            $artist->units()->attach($unit->id);

            return redirect()->route('artist-show-unit', ['id' => $artist->id]);
        } catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'error' => $excp->errorInfo[2],
            ]);
        }
    }

    function artistRemove($artistId, $unitId)
    {
        try {
            $artist = Artist::where('id', $artistId)->firstOrFail();
            $unit = Unit::where('id', $unitId)->firstOrFail();

            $artist->units()->detach($unit->id);

            return redirect()->back();
        } catch (QueryException $excp) {
            return redirect()->back()->withErrors([
                'error' => $excp->errorInfo[2],
            ]);
        }
    }

    function updateForm($id)
    {
        $artist = Artist::where('id', $id)->firstOrFail();
        $groups = Group::query()->get();

        return view('admin.artist.update-form', [
            'artist' => $artist,
            'groups' => $groups,
            'positions' => self::POSITIONS,
            'zodiacs' => self::ZODIACS,
            'blood_types' => self::BLOOD_TYPES,
        ]);
    }

    function update(Request $request, $id)
    {
        try {
            $artist = Artist::where('id', $id)->firstOrFail();
            $data = $request->except('_token');
            $artist->update($data);

            return redirect()->route('artist-detail', ['id' => $artist->id]);
        } catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'error' => $excp->errorInfo[2],
            ]);
        }
    }

    function delete($id)
    {
        try {
            $artist = Artist::where('id', $id)->firstOrFail();
            $artist->delete();

            return redirect()->route('group-detail', ['id' => $artist->group->id]);
        } catch (QueryException $excp) {
            return redirect()->back()->withErrors([
                'error' => $excp->errorInfo[2],
            ]);
        }
    }
    
}
