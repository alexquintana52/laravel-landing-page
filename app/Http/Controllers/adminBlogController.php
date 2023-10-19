<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Categoria_blog;
use Illuminate\Support\Facades\Storage;

class adminBlogController extends Controller
{
    public function admin(){
        return view('admin.adminBlog',[
            'blogPost' => Blog::with('categoria_blog')->get()
        ]);
    }


    public function createPost(){
        return view('admin.crud_blog.create', [
            'categoria_blog' => Categoria_blog::all()
        ]);

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

        if($post->img && Storage::has($post->img) ){
            Storage::delete($post->img);
        }

        return redirect('/admin/blog')
        ->with('status.message', 'La entrada <b>'. e($post->titulo) .'</b> fue borrada con éxito');
    }

    public function editPost(int $id){
        return view('admin.crud_blog.update',[
            'blogPost' => Blog::findOrFail($id),
            'categoria_blog' => Categoria_blog::all()
        ]);
    }

    public function processEditPost(Request $request, int $id){

        $data=$request->except('_token');

        $post = Blog::findOrFail($id);
        $request -> validate( Blog::$reglas, Blog::$mensajesdeError );


        if($request->hasFile('img')){
            $data['img'] = $request->file('img')->store('imagagenBlog');
            if($post->img && Storage::has($post->img) ){
                Storage::delete($post->img);
            }
        }


        $post->update($data);

        return redirect('/admin/blog')
        ->with('status.message', 'La entrada <b>'. e($post->titulo) .'</b> fue editada con éxito');
    }



}
