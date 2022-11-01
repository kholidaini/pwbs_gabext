<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Mahasiswa</title>


    <!-- import css -->
<link rel="stylesheet" href="<?php echo "ext/style.css"?>">

</head>
<body>
    <!-- bbuat menu -->
    <nav class="area-tombol">
        <button class="" id="btn_tambah">tambah data</button>
        <button class="" id="btn_refresh"> refresh data </button>
    </nav>
    <!-- buat tabel mahasiswa -->
    <table style="width: 100%;">
        <!-- buat judul tabel -->
        <thead>
        <tr>
            <th style="width: 10%;">Aksi</th>
            <th style="width: 5%;">No.</th>
            <th style="width: 10%;">NPM</th>
            <th style="width: 45%;">Nama</th>
            <th style="width: 15%;">Telepon</th>
            <th style="width: 10%;">Jurusan</th>
        </tr>
        </thead>
        <!-- buat isi tabel-->
        <!-- mulai looping -->
        <tbody>
        <tr>
            
            <td style="text-align: center;">A</td>
            <td style="text-align: center;">A</td>
            <td style="text-align: center;">A</td>
            <td style="text-align: justify;">A</td>
            <td style="text-align: center;">A</td>
            <td style="text-align: center;">A</td>
        <!-- akhir looping -->
        </tr>
        </tbody>
    </table>
</body>
</html>