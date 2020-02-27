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
		$this->db->where('status_aktif', 'ya');
		$this->db->where('status_umumkan', 'sudah');
		$this->db->order_by('id_satker', 'asc');
		return $this->db->get();
	}

	public function paket_penyedia_skpd($kode_satker_asli=null)
	{
		$this->db->select('*');
		$this->db->from('penyedia');
		if($kode_satker_asli!=null){
			$this->db->where('kode_satker_asli', $kode_satker_asli);
		}
		$this->db->where('status_aktif', 'ya');
		$this->db->where('status_umumkan', 'sudah');
		$this->db->order_by('kode_rup', 'asc');
		return $this->db->get();
	}

	public function jp_konstruksi_skpd($kode_satker_asli=null)
	{
		$this->db->select('*');
		$this->db->from('penyedia');
		if($kode_satker_asli!=null){
			$this->db->where('kode_satker_asli', $kode_satker_asli);
		}
		$this->db->where('jenis_pengadaan', 'Pekerjaan Konstruksi');
		$this->db->where('status_aktif', 'ya');
		$this->db->where('status_umumkan', 'sudah');
		$this->db->order_by('kode_rup', 'asc');
		return $this->db->get();
	}

	public function jp_konsultansi_skpd($kode_satker_asli=null)
	{
		$this->db->select('*');
		$this->db->from('penyedia');
		if($kode_satker_asli!=null){
			$this->db->where('kode_satker_asli', $kode_satker_asli);
		}
		$this->db->where('jenis_pengadaan', 'Jasa Konsultansi');
		$this->db->where('status_aktif', 'ya');
		$this->db->where('status_umumkan', 'sudah');
		$this->db->order_by('kode_rup', 'asc');
		return $this->db->get();
	}

	public function jp_barang_skpd($kode_satker_asli=null)
	{
		$this->db->select('*');
		$this->db->from('penyedia');
		if($kode_satker_asli!=null){
			$this->db->where('kode_satker_asli', $kode_satker_asli);
		}
		$this->db->where('jenis_pengadaan', 'Barang');
		$this->db->where('status_aktif', 'ya');
		$this->db->where('status_umumkan', 'sudah');
		$this->db->order_by('kode_rup', 'asc');
		return $this->db->get();
	}

	public function jp_jasa_skpd($kode_satker_asli=null)
	{
		$this->db->select('*');
		$this->db->from('penyedia');
		if($kode_satker_asli!=null){
			$this->db->where('kode_satker_asli', $kode_satker_asli);
		}
		$this->db->where('jenis_pengadaan', 'Jasa Lainnya');
		$this->db->where('status_aktif', 'ya');
		$this->db->where('status_umumkan', 'sudah');
		$this->db->order_by('kode_rup', 'asc');
		return $this->db->get();
	}

	public function mp_dikecualikan_skpd($kode_satker_asli=null)
	{
		$this->db->select('*');
		$this->db->from('penyedia');
		if($kode_satker_asli!=null){
			$this->db->where('kode_satker_asli', $kode_satker_asli);
		}
		$this->db->where('metode_pemilihan', 'Dikecualikan');
		$this->db->where('status_aktif', 'ya');
		$this->db->where('status_umumkan', 'sudah');
		$this->db->order_by('kode_rup', 'asc');
		return $this->db->get();
	}

	public function mp_purchasing_skpd($kode_satker_asli=null)
	{
		$this->db->select('*');
		$this->db->from('penyedia');
		if($kode_satker_asli!=null){
			$this->db->where('kode_satker_asli', $kode_satker_asli);
		}
		$this->db->where('metode_pemilihan', 'e-Purchasing');
		$this->db->where('status_aktif', 'ya');
		$this->db->where('status_umumkan', 'sudah');
		$this->db->order_by('kode_rup', 'asc');
		return $this->db->get();
	}

	public function mp_pl_skpd($kode_satker_asli=null)
	{
		$this->db->select('*');
		$this->db->from('penyedia');
		if($kode_satker_asli!=null){
			$this->db->where('kode_satker_asli', $kode_satker_asli);
		}
		$this->db->where('metode_pemilihan', 'Pengadaan Langsung');
		$this->db->where('status_aktif', 'ya');
		$this->db->where('status_umumkan', 'sudah');
		$this->db->order_by('kode_rup', 'asc');
		return $this->db->get();
	}

	public function mp_pl2_skpd($kode_satker_asli=null)
	{
		$this->db->select('*');
		$this->db->from('penyedia');
		if($kode_satker_asli!=null){
			$this->db->where('kode_satker_asli', $kode_satker_asli);
		}
		$this->db->where('metode_pemilihan', 'Penunjukan Langsung');
		$this->db->where('status_aktif', 'ya');
		$this->db->where('status_umumkan', 'sudah');
		$this->db->order_by('kode_rup', 'asc');
		return $this->db->get();
	}

	public function mp_seleksi_skpd($kode_satker_asli=null)
	{
		$this->db->select('*');
		$this->db->from('penyedia');
		if($kode_satker_asli!=null){
			$this->db->where('kode_satker_asli', $kode_satker_asli);
		}
		$this->db->where('metode_pemilihan', 'Seleksi');
		$this->db->where('status_aktif', 'ya');
		$this->db->where('status_umumkan', 'sudah');
		$this->db->order_by('kode_rup', 'asc');
		return $this->db->get();
	}

	public function mp_tender_skpd($kode_satker_asli=null)
	{
		$this->db->select('*');
		$this->db->from('penyedia');
		if($kode_satker_asli!=null){
			$this->db->where('kode_satker_asli', $kode_satker_asli);
		}
		$this->db->where('metode_pemilihan', 'Tender');
		$this->db->where('status_aktif', 'ya');
		$this->db->where('status_umumkan', 'sudah');
		$this->db->order_by('kode_rup', 'asc');
		return $this->db->get();
	}

	public function mp_tc_skpd($kode_satker_asli=null)
	{
		$this->db->select('*');
		$this->db->from('penyedia');
		if($kode_satker_asli!=null){
			$this->db->where('kode_satker_asli', $kode_satker_asli);
		}
		$this->db->where('metode_pemilihan', 'Tender Cepat');
		$this->db->where('status_aktif', 'ya');
		$this->db->where('status_umumkan', 'sudah');
		$this->db->order_by('kode_rup', 'asc');
		return $this->db->get();
	}

	public function swakelola($kode_rup=null)
	{
		$this->db->select('*');
		$this->db->from('swakelola');
		if($kode_rup!=null){
			$this->db->where('kode_rup', $kode_rup);
		}
		$this->db->where('status_aktif', 'ya');
		$this->db->where('status_umumkan', 'sudah');
		$this->db->order_by('id_satker', 'asc');
		return $this->db->get();
	}

	public function paket_swakelola_skpd($kode_satker_asli=null)
	{
		$this->db->select('*');
		$this->db->from('swakelola');
		if($kode_satker_asli!=null){
			$this->db->where('kode_satker_asli', $kode_satker_asli);
		}
		$this->db->where('status_aktif', 'ya');
		$this->db->where('status_umumkan', 'sudah');
		$this->db->order_by('kode_rup', 'asc');
		return $this->db->get();
	}

	public function swakelola1_skpd($kode_satker_asli=null)
	{
		$this->db->select('*');
		$this->db->from('swakelola');
		if($kode_satker_asli!=null){
			$this->db->where('kode_satker_asli', $kode_satker_asli);
		}
		$this->db->where('tipe_swakelola', 1);
		$this->db->where('status_aktif', 'ya');
		$this->db->where('status_umumkan', 'sudah');
		$this->db->order_by('kode_rup', 'asc');
		return $this->db->get();
	}

	public function swakelola2_skpd($kode_satker_asli=null)
	{
		$this->db->select('*');
		$this->db->from('swakelola');
		if($kode_satker_asli!=null){
			$this->db->where('kode_satker_asli', $kode_satker_asli);
		}
		$this->db->where('tipe_swakelola', 2);
		$this->db->where('status_aktif', 'ya');
		$this->db->where('status_umumkan', 'sudah');
		$this->db->order_by('kode_rup', 'asc');
		return $this->db->get();
	}

	public function swakelola3_skpd($kode_satker_asli=null)
	{
		$this->db->select('*');
		$this->db->from('swakelola');
		if($kode_satker_asli!=null){
			$this->db->where('kode_satker_asli', $kode_satker_asli);
		}
		$this->db->where('tipe_swakelola', 3);
		$this->db->where('status_aktif', 'ya');
		$this->db->where('status_umumkan', 'sudah');
		$this->db->order_by('kode_rup', 'asc');
		return $this->db->get();
	}

	public function swakelola4_skpd($kode_satker_asli=null)
	{
		$this->db->select('*');
		$this->db->from('swakelola');
		if($kode_satker_asli!=null){
			$this->db->where('kode_satker_asli', $kode_satker_asli);
		}
		$this->db->where('tipe_swakelola', 4);
		$this->db->where('status_aktif', 'ya');
		$this->db->where('status_umumkan', 'sudah');
		$this->db->order_by('kode_rup', 'asc');
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

	public function apbd_penyedia($nama_apbd_penyedia=null)
	{
		$this->db->select('*');
		$this->db->from('apbd_penyedia');
		if($nama_apbd_penyedia!=null){
			$this->db->where('nama_apbd_penyedia', $nama_apbd_penyedia);
		}
		return $this->db->get();
	}

	public function apbn_penyedia($nama_apbn_penyedia=null)
	{
		$this->db->select('*');
		$this->db->from('apbn_penyedia');
		if($nama_apbn_penyedia!=null){
			$this->db->where('nama_apbn_penyedia', $nama_apbn_penyedia);
		}
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

	public function apbd_swakelola($nama_apbd_swakelola=null)
	{
		$this->db->select('*');
		$this->db->from('apbd_swakelola');
		if($nama_apbd_swakelola!=null){
			$this->db->where('nama_apbd_swakelola', $nama_apbd_swakelola);
		}
		return $this->db->get();
	}

	public function apbn_swakelola($nama_apbn_swakelola=null)
	{
		$this->db->select('*');
		$this->db->from('apbn_swakelola');
		if($nama_apbn_swakelola!=null){
			$this->db->where('nama_apbn_swakelola', $nama_apbn_swakelola);
		}
		return $this->db->get();
	}

}