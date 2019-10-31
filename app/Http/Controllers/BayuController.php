<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BayuController extends Controller
{
    public function data() {
        
        $parameter = [
            'nama' => 'Bayu Putra',
            'status' => 'Pelajar'
        ];
        $enkripsi = Crypt::encrypt($parameter);
        echo "<a href='/data/".$enkripsi."'>Klik</a>";
    }

    public function data_proses($data){
        $data = Crypt::decrypt($data);

        echo "Nama : " . $data['nama'];
        echo "<br>";
        echo "Pekerjaan : " . $data['status'];
    }
}
