<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<style type="text/css"> body { padding-top:50px; } </style>
    <title>Eloquent</title>
</head>
<body class="container">

        @foreach ($mahasiswa as $temp)
            <h3>{{$temp->nama}} [{{$temp->nim}}]</h3>
            <h5><b>Hobi :</b>
                @foreach($temp->hobi as $tampung)
                    <b>{{$tampung->hobi}},</b>
                @endforeach
            </h5>
            <h4>
                <li>Nama Wali : <strong>{{$temp->Wali->nama}}</strong></li>
                <li>Dosen Pembimbing : <strong>{{$temp->Dosen->nama}}</strong></li>
            </h4>
            <hr/>
            @endforeach
</body>
</html>
