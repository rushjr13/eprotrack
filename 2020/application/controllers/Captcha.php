<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Captcha extends CI_Controller {

	function create_captcha()
	{
		$options = [
			'img_path'	=>base_url('uploads/captcha'),
			'img_url'		=>base_url('captcha'),
			'img_width'	=>150,
			'img_height'=>30,
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

	function index()
	{
		$this->form_validation->set_rules('captcha', 'Captcha','trim|callback_check_captcha|required');

		if($this->form_validation->run()==false){
			$data['judul'] = "Masuk";
			$data['img'] = $this->create_captcha();
			$this->template->load('auth/template', 'auth/masuk', $data);
		}else{
			echo "Success";
		}
	}

}
