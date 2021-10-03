<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function detail($id)
    {
        $unit = Unit::with('artists')->where('id', $id)->firstOrFail();
        $artists = $unit->artists;
        $music = $unit->music;

        return view('user.unit.detail', [
            'unit' => $unit,
            'artists' => $artists,
            'music' => $music,
        ]);
    }
}
