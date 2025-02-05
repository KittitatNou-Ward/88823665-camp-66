<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class RegisterController extends Controller
{
    //
    function register(){
        return view("register");
    }

    function create(Request $req){
        //$obj_user = new User;
        //$obj_user->name = $req->name;
        //$obj_user->email = $req->email;
        //$obj_user->password = $req->password;
        //$obj_user->save();

        $User = User::create([

            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,

        ]);

        return redirect('/user');
    }
}