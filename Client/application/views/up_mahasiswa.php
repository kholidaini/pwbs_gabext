<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>

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
        <input type="text" id="txt_npm" class="text-input" maxlength="9">
    </section>
    <section class="item-error1">
        <p class="info-error" id="err_npm"></p>
    </section>

    <!-- nama -->
    <section class="item-label2">
        <label for="txt_nama" id="id_nama">NAMA :</label>
    </section>
    <section class="item-input2">
        <input type="text" id="txt_nama" class="text-input" maxlength="50">
    </section>
    <section class="item-error2">
        <p class="info-error" id="err_nama"></p>
    </section>

    <!-- Telepon -->
    <section class="item-label3">
        <label for="txt_telepon" id="id_telepon">TELEPON :</label>
    </section>
    <section class="item-input3">
        <input type="text" id="txt_telepon" class="text-input" maxlength="15">
    </section>
    <section class="item-error3">
        <p class="info-error" id="err_telepon"></p>
    </section>

    <!-- Jurusan -->
    <section class="item-label4">
        <label for="txt_jurusan" id="id_jurusan">JURUSAN :</label>
    </section>
    <section class="item-input4">
        <select id="cbo_jurusan" class="select-input">
            <option value="-">Pilih Jurusan</option>
            <option value="IF">Informatika</option>
            <option value="SI">Sistem Informasi</option>
            <option value="TI">Teknologi Informasi</option>
            <option value="TK">Teknologi Komputer</option>
            <option value="SIA">Sistem Informasi Akuntansi</option>
        </select>
    </section>
    <section class="item-error4">
        <p class="info-error" id="err_jurusan"></p>
    </section>


    </main>

    <nav class="area-tombol">
        <button class="btn-primary" id="btn_ubah">Ubah Data</button>
    </nav>

    <script>
        // inisialisasi object
        let btn_lihat = document.getElementById("btn_lihat");

        // buat event btn_lihat
        btn_lihat.addEventListener('click',function(){
            // alihkan ke controller mahasiswa
            location.href='<?php echo base_url();?>'


        })

        // inisialisasi object
        let btn_ubah = document.getElementById("btn_ubah");

        // deklarasi variabel komponen
        let txt_npm = document.getElementById("txt_npm");
        let txt_nama = document.getElementById("txt_nama");
        let txt_telepon = document.getElementById("txt_telepon");
        let cbo_jurusan = document.getElementById("cbo_jurusan");
        

        // tampilkan nilai
        txt_npm.value = '<?php echo $npm;?>';
        txt_nama.value = '<?php echo $nama;?>';
        txt_telepon.value = '<?php echo $telepon;?>';
        cbo_jurusan.value = '<?php echo $jurusan;?>';
        let token = '<?php echo $token;?>';


        btn_ubah.addEventListener('click',function(){
            // deklarasi variabel object
            // npm
            let id_npm=document.getElementById("id_npm");
            let err_npm=document.getElementById("err_npm");
            // nama
            let id_nama=document.getElementById("id_nama");
            let err_nama=document.getElementById("err_nama");

            // telepon
            let id_telepon=document.getElementById("id_telepon");
            let err_telepon=document.getElementById("err_telepon");

            // jurusan
            let id_jurusan=document.getElementById("id_jurusan");
            let err_jurusan=document.getElementById("err_jurusan");

            // token
            

            // jika txt_npm tidak diisi
            if(txt_npm.value===""){
                id_npm.style.color="#ff0000"
                txt_npm.style.color="#ff0000"
                err_npm.style.display="unset"
                err_npm.innerHTML="<em>NPM Harus Diisi !</em>"
            }

            // jika txt_npm diisi
            else{
                id_npm.style.color="unset"
                txt_npm.style.color="unset"
                err_npm.style.display="none"
                err_npm.innerHTML=""
            }


            // ternary operator
            const nama = (txt_nama.value==="")?
            [
                id_nama.style.color="#ff0000",
                txt_nama.style.color="#ff0000",
                err_nama.style.display="unset",
                err_nama.innerHTML="<em>Nama Harus Diisi !</em>"
            ]
            :
            [
                id_nama.style.color="unset",
                txt_nama.style.color="unset",
                err_nama.style.display="none",
                err_nama.innerHTML=""
            ]

            const telepon = (txt_telepon.value==="")?
            [
                id_telepon.style.color="#ff0000",
                txt_telepon.style.color="#ff0000",
                err_telepon.style.display="unset",
                err_telepon.innerHTML="<em>Telepon Harus Diisi !</em>"
            ]
            :
            [
                id_telepon.style.color="unset",
                txt_telepon.style.color="unset",
                err_telepon.style.display="none",
                err_telepon.innerHTML=""
            ]


            const jurusan = (cbo_jurusan.value==="-")?
            [
                id_jurusan.style.color="#ff0000",
                cbo_jurusan.style.color="#ff0000",
                err_jurusan.style.display="unset",
                err_jurusan.innerHTML="<em>jurusan Harus Diisi !</em>"
            ]
            :
            [
                id_jurusan.style.color="unset",
                cbo_jurusan.style.color="#ff0000",
                err_jurusan.style.display="none",
                err_jurusan.innerHTML=""
            ]
        

        if(err_npm.innerHTML===""&&nama[3]===""&&telepon[3]===""&&jurusan[3]==="")
        {
            setUpdate(txt_npm.value,txt_nama.value,txt_telepon.value,cbo_jurusan.value,token)
        
        }
    })

    // buat fungsi refresh
    function setRefresh(){
            // alihkan ke controller Addmahasiswa
            location.href='<?php echo site_url("Mahasiswa/updateMahasiswa");?>' "/"+token;
        }

    const setUpdate = (npm,nama,telepon,jurusan,token)=>{
        let form   = new FormData();

        // isi/tambah nilai
        form.append("npm_mhs",npm);
        form.append("nama_mhs",nama);
        form.append("telepon_mhs",telepon);
        form.append("jurusan_mhs",jurusan);
        form.append("token_mhs",token);
        
        // kirim data
        fetch('<?php echo site_url("Mahasiswa/setUpdate");?>',
        {
            method: "POST",
            body:form

        })

        .then((response)=>response.json())
        .then((result)=>alert(result.statusnya))
        .catch((error)=>alert("Data Gagal dikirim"))
    }

    


    </script>


</body>
</html>