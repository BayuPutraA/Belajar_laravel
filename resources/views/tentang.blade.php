<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Tentang')

<!-- isi bagian konten -->
<!-- cara penulisan tentang section yang panjang -->
@section('konten')

    <p>Ini Adalah Halaman Tentang</p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Nam sint sed animi cupiditate harum, aspernatur repudiandae maxime 
        cumque sit velit amet quod expedita blanditiis fuga, non vel laborum 
        saepe quidem.
    </p>

@endsection