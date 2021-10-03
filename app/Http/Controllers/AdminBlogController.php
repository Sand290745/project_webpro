<?php

namespace App\Http\Controllers;

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
        $data = $request->except('_token');

        $blog = Blog::create($data);

        return redirect()->route('blog-list');
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
        $blog = Blog::query()->where('id', $id)->firstOrFail();
        $data = $request->except('_token');
        $blog->update($data);
        return redirect()->route('blog-detail', ['id' => $blog->id]);
    }

    function delete($id)
    {
        $blog = Blog::query()->where('id', $id)->firstOrFail();
        $blog->delete();

        return redirect()->route('blog-list');
    }
}
