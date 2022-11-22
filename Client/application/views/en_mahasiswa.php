<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>

    <!-- import css -->
    <link rel="stylesheet" href="<?php echo base_url("ext/style.css")?>">


</head>
<body>
    

    <!-- button menu -->
    <nav class="area-tombol">
        <button class="btn-primary" id="btn_lihat">Lihat Data Mahasiswa</button>
        <button class="btn-secondary" id="btn_refresh" 
        onclick="return setRefresh()"> refresh data </button>
    </nav>




    <script>
        // inisialisasi object
        let btn_lihat = document.getElementById("btn_lihat");

        // buat event btn_lihat
        btn_lihat.addEventListener('click',function(){
            location.href='<?php echo base_url();?>'


        })


        // buat fungsi refresh
        function setRefresh(){
            // alihkan ke controller mahasiswa
            location.href='<?php echo site_url("\Mahasiswa/addMahasiswa");?>'
        }


    </script>


</body>
</html>