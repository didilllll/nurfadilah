<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Gaji
    <table border = 1>
    <thead>
        <tr>
           
                <th>nip</th>
                <th>nama</th>
                <th>jenis kelamin</th>
                <th>jabatan</th>
                <th>Aksi</th>
         </tr>
         </thead>
         <tbody>
             @foreach($gaji as $gajih)
             <tr>
                <td>{{$gajih->nip}}</td>  
                <td>{{$gajih->nama}}</td> 
                <td>{{$gajih->jenis_kelamin}}</td> 
                <td>{{$gajih->jabatan}}</td> 
                <td><a href="/gajih/{{ $gajih->id }}">Lihat</a></td>
            </tr>
            @endforeach
            <tbody>
            </table> 
            </center>     
</body>
</html>