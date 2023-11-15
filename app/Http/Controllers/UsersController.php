<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function show()
    {
        $id = Auth::id();
        return view('users.show',[
            'user' => User::findOrFail($id)
        ]);
    }


}
