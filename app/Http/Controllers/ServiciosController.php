<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Servicios;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index()
    {
        return view('servicios.index',[
            'servicios' => Servicios::all()
        ]);
    }
}
