<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog;

class BlogController extends Controller
{

    public function index()
    {
        return view('blog.home',[
            'blogPost' => Blog::with('categoria_blog')->get()
        ]);
    }

    public function show(int $id)
    {
        return view('blog.showPostBlog',[
            'blogPost' => Blog::findOrFail($id)
        ]);
    }
}
