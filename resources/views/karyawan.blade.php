<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial Laravel</title>
</head>
<body>
    <h1>Data Karyawan</h1>

    <ul>
        @foreach($karyawan as $k)
        <li>{{ "Nama : ".$k->nama. ' | Alamat : ' . $k->alamat }}</li>
        @endforeach
    </ul>
</body>
</html>