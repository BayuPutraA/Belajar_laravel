<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index() {
        $nama = "Bayu Putra Aditya";

        $pelajaran = ["Algoritma & Pemrogeraman", "Kalkulus", "Pemrograman Web"];

        return view('biodata', ['nama' => $nama, 'matkul' => $pelajaran]);
    }
}
