<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticia;

class noticiasController extends Controller
{
    public function index(){

        return view('noticias.home', [
            'noticiasPost' => Noticia::with('categoria_noticias')->paginate(2)
        ]);
    }
        public function show(int $id){
        return view('noticias.showPostNoti',[
            'noticiasPost' => Noticia::findOrFail($id)
        ]);
    }
}

