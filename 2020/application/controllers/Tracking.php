<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking extends CI_Controller {

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
		$data['pengaturan'] = $this->admin->pengaturan();

		// KHUSUS
		$kode_satker_asli = $data['pengguna_masuk']['kode_satker_asli'];
		$data['judul'] = "Tracking";
		$data['subjudul'] = "Tracking Pengadaan";
		$data['satker'] = $this->rup->satker($kode_satker_asli)->row_array();
		$data['paket_penyedia_skpd'] = $this->rup->paket_penyedia_skpd($kode_satker_asli)->result_array();
		$data['paket_swakelola_skpd'] = $this->rup->paket_swakelola_skpd($kode_satker_asli)->result_array();

		// TENDER
		$data['paket_tender'] = 0;
		$data['draft'] = 0;
		$data['ukpbj'] = 0;
		$data['review'] = 0;
		$data['spse'] = 0;
		$data['status_akhir'] = 0;
		$this->template->load('template', 'tracking/index', $data);
	}

}
