<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiasController extends Controller
{
    public function index(Request $request)
    {

        $buscadorParametro = [
            'titulo' => $request->query('titulo'),
            'categoria_id' => $request->query('categoria_id'),
        ];

        $consulta = Noticia::with('categoria_noticias');

        if ($buscadorParametro['titulo'] !== null) {
                $consulta -> where('titulo', 'LIKE', '%' . $buscadorParametro['titulo'] . '%');
        }

        /** @var LengthAwarePaginator $consulta  */
        $notiaciasPost = $consulta->paginate(2)->withQueryString();

        return view('noticias.home', [
            'noticiasPost' => $notiaciasPost,
        ]);
    }

    public function show(int $id)
    {
            return view('noticias.showPostNoti',[
            'noticiasPost' => Noticia::findOrFail($id)
        ]);
    }
}
