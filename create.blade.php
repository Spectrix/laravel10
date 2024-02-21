<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('pegawai.store')}}" method="post">
        @csrf
        <label>ID</label>
        <input type="number" name="id_peg" required>
        <br>

        <label>NIP</label>
        <input type="number" name="nip" required>
        <br>

        <label>NAMA</label>
        <input type="text" name="nama" required>
        <br>

        <label>JENIS KELAMIN</label>
        <input type="text" name="jenis_kelamin" required>
        <br>

        <label>TANGGAL LAHIR</label>
        <input type="date" name="tgl_lahir" required>
        <br>

        <label>GOLONGAN</label>
        <input type="number" name="golongan_id" required>
        <br>

        <label>JABATAN</label>
        <input type="number" name="jabatan" required>
        <br>


        <button type="submit">SIMPAN</button>
    </form>
    @if(session('success'))
{{ session('success')}}
@endif
@if(session('error'))
{{ session('error')}}
@endif
</body>
</html>