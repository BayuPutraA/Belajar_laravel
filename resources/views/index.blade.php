<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Semangat Ngoding - Tutorial Laravel</title>
    <link rel="stylesheet" trpe="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>


    <div class="container">
        <div class="card">
            <div class="card-boy">

            <h2 class="text-center"><a href="https://www.malasngoding.com">www.mangatsngoding.com</a></h2>
            <h3 class="ml-1"><a href="/pegawai">Data Pegawai</a></h3>

            <div class="form-group">

            </div>
            <div class="float-right mr-2">
                <a class="btn btn-primary ml-1" href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
            </div>
            <div class="form-group">
                <form action="/pegawai/cari" method="GET" class="form-inline">
                    <input class="form-control ml-1" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
                    <input class="btn btn-primary ml-2" type="submit" value="CARI">                    
                </form>
            </div>
            
            <table class="table table-bordered"> 
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>
            @foreach($pegawai as $p)
                <tr>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                        |
                        <a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>

            <br/>

            Halaman : {{ $pegawai->currentPage() }} <br/>
            Jumlah Data : {{ $pegawai->total() }} <br/>
            Data Per Halaman : {{ $pegawai->perPage() }} <br/>


            {{ $pegawai->links() }}

            </div>
        </div>
    </div>
    
</body>
</html>