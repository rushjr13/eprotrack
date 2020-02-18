<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rup_m extends CI_Model {

	public function penyedia($kode_rup=null)
	{
		$this->db->select('*');
		$this->db->from('penyedia');
		if($kode_rup!=null){
			$this->db->where('kode_rup', $kode_rup);
		}
		$this->db->order_by('status_aktif', 'desc');
		$this->db->order_by('status_umumkan', 'desc');
		$this->db->order_by('id_satker', 'asc');
		return $this->db->get();
	}

	public function swakelola($kode_rup=null)
	{
		$this->db->select('*');
		$this->db->from('swakelola');
		if($kode_rup!=null){
			$this->db->where('kode_rup', $kode_rup);
		}
		$this->db->order_by('status_aktif', 'desc');
		$this->db->order_by('status_umumkan', 'desc');
		$this->db->order_by('id_satker', 'asc');
		return $this->db->get();
	}

	public function satker($kode_satker_asli=null)
	{
		$this->db->select('*');
		$this->db->from('satker');
		if($kode_satker_asli!=null){
			$this->db->where('kode_satker_asli', $kode_satker_asli);
		}
		$this->db->order_by('kode_satker_asli', 'asc');
		return $this->db->get();
	}

	public function program($kode_string_program=null)
	{
		$this->db->select('*');
		$this->db->from('program');
		$this->db->join('satker', 'satker.kode_satker_asli=program.kode_satker_asli', 'left');
		if($kode_string_program!=null){
			$this->db->where('kode_string_program', $kode_string_program);
		}
		$this->db->order_by('program.kode_satker_asli', 'asc');
		$this->db->order_by('program.kode_string_program', 'asc');
		return $this->db->get();
	}

	public function kegiatan($kode_string_kegiatan=null)
	{
		$this->db->select('*');
		$this->db->from('kegiatan');
		$this->db->join('satker', 'satker.kode_satker_asli=kegiatan.kode_satker_asli', 'left');
		$this->db->join('program', 'program.kode_string_program=kegiatan.kode_string_program', 'left');
		if($kode_string_kegiatan!=null){
			$this->db->where('kode_string_kegiatan', $kode_string_kegiatan);
		}
		$this->db->order_by('kegiatan.kode_satker_asli', 'asc');
		$this->db->order_by('kegiatan.kode_string_program', 'asc');
		$this->db->order_by('kegiatan.kode_string_kegiatan', 'asc');
		return $this->db->get();
	}

	public function jenis_pengadaan($nama_jp=null)
	{
		$this->db->select('*');
		$this->db->from('jenis_pengadaan');
		if($nama_jp!=null){
			$this->db->where('nama_jp', $nama_jp);
		}
		$this->db->order_by('nama_jp', 'asc');
		return $this->db->get();
	}

	public function metode_pemilihan($nama_mp=null)
	{
		$this->db->select('*');
		$this->db->from('metode_pemilihan');
		if($nama_mp!=null){
			$this->db->where('nama_mp', $nama_mp);
		}
		$this->db->order_by('nama_mp', 'asc');
		return $this->db->get();
	}

	public function sb_penyedia($sb=null)
	{
		$this->db->select('*');
		$this->db->from('penyedia');
		if($sb!=null){
			$this->db->where('sumber_dana', $sb);
		}
		$this->db->order_by('id_satker', 'asc');
		$this->db->order_by('status_aktif', 'desc');
		$this->db->order_by('status_umumkan', 'desc');
		return $this->db->get();
	}

	public function sb_swakelola($sb=null)
	{
		$this->db->select('*');
		$this->db->from('swakelola');
		if($sb!=null){
			$this->db->where('sumber_dana', $sb);
		}
		$this->db->order_by('id_satker', 'asc');
		$this->db->order_by('status_aktif', 'desc');
		$this->db->order_by('status_umumkan', 'desc');
		return $this->db->get();
	}

}