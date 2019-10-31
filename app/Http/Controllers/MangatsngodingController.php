<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MangatsngodingController extends Controller
{
    public function input() {
        return view('input');
    }

    public function proses(Request $request) {
        $message = [
            'required' => ':attribute tidak boleh kosong!',
            'min' => ':attribute minimal :min karakter!',
            'max' => ':attribute maksimal :max karakter!',
            'numeric' => ':attribute hanya bisa diisi angka!'
        ];

        $this->validate($request, [
            'nama' => 'required|min:5|max:20|',
            'pekerjaan' => 'required',
            'umur' => 'required|numeric',
            'alamat' => 'required'
        ], $message);

        return view('proses', ['data' => $request]);
    }
}
