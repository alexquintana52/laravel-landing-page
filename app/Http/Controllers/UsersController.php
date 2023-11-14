<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function show(int $id)
    {
        return view('users.show',[
            'user' => User::findOrFail($id)
        ]);
    }


}
