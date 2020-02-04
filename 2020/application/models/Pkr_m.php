<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pkr_m extends CI_Model {

	public function bj($id_pkr_bj=null)
	{
		$this->db->select('*');
		$this->db->from('pkr_bj');
		if($id_pkr_bj!=null){
			$this->db->where('id_pkr_bj', $id_pkr_bj);
		}
		return $this->db->get();
	}

	public function bj_nilai($id_pkr_bj)
	{
		$this->db->select('*');
		$this->db->from('pkr_bj_nilai');
		$this->db->join('pkr_bj', 'pkr_bj.id_pkr_bj=pkr_bj_nilai.id_pkr_bj');
		$this->db->where('pkr_bj_nilai.id_pkr_bj', $id_pkr_bj);
		return $this->db->get();
	}

}