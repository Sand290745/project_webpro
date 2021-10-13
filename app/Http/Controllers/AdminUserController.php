<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    function __construct() {
        $this->middleware('auth');
    }

    function list()
    {
        $users = User::query();

        return view('admin.user.list', [
            'users' => $users->get(),
        ]);
    }

    function detail($email)
    {
        $user = User::where('email', $email)->firstOrFail();

        return view('admin.user.detail', [
            'user' => $user,
        ]);
    }

    function createForm()
    {
        $user = User::query()->get();

        return view('admin.user.create', [
            'user' => $user,
        ]);
    }

    function create(Request $request)
    {
        try {
        $data = $request->except('_token');
        $user = User::create($data);
            return redirect()->route('user-list')
            ->with('status', "{$user->email} was created.");
        }catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'error' => $excp->errorInfo[2],
            ]);
        }    
    }

    function updateForm($email)
    {
        $user = User::query()->where('email', $email)->firstOrFail();
        
        return view('admin.user.update-form', [
            'user' => $user,
        ]);
    }

    function update(Request $request, $email)
    {
        try {
        $user = User::query()->where('email', $email)->firstOrFail();
        $data = $request->except('_token');
        $user->update($data);
            return redirect()->route('user-list')
            ->with('status', "{$user->email} was updated.");
        }catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'error' => $excp->errorInfo[2],
            ]);
        }
    }

    function delete($email)
    {
        try {
        $user = User::query()->where('email', $email)->firstOrFail();
        $user->delete();
            return redirect()->route('user-list', ['email' => $user->email])
            ->with('status', " {$user->email} was deleted.");
        }catch (QueryException $excp) {
            return redirect()->back()->withErrors([
                'error' => $excp->errorInfo[2],
            ]);
        }
    }

}
