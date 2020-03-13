<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
  }

  function create_captcha()
	{
		$options = [
			'img_path'	=>'./uploads/captcha/',
			'img_url'		=>base_url('captcha'),
			'img_width'	=>'150',
			'img_height'=>'30',
			'expiration'=>7200
		];

		$cap = create_captcha($options);
		$image = $cap['image'];

		$this->session->set_userdata('captchaword', $cap['word']);

		return $image;
	}

	function check_captcha()
	{
		if($this->input->post('captcha')==$this->session->userdata('captchaword')){
			return true;
		}else{
			$this->form_validation->set_message('check_captcha', 'Kode Captcha Salah!!!');
			return false;
		}
	}

	public function index()
	{
		// UMUM
		cek_sudah_masuk();
		$data['pengaturan'] = $this->admin->pengaturan();

		// KHUSUS
		$this->form_validation->set_rules('captcha', 'Captcha','trim|callback_check_captcha|required');

		if($this->form_validation->run()==false){
			$data['judul'] = "Masuk";
			$data['img'] = $this->create_captcha();
			$this->template->load('auth/template', 'auth/masuk', $data);
		}else{
			$this->proses();
		}
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['masuk'])){
			$query_masuk = $this->pengguna->masuk($post);
			if($query_masuk->num_rows() > 0){
				$row = $query_masuk->row_array();
				$username = $row['username'];
				if($row['status_pengguna']=="Aktif"){
					$this->session->set_userdata('username', $username);
					$this->session->set_flashdata('info', '<div class="callout callout-success">
	                																	<h4><i class="icon fa fa-check"></i> Anda Berhasil Masuk!</h4>
																		                <p>Selamat datang <strong>'.$row['nama_lengkap'].'</strong>. Kami senang melihat Anda kembali.</p>
																		              </div>');
					redirect(base_url());
				}else{
					$this->session->set_flashdata('info', '<div class="callout callout-danger">
	                																	<h4><i class="icon fa fa-ban"></i> Gagal Masuk!</h4>
																		                <p>Akun Anda (<strong>'.$username.'</strong>) belum aktif. Silahkan hubungi Administator untuk aktivasi akun Anda.</p>
																		              </div>');
					redirect('masuk');
				}
			}else{
				$this->session->set_flashdata('info', '<div class="callout callout-danger">
                																	<h4><i class="icon fa fa-ban"></i> Gagal Masuk!</h4>
																	                <p>Nama Pengguna / Kata Sandi salah!</p>
																	              </div>');
				redirect('masuk');
			}
		}else if(isset($post['daftar'])){
			echo "proses daftar";
		} else {
			echo "tidak ada post";
		}
	}

	public function daftar()
	{
		// KHUSUS
		cek_sudah_masuk();
		$data['pengaturan'] = $this->admin->pengaturan();
		$data['judul'] = "Daftar";
		$this->template->load('auth/template', 'auth/daftar', $data);
	}

	public function lupa_sandi()
	{
		// KHUSUS
		cek_sudah_masuk();
		$data['pengaturan'] = $this->admin->pengaturan();
		$data['judul'] = "Lupa Kata Sandi";
		$this->template->load('auth/template', 'auth/lupa_sandi', $data);
	}

	public function keluar()
	{
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('info', '<div class="callout callout-success">
	          																	<h4><i class="icon fa fa-check"></i> Anda Telah Keluar!</h4>
															                <p>Sampai jumpa lagi di lain hari.</p>
															              </div>');
		redirect(base_url());
	}
}
