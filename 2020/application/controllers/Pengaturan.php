<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

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
		$data['judul'] = "Master";
		$data['subjudul'] = "Pengaturan";
		$this->template->load('template', 'pengaturan', $data);
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['simpanjaringan'])){
			$jaringan = $post['jaringan'];
			$this->db->set('jaringan', $jaringan);
			$this->db->where('id', 'atur');
			$this->db->update('pengaturan');
			$this->session->set_flashdata('info', '<div class="callout callout-success">
              																	<h4><i class="icon fa fa-check"></i> Proses berhasil!</h4>
																                <p>Jaringan telah diubah menjadi <strong>'.strtoupper($jaringan).'</strong>.</p>
																              </div>');
			redirect('pengaturan');
		}
	}

}
