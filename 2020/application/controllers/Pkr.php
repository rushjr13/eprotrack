<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pkr extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    cek_tidak_masuk();
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
		$data['judul'] = "Penilaian Kinerja Rekanan";
		$data['subjudul'] = "Penilaian Kinerja Rekanan / Pihak Ketiga";
		$data['pkr'] = $this->pkr->bj()->result_array();
		$this->template->load('template', 'pkr/index', $data);
	}

	public function bj_tambah()
	{
		// UMUM
		$username = $this->session->userdata('username');
		if($username){
			$data['pengguna_masuk'] = $this->pengguna->get($username)->row_array();
		}else{
			$data['pengguna_masuk'] = "";
		}

		// KHUSUS
		$data['judul'] = "Penilaian Kinerja Rekanan";
		$data['subjudul'] = "Penyedia Barang / Jasa Lainnya";
		$data['hal'] = "tambah";
		$this->template->load('template', 'pkr/bj/form', $data);
	}

}
