<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function myfunction(Request $req)
    {
        $data = [];
        $data['myinput'] = $req->input('myinput', '');
        $data['mulTb'] = [];

        if (is_numeric($data['myinput']) && $data['myinput'] > 0) {
            for ($i = 1; $i <= 12; $i++) {
                $data['mulTb'][$i] = $data['myinput'] * $i;
            }
        } elseif (!empty($data['myinput'])) {
            $data['error'] = 'กรุณากรอกตัวเลขที่ถูกต้อง!';
        }

        return view('myview', $data);
    }
}
