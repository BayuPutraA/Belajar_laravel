<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        //mengambil data karyawan
        $karyawan = karyawan::all();

        //mengirim data karyawan ke view karyawan
        return view('karyawan', ['karyawan' =>$karyawan]);
    }
}
