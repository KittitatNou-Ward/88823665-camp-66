<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    function index(){
        $users = User::all();
        return view('user',['users' => $users]);
    }

    function delete(Request $req){
        $user = User::find($req->id);
        $user->delete();

        return redirect('/user');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id); // ค้นหาผู้ใช้ตาม ID
        return view('user_edit', compact('user')); // โหลด view user_edit.blade.php
    }

    function edit_action(Request $req){
        $user = User::find($req->id);

        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->save();

        return redirect('/user');
    }

}
