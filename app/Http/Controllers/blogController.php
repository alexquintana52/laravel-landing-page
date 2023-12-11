<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog;


class BlogController extends Controller
{


    public function index(Request $request)
    {
        $buscarParametro = [
            'titulo' => $request->query('titulo'),
            'categoria_id' => $request->query('categoria_id'),
        ];


        $consulta = Blog::with(['categoria_blog']);


        if($buscarParametro['titulo'] !== null){
            $consulta -> where('titulo', 'LIKE', '%' . $buscarParametro['titulo'] . '%');
        }




        /** @var LengthAwarePaginator $consulta  */
        $blogPost = $consulta->paginate(2)->withQueryString();


        return view('blog.home',[
            'blogPost' => $blogPost,
        ]);
    }


    public function show(int $id)
    {
        return view('blog.showPostBlog',[
            'blogPost' => Blog::findOrFail($id)
        ]);
    }
}
