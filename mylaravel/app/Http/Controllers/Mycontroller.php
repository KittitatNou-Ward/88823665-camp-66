<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private function myprivite(){
        return 1;
    }
    function myfunction(Request $req, $var1 = ""){
        $data['myinput'] = $req->input('myinput');
        $data['myvalue'] = $var1;
        return view('myview', $data);
    }
}