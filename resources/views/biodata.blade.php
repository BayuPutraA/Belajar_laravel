<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Tutuorial Laravel #4 : Passing Data Controller Ke View Laravel</title>
</head>
<body>
    
    <h1>Tutorial Laravel</h1>
    <a href="htttps://www.malasngoding.com/category/laravel">www.malasngoding.com</a>

    <br>

    <p>Nama : {{ $nama }}</p>

    <p>Mata Pelajaran</p>
    <ul>

        @foreach($matkul as $m)

        <li>{{ $m }}</li>

        @endforeach
    </ul>

</body>
</html>