<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Servicios;
use Illuminate\Support\Facades\Auth;

class AdminUsersController extends Controller
{
    public function admin()
    {
        return view('admin.adminUsers',[
            'user' => User::all()
        ]);
    }

    public function show(int $id)
    {
        return view('users.show',[
            'user' => User::findOrFail($id)
        ]);
    }

    public function createUser()
    {
        return view('session.singUp');
    }

    public function processUser(Request $request)
    {
        $data=$request->except('_token');

        $request -> validate( User::$reglas, User::$mensajes );

        User::create($data);

        return redirect('/')
        ->with('status.message', 'El usuario <b>'. e($request->nombre) .'</b> fue creado con éxito');
    }

    public function editUser()
    {
        $id = Auth::id();
        return view('servicios.index',[
            'user' => User::findOrFail($id),
            'servicios' => Servicios::all()
        ]);
    }

    public function processEditUser(Request $request)
    {
        $id = Auth::id();
        $data=$request->except('_token');

        $Usuario = User::findOrFail($id);

        $Usuario->update($data);

        return redirect('/mi-perfil')
        ->with('status.message','Tu suscripcion fue procesada con exito verifica los cambios' );
    }

}
