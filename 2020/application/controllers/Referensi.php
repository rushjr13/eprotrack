<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi extends CI_Controller {

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
		$data['judul'] = "Master";
		$data['subjudul'] = "Referensi";
		$data['jenis_pengadaan'] = $this->rup->jenis_pengadaan()->result_array();
		$data['metode_pemilihan'] = $this->rup->metode_pemilihan()->result_array();
		$data['apbd_penyedia'] = $this->rup->apbd_penyedia()->result_array();
		$data['apbd_swakelola'] = $this->rup->apbd_swakelola()->result_array();
		$data['apbn_penyedia'] = $this->rup->apbn_penyedia()->result_array();
		$data['apbn_swakelola'] = $this->rup->apbn_swakelola()->result_array();
		$data['satker'] = $this->rup->satker();
		$this->template->load('template', 'referensi/index', $data);
	}

	public function edit_satker($kode_satker_asli=null)
	{
		// UMUM
		$username = $this->session->userdata('username');
		if($username){
			$data['pengguna_masuk'] = $this->pengguna->get($username)->row_array();
		}else{
			$data['pengguna_masuk'] = "";
		}

		// KHUSUS
		if($kode_satker_asli==null){
			$this->session->set_flashdata('info', '<div class="callout callout-danger">
	          																	<h4><i class="icon fa fa-ban"></i> Akses Ditolak!</h4>
																                <p>Tidak Ada SKPD yang dipilih.</p>
																              </div>');
			redirect('referensi');
		}else{
			$data['judul'] = "Master";
			$data['subjudul'] = "Referensi";
			$data['satker'] = $this->rup->satker($kode_satker_asli)->row_array();
			$data['skpd'] = $this->simda->skpd()->result_array();
			$this->template->load('template', 'referensi/form_skpd', $data);
		}
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);

		if(isset($post['simpan_simda'])){
			$data_simda = [
				'pegawai'=>$post['pegawai'],
				'barang_jasa'=>$post['barang_jasa'],
				'modal'=>$post['modal'],
				'pagu_simda'=>$post['pegawai']+$post['barang_jasa']+$post['modal'],
			];
			$this->db->set($data_simda);
			$this->db->where('kode_satker_asli', $post['kode_satker_asli']);
			$this->db->update('satker');
			$this->session->set_flashdata('info', '<div class="callout callout-success">
	          																	<h4><i class="icon fa fa-check"></i> Proses Berhasil!</h4>
																                <p>Anggaran SIMDA <strong>'.$post['nama_satker'].'</strong> telah diperbarui</p>
																              </div>');
			redirect('referensi');
		}else if(isset($post['penyedia'])){
			$data_penyedia = [
				'jenis_pengadaan'=>$post['jenis_pengadaan'],
			];
			$this->db->set($data_penyedia);
			$this->db->where('kode_rup', $post['kode_rup']);
			$this->db->update('penyedia');
			$this->session->set_flashdata('info', '<div class="callout callout-success">
														<h4><i class="icon fa fa-check"></i> Proses Berhasil!</h4>
									                <p>Jenis Pengadaan <strong>'.$post['nama_paket'].'</strong> telah diperbarui</p>
									              </div>');
			redirect('referensi/jp');
		}
	}

}
