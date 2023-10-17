<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria_noticias;
use Illuminate\Http\Request;
use App\Models\Noticia;
use Illuminate\Support\Facades\Storage;

class adminNoticiasController extends Controller
{
    public function admin(){

        return view('admin.adminNoticias', [
            'noticiasPost' => Noticia::with('categoria_noticias')->get()
        ]);
    }


    public function createNoti(){
        return view('admin.crud_noticias.create',[
            'categoria_noticias' => Categoria_noticias::all()
        ]);
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
        if($noti->img && Storage::has($noti->img) ){
            Storage::delete($noti->img);
        }

        return redirect('/admin/noticias')
        ->with('status.message', 'La noticia <b>'. e($noti->titulo) .'</b> fue borrada con éxito');
    }

    public function editNoti(int $id){
        return view('admin.crud_noticias.update',[
            'noticiasPost' => Noticia::findOrFail($id),
            'categoria_noticias' => Categoria_noticias::all()
        ]);
    }

    public function processEditNoti(Request $request, int $id){

        $data = $request->except('_token');
        $noti = Noticia::findOrFail($id);
        $request -> validate( Noticia::$reglas, Noticia::$mensajesdeError);

        if($noti->img && Storage::has($noti->img) ){
            Storage::delete($noti->img);
        }
        if($request->hasFile('img')){
            $data['img'] = $request->file('img')->store('imagenNoticias');
        }

        $noti->update($data);

        return redirect('/admin/noticias')
        ->with('status.message', 'La noticia <b>'. e($noti->titulo) .'</b> fue editada con éxito');
    }



}
