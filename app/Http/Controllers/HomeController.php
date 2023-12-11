<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('layout.main');
    }
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }

}
