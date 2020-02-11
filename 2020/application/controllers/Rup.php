<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rup extends CI_Controller {

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
		$data['judul'] = "RUP";
		$data['subjudul'] = "Data Paket RUP";

		$rup = rup('offline');
		$data['penyedia'] = $this->rup->penyedia()->result_array();
		$data['swakelola'] = $this->rup->swakelola()->result_array();
	    $data['tender'] = tender();
		$this->template->load('template', 'rup/index', $data);
	}

	public function data_penyedia($id=null)
	{
		// UMUM
		$username = $this->session->userdata('username');
		if($username){
			$data['pengguna_masuk'] = $this->pengguna->get($username)->row_array();
		}else{
			$data['pengguna_masuk'] = "";
		}

		// KHUSUS
		if($id==null){

		}else{
			$data['penyedia'] = $this->rup->penyedia($id)->row_array();
			$data['judul'] = "RUP";
			$data['subjudul'] = "Data Paket Penyedia";
			$this->template->load('rup/template', 'rup/data_penyedia', $data);
		}
	}

	public function data_swakelola($id=null)
	{
		// UMUM
		$username = $this->session->userdata('username');
		if($username){
			$data['pengguna_masuk'] = $this->pengguna->get($username)->row_array();
		}else{
			$data['pengguna_masuk'] = "";
		}

		// KHUSUS
		if($id==null){

		}else{
			$data['swakelola'] = $this->rup->swakelola($id)->row_array();
			$data['judul'] = "RUP";
			$data['subjudul'] = "Data Paket Swakelola";
			$this->template->load('rup/template', 'rup/data_swakelola', $data);
		}
	}

	public function data_tender($id=null)
	{
		// UMUM
		$username = $this->session->userdata('username');
		if($username){
			$data['pengguna_masuk'] = $this->pengguna->get($username)->row_array();
		}else{
			$data['pengguna_masuk'] = "";
		}

		// KHUSUS
		if($id==null){

		}else{
			$json = file_get_contents(base_url('json/spse-tender.json'));
			$tender = json_decode($json, true);
			foreach ($tender as $tdr) {
				$id_lelang = $tdr['id_lelang'];
				if($id_lelang==$id){
					$data['tender'] = $tdr;
				}
			}
			$data['judul'] = "RUP";
			$data['subjudul'] = "Data Paket Tender";
			$this->template->load('rup/template', 'rup/data_tender', $data);
		}
	}

}
