<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

use App\Gambar;
use File;

class UploadController extends Controller
{
    public function upload(){
        $gambar = Gambar::get();
        return view('upload', ['gambar' => $gambar]);
    }

    public function proses_upload(Request $request) {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'required',
        ]);

        //menyimpan data file yang diupliad ke $file
        $file = $request->file('file');

        /*
        // nama file
        echo 'File Name : '.$file->getClientOriginalName();
        echo '<br>';

        // Extensi file
        echo 'File Extension : '.$file->getClientOriginalExtension();
        echo '<br>';

        // real path
        echo 'File Real Path : '.$file->getRealPath();
        echo '<br>';

        // ukuran file
        echo 'File Name : '.$file->getSize();
        echo '<br>';

        // tipe mime
        echo 'File Mime Type : '.$file->getMimeType();
        echo '<br>'; */

        $nama_file = time()."_".$file->getClientOriginalName();
        
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        Gambar::create([
            'file' => $nama_file,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back();
    }

    public function hapus($id){
        $gambar = Gambar::where('id', $id)->first();
        File::delete('data_file/'.$gambar->file);

        Gambar::where('id',$id)->delete();

        return redirect()->back();
    }
}
