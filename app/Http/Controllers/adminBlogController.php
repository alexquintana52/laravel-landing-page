<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class adminBlogController extends Controller
{
    public function admin(){
        return view('admin.adminBlog',[
            'blogPost' => Blog::all()
        ]);
    }

    public function show(int $id){
        return view('blog.showPostBlog',[
            'blogPost' => Blog::findOrFail($id)
        ]);
    }

    public function createPost(){
        return view('admin.crud_blog.create');
    }


    public function processPost(Request $request){

        $data=$request->except('_token');


        $request -> validate( Blog::$reglas, Blog::$mensajesdeError );

        if($request->hasFile('img')){
            $data['img'] = $request->file('img')->store('imagagenBlog');
        }


        Blog::create($data);

        return redirect('/admin/blog')
        ->with('status.message', 'La entrada <b>'. e($request->titulo) .'</b> fue creada con éxito');
    }

    public function deletePost(int $id){
        return view('admin.crud_blog.delete',[
            'blogPost' => Blog::findOrFail($id)
        ]);
    }

    public function processDeletePost(int $id){
        $post = Blog::findOrFail($id);
        $post->delete();

        return redirect('/admin/blog')
        ->with('status.message', 'La entrada <b>'. e($post->titulo) .'</b> fue borrada con éxito');
    }

    public function editPost(int $id){
        return view('admin.crud_blog.update',[
            'blogPost' => Blog::findOrFail($id)
        ]);
    }

    public function processEditPost(Request $request, int $id){

        $post = Blog::findOrFail($id);
        $request -> validate( Blog::$reglas, Blog::$mensajesdeError );



        $post->update($request->except('_token'));

        return redirect('/admin/blog')
        ->with('status.message', 'La entrada <b>'. e($post->titulo) .'</b> fue editada con éxito');
    }



}
