<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/Server.php';

class Mahasiswa extends Server
{

	// buat fungsi get
	function service_get()
	{
		// panggil model Mmahasiswa
		$this->load->model("Mmahasiswa", "mdl", TRUE);

		// panggil fungsi "get_data"
		$token = $this->get("npm");
		$hasil = $this->mdl->get_data(base64_encode($token));
		// $hasil = $this->mdl->get_data($token);

		// memberikan response
		$this->response(array("mahasiswa" => $hasil), 200);
	}


	// buat fungsi post
	function service_post()
	{
		$this->load->model("Mmahasiswa","mdl",TRUE);
		$data = array(
			"npm" => $this->post("npm"),
			"nama"=> $this->post("nama"),
			"telepon"=> $this->post("telepon"),
			"jurusan"=> $this->post("jurusan"),
		);
		// panggil method simpan
		$hasil=$this->mdl->simpan_data ($data
		["npm"],$data["nama"],$data["telepon"],
		// $data["jurusan"],$data["npm"]);
		$data["jurusan"],base64_encode($data["npm"]));
		// jika data tidak ditemukan
		if($hasil==0){
			$this->response(array("status"=>"data berhasil disimpan"),200);
		}
		// jika data ditemukan
		else{
			$this->response(array("status"=>"data gagal disimpan"),200);
		}
	}


	// buat fungsi put
	function service_put()
	{
		// panggil model "Mmahasiswa"
		$this->load->model("Mmahasiswa","mdl",TRUE);
		$data = array(
			"npm" => $this->put("npm"),
			"nama"=>$this->put("nama"),
			"telepon"=>$this->put("telepon"),
			"jurusan"=>$this->put("jurusan"),
			"token"=>$this->put("token"));
			// "token"=>base64_encode($this->put("token")));

		// panggil method ubah data
		$hasil=$this->mdl->ubah_data($data["npm"],
		$data["nama"],$data["telepon"],
		$data["jurusan"],$data["token"]);
		// jika data tidak ditemukan
		if($hasil==0){
			$this->response(array("status"=>"data berhasil diubah"),200);
		}
		// jika data ditemukan
		else{
			$this->response(array("status"=>"data gagal diubah"),200);
		}
	}



	// buat fungsi delete
	function service_delete()
	{
		// panggil model "Mmahasiswa"
		$this->load->model("Mmahasiswa","mdl",TRUE);
		// ambil parameter NPM
		// // panggil method "hapus_data"
		$token=$this->delete("npm");
		$hasil=$this->mdl->hapus_data($token);
		// $hasil=$this->mdl->hapus_data(base64_encode($token));
		// panggil method "hapus_data"
		// jika data berhasil dihapus
		
		if($hasil == 1){
			$this->response(array("status"=>"data berhasil dihapus"),200);
		}
		// jika data gagal dihapus
		else{
			$this->response(array("status"=>"data gagal dihapus!"),200);
		}
	}

	
}
