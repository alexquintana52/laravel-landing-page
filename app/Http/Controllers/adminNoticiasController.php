<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticia;

class adminNoticiasController extends Controller
{
    public function admin(){

        $noticiasPost = Noticia::all();

        return view('admin.adminNoticias', [
            'noticiasPost' => $noticiasPost
        ]);
    }


    public function createNoti(){
        return view('admin.crud_noticias.create');
    }


    public function processNoti(Request $request){

        $data = $request->except('_token');

        $request -> validate( Noticia::$reglas, Noticia::$mensajesdeError);

        if($request->hasFile('img')){
            $data['img'] = $request->file('img')->store('imagenNoticias');
        }

        //dd($data);
        Noticia::create($data);

        return redirect('/admin/noticias')
        ->with('status.message', 'La noticia <b>'. e($data['titulo']) .'</b> fue creada con éxito');
    }

    public function deleteNoti(int $id){
        return view('admin.crud_noticias.delete',[
            'noticiasPost' => Noticia::findOrFail($id)
        ]);
    }

    public function processDeleteNoti(int $id){
        $noti = Noticia::findOrFail($id);
        $noti->delete();

        return redirect('/admin/noticias')
        ->with('status.message', 'La noticia <b>'. e($noti->titulo) .'</b> fue borrada con éxito');
    }

    public function editNoti(int $id){
        return view('admin.crud_noticias.update',[
            'noticiasPost' => Noticia::findOrFail($id)
        ]);
    }

    public function processEditNoti(Request $request, int $id){
        $noti = Noticia::findOrFail($id);

        $request -> validate( Noticia::$reglas, Noticia::$mensajesdeError);

        $noti->update($request->except('_token'));

        return redirect('/admin/noticias')
        ->with('status.message', 'La noticia <b>'. e($noti->titulo) .'</b> fue editada con éxito');
    }



}
