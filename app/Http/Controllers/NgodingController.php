<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NgodingController extends Controller
{
    public function index($nama) {
        if($nama == "ngoding"){
            return \abort(403, 'Anda tidak punya akses karena anda afk');
        }elseif($nama == 'bayu'){
            return "Halo, ".$nama;
        }else {
            return \abort(404);
        }
    }
}
