<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simda_m extends CI_Model {

	public function urusan($mak=null)
	{
		$this->db->select('*');
		$this->db->from('simda');
		if($mak!=null){
			$this->db->where('mak', $mak);
		}
		return $this->db->get();
	}

	public function skpd($mak=null)
	{
		$this->db->select('*');
		$this->db->from('simda_skpd');
		if($mak!=null){
			$this->db->where('mak', $mak);
		}
		return $this->db->get();
	}

}