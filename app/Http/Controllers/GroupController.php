<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    function detail($id)
    {
        $group = Group::with('artists')->where('id', $id )->firstOrFail();

       
        return view('group.detail', [
            'group' => $group
        ]);
    }
}
