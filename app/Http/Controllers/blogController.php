<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog;

class blogController extends Controller
{

    public function index(){

        $blogPost = Blog::all();

        return view('blog.home', [
            'blogPost' => $blogPost
        ]);
    }

    public function show(int $id){
        return view('blog.showPostBlog',[
            'blogPost' => Blog::findOrFail($id)
        ]);
    }
}
