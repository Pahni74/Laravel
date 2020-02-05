<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Gaji</title>
</head>
<body>
    <center>Daftar Karyawan</center><br>
    <table border="2" align="center">
        <thead>
            <tr>
                <th>Nip</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach($gaji as $pay)
            <tr>

                <td>{{$pay->nip}}</td>
                <td><center>{{$pay->nama}}</center></td>
                <td>{{$pay->jenis_kelamin}}</td>
                <td>{{$pay->jabatan}}</td>
                <td><a href="/gaji/{{ $pay->id }}">Lihat</a></td>
            </tr>
            @endforeach
            </tbody>
    </table>
</body>
</html>
