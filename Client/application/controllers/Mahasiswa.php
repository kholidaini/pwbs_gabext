<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	
	public function index()
	{	
		// ambil data api mahasiswa(get)
		$data["tampil"]=json_decode($this->client->simple_get(APIMAHASISWA));

		foreach($data["tampil"]->mahasiswa as $record){

			echo $record->npm_mhs."-".
				$record->nama_mhs."<br>";
		}

		$this->load->view('vw_mahasiswa');
	}
}
