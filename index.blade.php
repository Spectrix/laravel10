<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
      
<body>
    <h2 style="text-align: center;">Data Pegawai</h2> 

    <h2>
        <center>
        
        <img src="https://smkn4-tanjungpinang.sch.id/wp-content/uploads/2022/06/cropped-GridArt_20220531_192223873.jpg" alt=""  style="width:90px;height:90px;margin-right:10px;">
</center>
    </h2>

    <svg widht="500" height="300">
        <line x1="50" y1="250" x2="450" y2="250" stroke="black"/>
        <line x1="50" y1="250" x2="50" y2="50" stroke="black"/>

        @for($i = 0; $i <= 10; $i++)
         <text x="40" y="{{250-$i*20}}" text-anchor="end">{{$i *10}}</text>
         @endfor

         @foreach($golonganData as $label => $count)
    <text x="{{$loop->index * 80 + 90}}"  y="270" text-anchor="middle">{{$label}}</text>
    <rect x="{{$loop->index * 80 + 70}}"  y="{{250 - $count * 5}}" width="60" height="{{$count * 5}}"></rect>
@endforeach

        <text x="20" y="150" text-anchor="middle" transform="rotate(-90, 20, 150)">Jumlah Karyawan</text>
    </svg>
    
    <center>
    <a href="{{route('pegawai.create')}}">TAMBAH</a>
 
     <table border="1">
        <tr>
             <th>ID</th>
            <th>NIP</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>TANGGAL LAHIR</th>
            <th>GOLONGAN</th>
            <th>JABATAN</th>
            <th>AKSI</th>
       </tr>
       @foreach($pegawai as $pegawai)
       <tr>
            <td>{{$pegawai->id_peg}}</td>
            <td>{{$pegawai->nip}}</td>
            <td>{{$pegawai->nama}}</td>
            <td>{{$pegawai->jenis_kelamin}}</td>
            <td>{{$pegawai->tgl_lahir}}</td>
            <td>{{$pegawai->golongan_id}}</td>
            <td>{{$pegawai->jabatan}}</td>
            <td>
            <form action="{{route('pegawai.edit', $pegawai->id_peg)}}" method="get" style="display: inline;">
                @csrf
                <button type="submit">EDIT</button>
            </form>
                <form action="{{route('pegawai.destroy', $pegawai->id_peg)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">HAPUS</button>

            </form>
            </td>
       </tr>
       @endforeach
</center>
</table>
@if(session('success'))
{{ session('success')}}
@endif
@if(session('error'))
{{ session('error')}}
@endif
</body>
</html>