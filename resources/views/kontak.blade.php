<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- caara penulisan section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

    <p>Ini Adalah Halaman Kontak</p>

    <table border="1">
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>semangatngoding@gmail.com</td>
        </tr>
        <tr>
            <td>Hp</td>
            <td>:</td>
            <td>0895-1795-1989</td>
        </tr>
    </table>

@endsection