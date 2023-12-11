<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pagos;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function show()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);
        $pagos = Pagos::where('user_id', $id)->get();
        $servicio = Pagos::where('servicio_id', $id)->first();

        return view('users.show', [
            'servicio' => $servicio, // 'servicio' => 'servicio
            'pagos' => $pagos,
            'user' => $user
        ]);
    }

    public function edit()
    {
        $id = Auth::id();
        return view('users.edit',[
            'user' => User::findOrFail($id)
        ]);
    }

    public function processEdit(int $id, Request $request)
    {
        $data=$request->except('_token');

        $user = User::findOrFail($id);

        $request -> validate( User::$updateReglas, User::$updateMensajes );

        if($data['password'] == null){
            $data['password'] = $user->password;
        }else{
            $data['password'] = bcrypt($data['password']);
        }

        $user->update($data);

        return redirect('/mi-perfil')
        ->with('status.message', 'El usuario <b>'. e($request->nombre) .'</b> fue actualizado con éxito');
    }

    public function cancelarServicio()
    {
        $id = Auth::id();
        return view('users.cancelarServicio',[
            'user' => User::findOrFail($id)
        ]);
    }

    public function cancelarServicioAction(int $id, Request $request)
{
    $data = $request->only('servicio_id');

    $user = User::findOrFail($id);

    // Verificar si el campo servicio_id está presente antes de actualizar
    if ($request->has('servicio_id')) {
        $user->update(['servicio_id' => $request->servicio_id]);
    }

    return redirect('/mi-perfil')
        ->with('status.message', 'El usuario <b>'. e($user->nombre) .'</b> fue actualizado con éxito');
}


}
