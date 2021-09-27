<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    function detail($name)
    {
        $artist = Artist::with('units')->where('name', $name)->firstOrFail();
       
        return view('artist.detail', [
            'artist' => $artist
        ]);
    }
}
