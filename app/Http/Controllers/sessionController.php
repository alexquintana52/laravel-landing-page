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

<<<<<<< HEAD
        return redirect('/validar-usuario')
        ->with('status.message', 'Inicio de sesión exitoso, hola <b>'. Auth::user()->name.'</b>');
    }

    public function validateUser()
    {
        echo "Hola desde el middleware";
=======
        return redirect('/')
        ->with('status.message', 'Inicio de sesión exitoso, hola <b>'. Auth::user()->name.'</b>');
>>>>>>> 70a1624e6935e4f9b098435ff3cc3c52dfc745d5
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
