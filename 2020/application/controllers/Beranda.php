<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
		date_default_timezone_set('Asia/Makassar');
  }

	public function index()
	{
		// UMUM
		$username = $this->session->userdata('username');
		if($username){
			$data['pengguna_masuk'] = $this->pengguna->get($username)->row_array();
		}else{
			$data['pengguna_masuk'] = "";
		}

		// KHUSUS
		$rup = rup('offline');
		$data['penyedia'] = $rup['penyedia'];
		$data['swakelola'] = $rup['swakelola'];
		$data['judul'] = "Beranda";
		$data['subjudul'] = "e-Protrack+";
		$this->template->load('template', 'beranda', $data);
	}

}
