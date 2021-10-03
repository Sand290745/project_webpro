<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Database\QueryException;

use App\Models\Group;
use Illuminate\Http\Request;

class AdminGroupController extends Controller
{
    function list()
    {
        $groups = Group::query();

        return view('admin.group.list', [
            'groups' => $groups->get(),
        ]);
    }

    function detail($id)
    {
        $group = Group::with('artists')->where('id', $id)->firstOrFail();

        return view('admin.group.detail', [
            'group' => $group
        ]);
    }

    function createForm()
    {
        $companies = Company::query()->get();

        return view('admin.group.create', [
            'companies' => $companies
        ]);
    }

    function create(Request $request)
    {
        try {
            $data = $request->except('_token');
            $group = Group::create($data);
            return redirect()->route('group-detail', ['id' => $group->id]);
        } catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'error' => $excp->errorInfo[2],
            ]);
        }
    }

    function delete($id)
    {
        try {
            $group = Group::where('id', $id)->firstOrFail();
            $group->delete();

            return redirect()->route('home');
        } catch (QueryException $excp) {
            return redirect()->back()->withErrors([
                'error' => $excp->errorInfo[2],
            ]);
        }
    }
}
