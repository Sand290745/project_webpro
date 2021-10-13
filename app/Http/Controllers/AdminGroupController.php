<?php
namespace App\Http\Controllers;
use Illuminate\Database\QueryException;
use App\Models\Company;
use App\Models\Group;
use Illuminate\Http\Request;

class AdminGroupController extends Controller
{

    function __construct() {
        $this->middleware('auth');
    }

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
            return redirect()->route('group-list', ['id' => $group->id])
            ->with('status', "Group {$group->name} was created.");
        } catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'error' => $excp->errorInfo[2],
            ]);
        }
    }

    function updateForm($id)
    {
        $group = Group::query()->where('id', $id)->firstOrFail();
        $companies = Company::query()->get();

        return view('admin.group.update-form', [
            'group' => $group,
            'companies' => $companies,
        ]);
    }

    function update(Request $request, $id)
    {
        try {
        $group = Group::query()->where('id', $id)->firstOrFail();
        $data = $request->except('_token');
        $group->update($data);
            return redirect()->route('group-list', ['id' => $group->id])
            ->with('status', " {$group->name} was updated.");
        }catch (QueryException $excp) {
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

            return redirect()->route('group-list')
            ->with('status', "Group {$group->name} was deleted.");
        } catch (QueryException $excp) {
            return redirect()->back()->withErrors([
                'error' => $excp->errorInfo[2],
            ]);
        }
    }
}
