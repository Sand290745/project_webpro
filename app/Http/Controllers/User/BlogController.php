<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function detail($id)
    {
        $blog = Blog::where('id', $id)->firstOrFail();

        return view('user.blog.detail', [
            'blog' => $blog,
        ]);
    }

}
