<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    function list()
    {
        $artists = Artist::orderBy('name');

        return view('user.artist.list', [
            'artists' => $artists->get()
        ]);
    }

    function detail($id)
    {
        $artist = Artist::with('units')->where('id', $id)->firstOrFail();

        return view('user.artist.detail', [
            'artist' => $artist
        ]);
    }
}
