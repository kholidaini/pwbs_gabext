<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	
	public function index()
	{	
		// akses auth basic
		$this->client->http_login("uti", "pwbs");




		// ambil data api mahasiswa(get)
		$data["tampil"]=json_decode($this->client->simple_get(APIMAHASISWA));
		$this->load->view('vw_mahasiswa',$data);
		// foreach($data["tampil"]->mahasiswa as $record){
		// 	echo $record->npm_mhs."-".
		// 		$record->nama_mhs."<br>";
		// }
	}

	function setDelete(){

		// akses auth basic
		$this->client->http_login("uti", "pwbs");

		$json = file_get_contents("php://input");
		$hasil = json_decode($json);

		$delete = json_decode($this->client->simple_delete(APIMAHASISWA, array("npm"=>$hasil->npmnya)));


		// $err = 1;

		echo json_encode(array("statusnya"=>$delete->status));
	}

	function addMahasiswa(){

		$this->load->view('en_mahasiswa');
		
		
	}

	function setSave(){

		// akses auth basic
		$this->client->http_login("uti", "pwbs");

		$data=array(
			"npm"=>$this->input->POST("npm_mhs"),
			"nama"=>$this->input->POST("nama_mhs"),
			"telepon"=>$this->input->POST("telepon_mhs"),
			"jurusan"=>$this->input->POST("jurusan_mhs"),
			"token"=>$this->input->POST("npm_mhs"),
			
		);
		$save = json_decode($this->client->simple_post(APIMAHASISWA, $data));
		echo json_encode(array("statusnya" => $save->status));

	}

	function updateMahasiswa(){
		$this->client->http_login("uti", "pwbs");

		// $segmen = $this->uri->total_segments();
		// ambil nilai npm
		$token = $this->uri->segment(3);
		$data["tampil"]=json_decode($this->client->simple_get(APIMAHASISWA,
		array("npm"=>$token)));

		foreach($data["tampil"]->mahasiswa as $record)
		{
			$data["npm"] = $record->npm_mhs;
			$data["nama"] = $record->nama_mhs;
			$data["telepon"] = $record->telepon_mhs;
			$data["jurusan"] = $record->jurusan_mhs;
			$data["token"] = $token;
			
		}
		$this->load->view('up_mahasiswa', $data);
    }

	function setUpdate(){

		// akses auth basic
		// $this->client->http_login("uti", "pwbs");


		$data=array(
			"npm"=>$this->input->POST("npm_mhs"),
			"nama"=>$this->input->POST("nama_mhs"),
			"telepon"=>$this->input->POST("telepon_mhs"),
			"jurusan"=>$this->input->POST("jurusan_mhs"),
			"token"=>$this->input->POST("token_mhs"),
			
		);
		$update = json_decode($this->client->simple_put(APIMAHASISWA, $data));
		echo json_encode(array("statusnya" => $update->status));

	}
}
