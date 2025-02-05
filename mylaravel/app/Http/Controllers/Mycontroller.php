<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    Function myfunction(Request $req, $var1=""){
            $data["value_id"] = $var1;
        $data['myinput'] = $req ->input('myinput');
            return view('php3', $data); 
    }

}