<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('pegawai.update', $pegawai->id_peg)}}" method="post">
        @csrf
        @method('put')

        <label>ID</label>
        <input type="number" name="nik" value="{{$pegawai->id_peg}}" required>
        <br>
        <label>NIK</label>
        <input type="number" name="nik" value="{{$pegawai->nip}}" required>
        <br>

        <label>NAMA</label>
        <input type="text" name="nama" value="{{$pegawai->nama}}" required>
        <br>

        <label>JENIS KELAMIN</label>
        <input type="text" name="jenis_kelamin" value="{{$pegawai->jenis_kelamin}}" required>
        <br>

        <label>TANGGAL LAHIR</label>
        <input type="date" name="tanggal_lahir" value="{{$pegawai->tgl_lahir}}" required>
        <br>

        <label>GOLONGAN</label>
        <input type="number" name="golongan_id" value="{{$pegawai->golongan_id}}" required>
        <br>

        <label>JABATAN</label>
        <input type="number" name="jabatan" value="{{$pegawai->jabatan}}"  required>
        <br>


        <button type="submit">UBAH</button>
    </form>
    @if(session('success'))
{{ session('success')}}
@endif
@if(session('error'))
{{ session('error')}}
@endif
</body>
</html>