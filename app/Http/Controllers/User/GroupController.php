<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    function detail($id)
    {

        $group = Group::with('artists')->where('id', $id)->firstOrFail();

        return view('user.group.detail', [
            'group' => $group
        ]);
    }
}
