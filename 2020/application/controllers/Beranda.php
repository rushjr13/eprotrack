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
		$data['penyedia'] = $this->rup->penyedia()->num_rows();
		$data['swakelola'] = $this->rup->swakelola()->num_rows();
		$data['program'] = $this->rup->program()->num_rows();
		$data['kegiatan'] = $this->rup->kegiatan()->num_rows();
		$data['apbd'] = 0;
		$data['apbn'] = 0;

		// BELANJA
		$data['belanja_pegawai'] = 0;
		$data['belanja_barang_jasa'] = 0;
		$data['belanja_modal'] = 0;

		// SATKER
		$data['satker'] = $this->rup->satker();

		// RPP
		$data['jp'] = $this->rup->jp()->result_array();
		$data['mp'] = $this->rup->mp()->result_array();
		$data['tender'] = 0;
		$data['tender_cepat'] = 0;
		$data['seleksi'] = 0;
		$data['e_purchasing'] = 0;
		$data['penunjukan_langsung'] = 0;
		$data['pengadaan_langsung'] = 0;
		$data['swakelola_1'] = 0;
		$data['swakelola_2'] = 0;
		$data['swakelola_3'] = 0;
		$data['swakelola_4'] = 0;
		$data['dikecualikan'] = 0;
		$data['judul'] = "Beranda";
		$data['subjudul'] = "e-Protrack+";
		$this->template->load('template', 'beranda', $data);
	}

}
