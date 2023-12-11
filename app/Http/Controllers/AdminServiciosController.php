<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicios;
use Illuminate\Support\Facades\Storage;

class AdminServiciosController extends Controller
{
    public function admin()
    {
        return view('admin.adminServicios',[
            'servicios' => Servicios::all()
        ]);
    }

    public function createServicio()
    {
        return view('admin.crud_servicios.create');
    }

    public function processServicio(Request $request)
    {
        $data=$request->except('_token');

        $request -> validate( Servicios::$reglas, Servicios::$mensajesdeError );

        if($request->hasFile('img')){
            $data['img'] = $request->file('img')->store('imagagenServicios');
        }

        Servicios::create($data);

        return redirect('/admin/servicios')
        ->with('status.message', 'El servicio <b>'. e($request->nombre) .'</b> fue creado con éxito');
    }

    public function editServicio($id)
    {
        return view('admin.crud_servicios.update', [
            'servicio' => Servicios::findOrFail($id)
        ]);
    }

    public function processEditServicio(Request $request, $id)
    {
        $data=$request->except('_token');

        $servicio = Servicios::findOrFail($id);

        $request -> validate( Servicios::$reglas, Servicios::$mensajesdeError );

        if($request->hasFile('img')){
            $data['img'] = $request->file('img')->store('imagagenServicios');
            if($servicio->img && Storage::has($servicio->img) ){
                Storage::delete($servicio->img);
            }
        }

        $servicio = Servicios::findOrFail($id);
        $servicio->update($data);

        return redirect('/admin/servicios'. $servicio->id .'')
        ->with('status.message', 'El servicio <b>'. e($request->nombre) .'</b> fue actualizado con éxito');
    }

    public function deleteServicio(int $id)
    {
        return view('admin.crud_servicios.delete',[
            'servicio' => Servicios::findOrFail($id)
        ]);
    }

<<<<<<< HEAD


=======
    public function processDeleteServicio(int $id)
    {
        $servicio = Servicios::findOrFail($id);
        $servicio->delete();

        if($servicio->img && Storage::has($servicio->img) ){
            Storage::delete($servicio->img);
        }

        return redirect('/admin/servicios')
        ->with('status.message', 'El servicio <b>'. e($servicio->nombre) .'</b> fue borrado con éxito');
    }
>>>>>>> 70a1624e6935e4f9b098435ff3cc3c52dfc745d5
}

