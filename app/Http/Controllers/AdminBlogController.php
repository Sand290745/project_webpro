<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;
use App\Models\Blog;
use App\Models\Group;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    function __construct() {
        $this->middleware('auth');
    }

    function list()
    {
        $blogs = Blog::query();


        return view('admin.blog.list', [
            'blogs' => $blogs->get(),
        ]);
    }

    function detail($id)
    {
        $blog = Blog::where('id', $id)->firstOrFail();

        return view('admin.blog.detail', [
            'blog' => $blog,
        ]);
    }

    function createForm()
    {
        $blog = Blog::query()->get();
        $groups = Group::query()->get();

        return view('admin.blog.create', [
            'blog' => $blog,
            'groups' => $groups,
        ]);
    }

    function create(Request $request)
    {
        try {
            $data = $request->except('_token');
            $blog = Blog::create($data);
            
            return redirect()->route('blog-list')->with('status', "Blog {$blog->title} was created.");
        }catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'error' => $excp->errorInfo[2],
            ]);
        }
    }

    function updateForm($id)
    {
        $blog = Blog::query()->where('id', $id)->firstOrFail();
        $groups = Group::query()->get();

        return view('admin.blog.update-form', [
            'blog' => $blog,
            'groups' => $groups,
        ]);
    }

    function update(Request $request, $id)
    { 
        try {
            $blog = Blog::query()->where('id', $id)->firstOrFail();
            $data = $request->except('_token');
            $blog->update($data);
            
            return redirect()->route('blog-list', ['id' => $blog->id])
            ->with('status', "Blog {$blog->title} was updated.");
        }catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'error' => $excp->errorInfo[2],
            ]);
        }
    }

    function delete($id)
    {
        try {
            $blog = Blog::query()->where('id', $id)->firstOrFail();
        $blog->delete();

        return redirect()->route('blog-list')->with('status', "Blog {$blog->title} was deleted.");
        }catch (QueryException $excp) {
            return redirect()->back()->withErrors([
                'error' => $excp->errorInfo[2],
            ]);
        }
    }
}
