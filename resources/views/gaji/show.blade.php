<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
         <legend>Show Gaji</legend>
         Nama: <b>{{$gaji->nama}}</b><br>
         Agama : <b>{{$gaji->agama}}</b><br>
         Jenis Kelamin : <b>{{$gaji->jenis_kelamin}}</b><br>
         Alamat : <b>{{$gaji->alamat}}</b><br>
         Jabatan : <b>{{$gaji->jabatan}}</b><br>
         Jam Kerja : <b>{{$gaji->jam_kerja}}</b><br>


         @if($gaji->jabatan == "Manager")
             @php $keterangan = "5000000" @endphp
        @elseif($gaji->jabatan== "Sekretaris")
             @php $keterangan = "3500000" @endphp
        @else
             @php $keterangan = "2500000" @endphp
        @endif
        Gaji Jabatan:{{ $keterangan }}<hr>
        @if($gaji->jam_kerja >= 250)
             @php $uang = $keterangan*10/100 @endphp
        @elseif($gaji->jam_kerja >= 200)
             @php $uang  = $keterangan*7.5/100 @endphp
        @else
             @php $uang = $keterangan*5/100 @endphp
      
        @endif
        gaji lembur :{{ $uang }}<hr>
        </fieldset>
</body>
</html>