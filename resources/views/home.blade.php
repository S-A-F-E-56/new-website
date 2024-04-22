<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
</head>
<body>
    <h1>Selamat datang di halaman utama!</h1>

    <ul>
        @foreach($halaman as $data)
            <li>{{ $data->judul }}</li>
        @endforeach
    </ul>
</body>
</html>
