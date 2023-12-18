<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Servicios;
use App\Models\Pagos;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $pagos = Pagos::where('user_id', $id)
            ->orderBy('created_at', 'desc')
            ->first();
        $ultimoPago = $pagos;

        return view('servicios.index',[
            'servicios' => Servicios::all(),
            'user' => auth()->user(),
            'ultimoPago' => $ultimoPago
        ]);
    }
}
