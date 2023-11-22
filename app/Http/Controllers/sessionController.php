<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\User;

class SessionController extends Controller
{
    public function formlogin()
    {
        return view('session/login');
    }

    public function processlogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $request -> validate( User::$reglas, User::$mensajes );

        if (!Auth::attempt($credentials)) {
            return redirect('/iniciar-sesion')
                ->withInput();
            }

        //$url = (Auth::user()->rol == '1') ? '/admin/blog' : '/blog';

        return redirect('/')
        ->with('status.message', 'Inicio de sesión exitoso, hola <b>'. Auth::user()->name.'</b>');
    }

    public function processlogout( Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')
        ->with('status.message', 'Cierre de sesión exitoso. ¡Hasta luego!');
    }
}
