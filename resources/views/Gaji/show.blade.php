<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
    <fieldset>
        <legend>Show Gaji</legend>
        Nip  : <b>{{$gaji->nip}}</b><br>
        Nama : <b>{{$gaji->nama}}</b><br>
        Agama : <b>{{$gaji->agama}}</b><br>
        Jenis Kelamin : <b>{{$gaji->jenis_kelamin}}</b><br>
        Jabatan : <b>{{$gaji->jabatan}}</b><br>
        Jam Kerja : <b>{{$gaji->jam_kerja}}</b><br>

        @if($gaji->jabatan =='Manager')
        @php $uang=5000000;@endphp
        @elseif($gaji->jabatan=='Sekertaris')
        @php $uang=3500000;@endphp
        @else
        @php $uang=2500000;@endphp
        @endif
        @if($gaji->jam_kerja >= 150)
        @php $bonus=$uang*5/100 @endphp
        @elseif($gaji->jam_kerja >= 200)
        @php $bonus=$uang*7.5/100 @endphp
        @elseif($gaji->jam_kerja >= 250)
        @php $bonus=$uang*10/100 @endphp
        @else
        @php $bonus=$uang*0 @endphp
        @endif
        Gaji : <b>{{$uang}}<br></b>
        Bonus : <b>{{$bonus}}</b><br>
        Total Gaji: <b>{{$uang+$bonus}}</b>
    </fieldset>
</body>
</html>
