<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    function detail($name)
    {
        $group = Group::with('artists')->where('name', $name)->firstOrFail();

       
        return view('group.detail', [
            'group' => $group
        ]);
    }
}
