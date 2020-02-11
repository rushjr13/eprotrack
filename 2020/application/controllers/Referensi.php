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
		$data['satker'] = $this->rup->satker();
		$this->template->load('template', 'referensi/index', $data);
	}

	public function rekapitulasi()
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
		$data['subjudul'] = "Rekapitulasi";
		$data['jp'] = $this->rup->jp()->result_array();
		$data['mp'] = $this->rup->mp()->result_array();
		$data['satker'] = $this->rup->satker();
		$this->template->load('template', 'referensi/rekapitulasi', $data);
	}

	public function rekapitulasi_jp($id)
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
		$data['subjudul'] = "Rekapitulasi";
		$data['jp'] = $this->rup->jp($id)->row_array();
		$this->template->load('template', 'referensi/form_jp', $data);
	}

	public function rekapitulasi_mp($id)
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
		$data['subjudul'] = "Rekapitulasi";
		$data['mp'] = $this->rup->mp($id)->row_array();
		$this->template->load('template', 'referensi/form_mp', $data);
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);

		if(isset($post['simpan_jp'])){
			$data_jp = [
				'nama_jp'=>$post['nama_jp'],
				'paket_jp'=>$post['paket_jp'],
				'pagu_jp'=>$post['pagu_jp'],
			];
			$this->db->set($data_jp);
			$this->db->where('id_jp', $post['id_jp']);
			$this->db->update('jp');
			$this->session->set_flashdata('info', '<div class="callout callout-success">
	          																	<h4><i class="icon fa fa-check"></i> Proses Berhasil!</h4>
																                <p>Jenis Pengadaan <strong>'.$post['nama_jp'].'</strong> telah diperbarui</p>
																              </div>');
			redirect('rekapitulasi');
		}else if(isset($post['simpan_mp'])){
			$data_mp = [
				'nama_mp'=>$post['nama_mp'],
				'paket_mp'=>$post['paket_mp'],
				'pagu_mp'=>$post['pagu_mp'],
			];
			$this->db->set($data_mp);
			$this->db->where('id_mp', $post['id_mp']);
			$this->db->update('mp');
			$this->session->set_flashdata('info', '<div class="callout callout-success">
	          																	<h4><i class="icon fa fa-check"></i> Proses Berhasil!</h4>
																                <p>Metode Pelilihan <strong>'.$post['nama_mp'].'</strong> telah diperbarui</p>
																              </div>');
			redirect('rekapitulasi');
		}
	}

}
