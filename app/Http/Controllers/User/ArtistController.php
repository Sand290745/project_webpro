<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function list()
    {
        $artists = Artist::orderBy('name');

        return view('user.artist.list', [
            'artists' => $artists->get()
        ]);
    }
}
