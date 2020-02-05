<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
    <center>Daftar Buku</center><br>
    <table border="2" align="center">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
                <th>Sinopsis</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach($buku as $book)
            <tr>

                <td>{{$book->judul}}</td>
                <td><center>{{$book->jumlah_halaman}}</center></td>
                <td>{{$book->penerbit}}</td>
                <td>{{$book->synopsis}}</td>
                <td><center>{{$book->status}}</center></td>
                <td><a href="/book/{{ $book->id }}">Lihat</a></td>
            </tr>
            @endforeach
            </tbody>
    </table>
</body>
</html>
