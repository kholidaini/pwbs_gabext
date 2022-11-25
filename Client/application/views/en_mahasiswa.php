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


    <!-- buat area entry data -->
    <main class="area-grid">

    <!-- npm -->
    <section class="item-label1">
        <label for="txt_npm" id="id_npm">NPM :</label>
    </section>
    <section class="item-input1">
        <input type="text" id="txt_npm" class="" maxlength="9">
    </section>
    <section class="item-error1">1</section>

    <!-- nama -->
    <section class="item-label2">
        <label for="txt_nama" id="id_nama">NAMA :</label>
    </section>
    <section class="item-input2">
        <input type="text" id="txt_nama" class="" maxlength="50">
    </section>
    <section class="item-error2">1</section>

    <!-- Telepon -->
    <section class="item-label3">
        <label for="txt_telepon" id="id_telepon">TELEPON :</label>
    </section>
    <section class="item-input3">
        <input type="text" id="txt_telepon" class="" maxlength="13">
    </section>
    <section class="item-error3">1</section>

    <!-- Jurusan -->
    <section class="item-label4">
        <label for="txt_jurusan" id="cbo_jurusan">JURUSAN :</label>
    </section>
    <section class="item-input4">
        <select id="cbo_jurusan" class="">
            <option value="-">Pilih Jurusan</option>
            <option value="IF">Informatika</option>
            <option value="SI">Sistem Informasi</option>
            <option value="TI">Teknologi Informasi</option>
            <option value="TK">Teknologi Komputer</option>
            <option value="SIA">Sistem Informasi Akuntansi</option>
        </select>
    </section>
    <section class="item-error4">1</section>


    </main>


    <script>
        // inisialisasi object
        let btn_lihat = document.getElementById("btn_lihat");

        // buat event btn_lihat
        btn_lihat.addEventListener('click',function(){
            // alihkan ke controller mahasiswa
            location.href='<?php echo base_url();?>'


        })


        // buat fungsi refresh
        function setRefresh(){
            // alihkan ke controller Addmahasiswa
            location.href='<?php echo site_url("Mahasiswa/addMahasiswa");?>'
        }


    </script>


</body>
</html>