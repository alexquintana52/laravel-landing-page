<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria_noticias;
use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Genero;
<<<<<<< HEAD
use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\Debugbar\Twig\Extension\Debug;
=======
>>>>>>> 70a1624e6935e4f9b098435ff3cc3c52dfc745d5
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AdminNoticiasController extends Controller
{
    public function admin()
    {

        return view('admin.adminNoticias', [
<<<<<<< HEAD
            'noticiasPost' => Noticia::with('categoria_noticias', 'generos')->paginate(2)
=======
            'noticiasPost' => Noticia::with('categoria_noticias', 'generos')->get()
>>>>>>> 70a1624e6935e4f9b098435ff3cc3c52dfc745d5
        ]);
    }


    public function createNoti()
    {
        return view('admin.crud_noticias.create',[
            'categoria_noticias' => Categoria_noticias::all(),
            'generos' => Genero::all()
        ]);
    }


    public function processNoti(Request $request)
    {

        $data = $request->except('_token');

        $request -> validate( Noticia::$reglas, Noticia::$mensajesdeError);

        if($request->hasFile('img')){
            $data['img'] = $request->file('img')->store('imagenNoticias');
        }

        /**
         * @var Noticia
         */
        $noticia = Noticia::create($data);

        $noticia->generos()->attach($request->input('generos', []));


        return redirect('/admin/noticias')
        ->with('status.message', 'La noticia <b>'. e($data['titulo']) .'</b> fue creada con éxito');
    }

    public function deleteNoti(int $id)
    {
        return view('admin.crud_noticias.delete',[
            'noticiasPost' => Noticia::findOrFail($id)
        ]);
    }

    public function processDeleteNoti(int $id)
    {
<<<<<<< HEAD
        try{
=======
        $noti = Noticia::findOrFail($id);
        $noti->generos()->detach();
        $noti->delete();
        if($noti->img && Storage::has($noti->img) ){
            Storage::delete($noti->img);
        }
>>>>>>> 70a1624e6935e4f9b098435ff3cc3c52dfc745d5

            $noti = Noticia::findOrFail($id);

            DB::transaction(function() use($noti){

                $noti->generos()->detach();
                //throw new \Exception('Error al borrar la noticia');
                $noti->delete();
            });

            if($noti->img && Storage::has($noti->img) ){
                Storage::delete($noti->img);
            }


            return redirect('admin/noticias')
            ->with('status.message', 'La noticia <b>'. e($noti->titulo) .'</b> fue borrada con éxito');


        }catch(\Exception $e){

            Debugbar::addThrowable($e);

            return redirect()
            ->back()
            ->with('status.message', 'La noticia <b>'. e($noti->titulo) .'</b> no pudo ser borrada');
        }
    }

    public function editNoti(int $id)
    {
        return view('admin.crud_noticias.update',[
            'noticiasPost' => Noticia::findOrFail($id),
            'categoria_noticias' => Categoria_noticias::all(),
            'generos' => Genero::all()
        ]);
    }

    public function processEditNoti(Request $request, int $id)
<<<<<<< HEAD
{
    $noti = null; // Asignar un valor inicial a $noti
=======
    {
>>>>>>> 70a1624e6935e4f9b098435ff3cc3c52dfc745d5

    try {
        DB::transaction(function () use ($request, $id, &$noti) {
            $data = $request->except('_token');
            $noti = Noticia::findOrFail($id);
            $request->validate(Noticia::$reglas, Noticia::$mensajesdeError);

            if ($request->hasFile('img')) {
                $data['img'] = $request->file('img')->store('imagenNoticias');
                if ($noti->img && Storage::has($noti->img)) {
                    Storage::delete($noti->img);
                }
            }

            $noti->update($data);

            $noti->generos()->sync($request->input('generos', []));
        });

        $noti->generos()->sync($request->input('generos', []));

        return redirect('/admin/noticias')
            ->with('status.message', 'La noticia <b>'. e($noti->titulo) .'</b> fue editada con éxito');
    } catch (\Exception $e) {
        Debugbar::addThrowable($e);

<<<<<<< HEAD
        // Verificar si $noti está definido antes de usarlo
        $notiTitulo = isset($noti) ? e($noti->titulo) : 'Noticia sin título';

        return redirect()
            ->back()
            ->with('status.message', 'La noticia <b>'. $notiTitulo .'</b> no pudo ser editada');
    }
}


=======
>>>>>>> 70a1624e6935e4f9b098435ff3cc3c52dfc745d5
}
