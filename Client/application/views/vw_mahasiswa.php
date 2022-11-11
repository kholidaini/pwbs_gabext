<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Mahasiswa</title>


    <!-- import css -->
    <link rel="stylesheet" href="<?php echo base_url("ext/style.css")?>">
    

</head>
<body>
    <!-- bbuat menu -->
    <nav class="area-tombol">
        <button class="btn-primary" id="btn_tambah">tambah data</button>
        <button class="btn-secondary" id="btn_refresh" 
        onclick="return setRefresh()"> refresh data </button>
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
        <?php
        // inisialisasi variabel $no
        $no=1;
        // menampilkan hasil service "get" dengan looping
        foreach($tampil->mahasiswa as $record)
        {

        ?>
        <tr>
        <td style="text-align: center;">-</td>
            <td style="text-align: center;"><?php echo $no;?></td>
            <td style="text-align: center;"><?php echo $record->npm_mhs;?></td>
            <td style="text-align: left;"><?php echo $record->nama_mhs;?></td>
            <td style="text-align: justify;"><?php echo $record->telepon_mhs;?></td>
            <td style="text-align: center;"><?php echo $record->jurusan_mhs;?></td>
            
        <!-- akhir looping -->
        </tr>
        </tbody>
        <?php

            $no++;

            }   
        ?>
    </table>
    <script>

        // fungsi JS

        // button refresh
        function setRefresh(){
            // alihkan ke controller mahasiswa
            location.href='<?php echo base_url();?>'
        }


        // event button tambah berdasarkan id
        let btn_tambah = document.getElementById("btn_tambah");

        // buat fungsi tambah
        // btn_tambah.addEventListener('click',setRefresh)
        btn_tambah.addEventListener('click',
        function(){

            // alihkan ke halaman (controller) tambah mahasiswa
            

            // manipulasi html
            // this.value="Entry Data"
            // this.innerHTML="<em>Entry Data</em>"
            // this.text="Entry Data"

            // manipulasi css
            // this.style.color="#FF0000"
            // this.style.fontSize="40px"

            // manipulasi dengan mengambil class
            this.className= 'btn-secondary'

        })
        

        
    </script>
</body>
</html>