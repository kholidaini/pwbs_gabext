<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	
	public function index()
	{	
		// ambil data api mahasiswa(get)
		$data["tampil"]=json_decode($this->client->simple_get(APIMAHASISWA));

		// foreach($data["tampil"]->mahasiswa as $record){

		// 	echo $record->npm_mhs."-".
		// 		$record->nama_mhs."<br>";
		// }



		$this->load->view('vw_mahasiswa',$data);


		
	}

	function setDelete(){
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
		$data=array(
			"npm"=>$this->input->POST("npmnya"),
			"nama"=>$this->input->POST("namanya"),
			"telepon"=>$this->input->POST("teleponnya"),
			"jurusan"=>$this->input->POST("jurusannya"),
			"token"=>$this->input->POST("npmnya"),
			
		);
		$save = json_decode($this->client->simple_post(APIMAHASISWA, $data));
		echo json_encode(array("statusnya" => $save->status));

	}
}
