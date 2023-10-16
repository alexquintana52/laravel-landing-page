<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticia;

class noticiasController extends Controller
{
    public function index(){
        $noticiasPost = Noticia::all();

        return view('noticias.home', [
            'noticiasPost' => $noticiasPost
        ]);
    }
        public function show(int $id){
        return view('noticias.showPostNoti',[
            'noticiasPost' => Noticia::findOrFail($id)
        ]);
    }
}
