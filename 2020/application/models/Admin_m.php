<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_m extends CI_Model {

	public function update_data_terakhir()
	{
		$this->db->select('*');
		$this->db->from('update_data_terakhir');
		$this->db->join('pengguna', 'pengguna.username=update_data_terakhir.username');
		$this->db->order_by('id_udt', 'desc');
		$this->db->limit(5);
		return $this->db->get();
	}

	public function pengaturan()
	{
		$this->db->select('*');
		$this->db->from('pengaturan');
		$this->db->where('id', 'atur');
		return $this->db->get()->row_array();
	}

}