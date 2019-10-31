<!DOCTYPE html>
<html lang="en">
<head>
    <title>Semangat Ngoding - Tutorial Laravel</title>
    <link rel="stylesheet" trpe="text/css" href="{{ asset('/css/bootstrap.css') }}">
</head>
<body>

    <br/>
    <br/>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h2 class="text-center"><a href="https://www.malasngoding.com">www.mangatsngoding.com</a></h2>
                        <h3 class="text-center">Input Data Pegawai</h3>
                        <br/>                   

                        {{-- menampilkan error validasi --}}
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <br/>

                        <form action="/pegawai/store" method="post">                            
                                {{ csrf_field() }}  

                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input class="form-control" type="text" name="jabatan" value="{{ old('pekerjaan') }}">
                                </div>
                                <div class="form-group">
                                    <label for="umur">Umur</label>
                                    <input class="form-control" type="text" name="umur" value="{{ old('umur') }}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" name="alamat" value="{{ old('alamat') }}"></textarea>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Simpan Data">                           
                                    <a class="btn btn-primary float-right" href="/pegawai"> Kembali</a>
                                </div>                                                                                        
                        </form>
                    </div>
                </div>            
            </div>
        </div>
    </div>

    


</body>
</html>