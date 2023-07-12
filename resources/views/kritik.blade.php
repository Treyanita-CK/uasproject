@extends('admin.main')
@section('titlekonten','mahasiswa')
@section('title','mahasiswa')
@section('konten')
<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Laravel - Request Data</title>
</head>
<body>
<tr>
            <th colspan = "9"><h2><left>Form Tambah Data</left></h2></th></tr>
<br>
    <form action="/kritik/proses" method="POST">
      @csrf
        <p>
        <label> Nama : </label>
        <input type="text" name="nama">
        <br>
</p>
        <p>
        <label>E-mail : </label>
        <input type="text" name="email">
        <br>
</p>
        <p>
        <label>Kritik & Saran : </label>
        <input type="text" name="pesan">
        <br>
</p>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
    @endsection