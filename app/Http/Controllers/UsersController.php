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
        $ultimoPago = $pagos->sortByDesc('created_at')->first();
        $ultimoPagoaprobado = $pagos->where('collection_status', 'approved')->sortByDesc('created_at')->first();

        return view('users.show', [
            'servicio' => $servicio, // 'servicio' => 'servicio
            'user' => $user,
            'ultimoPago' => $ultimoPago,
            'ultimoAprobado' => $ultimoPagoaprobado,
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

}
