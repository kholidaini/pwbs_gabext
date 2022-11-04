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
        <button class="btn-primary" id="btn_tambah">tambah data</button>
        <button class="btn-secondary" id="btn_refresh" onclick="setRefresh()"> refresh data </button>
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
            <td><?php echo""?></td>
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
    <script>

        let btn_tambah = document.getElementById("btn_tambah");

        btn_tambah.addEventListener('click',function(){
            // btn_tambah.style.background ="#FFFFFF";
            // btn_tambah.style.color="#000000";
            // this.style.borderRadius="10px";
            // this.style.fontSize ="200px";
            // this.className = "btn-secondary";

            // manipulasi html
            // this.innerHTML = "<strong>Tambah</strong>";

            // alihkan ke halaman controller 
            location.href="<?php echo "Mahasiswa/addMahasiswa" ?>"


            alert("Tambah Data")
        })

        // membuat function tombol tambah
        // function info(){
        //     alert("Tambah Data")
        // }

        function setRefresh(){
            location.href="<?php echo "http://localhost:8080/pwbs_gabext/client/"?>"
        }

        
    </script>
</body>
</html>