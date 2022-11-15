<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Mahasiswa</title>

    <!-- import cdnjs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


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
            <td style="text-align: center;">

            <nav class="area-aksi">
                <!-- tombol ubah -->
                <button class="btn-ubah" id="btn_ubah" title="Ubah Data Mahasiswa" 
                onclick="return gotoUpdate('<?php echo $record->npm_mhs;?>')">
                    <i class="fa-solid fa-pen">
                        
                    </i>
                </button>
                <!-- tombol hapus -->
                <button class="btn-hapus" id="btn_hapus" title="Hapus Data Mahasiswa"
                onclick="return gotoDelete('<?php echo $record->npm_mhs;?>')">
                    <i class="fa-solid fa-trash">

                    </i>
                </button>
            </nav>

            </td>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
            
            location.href='<?php echo site_url("Mahasiswa/addMahasiswa");?>';

            // manipulasi html
            // this.value="Entry Data"
            // this.innerHTML="<em>Entry Data</em>"
            // this.text="Entry Data"

            // manipulasi css
            // this.style.color="#FF0000"
            // this.style.fontSize="40px"

            // manipulasi dengan mengambil class
            this.className= 'btn-secondary'

        });
        
        // buat fungsi ubah data`
        function gotoUpdate(npm){
            // alihkan ke halaman ubah data
            location.href='<?php echo site_url("Mahasiswa/updateMahasiswa");?>'+'/'+npm;
        }

        
    </script>
</body>
</html>