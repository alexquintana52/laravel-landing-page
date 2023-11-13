<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminUsersController extends Controller
{
    public function admin(){
        return view('admin.adminUsers',[
            'user' => User::all()
        ]);
    }
}
