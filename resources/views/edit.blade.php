<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial Membuat CRUD Pada Laravel</title>
    <link rel="stylesheet" trpe="text/css" href="{{ asset('/css/bootstrap.css') }}">
</head>
<body>

    <br>
    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        
                        <h2 class="text-center"><a href="https://www.malasngoding.com">www.mangatsngoding.com</a></h2>
                        <h3 class="text-center">Edit Data Pegawai</h3>
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

                        

                        @foreach($pegawai as $p)
                        <form action="/pegawai/update" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" name="nama" required="required" value="{{ $p->pegawai_nama }}">
                            </div>
                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <input class="form-control" type="text" name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}">
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input class="form-control" type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" name="alamat" required="required">{{ $p->pegawai_alamat }}</textarea>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Simpan Data">
                                <a class="btn btn-danger float-right" href="/pegawai"> Kembali</a>
                            </div>                            
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>