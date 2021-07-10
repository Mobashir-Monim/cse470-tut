<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->category = $request->category;
        $blog->save();

        return redirect('/');
    }
}
