<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
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
		$data['penyedia'] = $this->rup->penyedia();
		$data['swakelola'] = $this->rup->swakelola();
		$data['program'] = $this->rup->program();
		$data['kegiatan'] = $this->rup->kegiatan();

		$anggaran_penyedia = 0;
		$anggaran_swakelola = 0;
		// PENYEDIA
		foreach ($data['penyedia']->result_array() as $py) {
			$anggaran_penyedia = $anggaran_penyedia+$py['pagu_rup'];
		}
		// SWAKELOLA
		foreach ($data['swakelola']->result_array() as $swk) {
			$anggaran_swakelola = $anggaran_swakelola+$swk['pagu_rup'];
		}
		$data['total_anggaran'] = $anggaran_penyedia+$anggaran_swakelola;

		// APBD
		// PENYEDIA
		$apbd_penyedia1 = $this->rup->sb_penyedia('APBD')->result_array();
		$adp_1 = 0;
		foreach ($apbd_penyedia1 as $adp1) {
			$adp_1 = $adp_1+$adp1['pagu_rup'];
		}
		$apbd_penyedia2 = $this->rup->sb_penyedia('APBD,APBD')->result_array();
		$adp_2 = 0;
		foreach ($apbd_penyedia2 as $adp2) {
			$adp_2 = $adp_2+$adp2['pagu_rup'];
		}
		$apbd_penyedia3 = $this->rup->sb_penyedia('APBD,APBD,APBD')->result_array();
		$adp_3 = 0;
		foreach ($apbd_penyedia3 as $adp3) {
			$adp_3 = $adp_3+$adp3['pagu_rup'];
		}
		$apbd_penyedia4 = $this->rup->sb_penyedia('APBD,APBD,APBD,APBD')->result_array();
		$adp_4 = 0;
		foreach ($apbd_penyedia4 as $adp4) {
			$adp_4 = $adp_4+$adp4['pagu_rup'];
		}
		$apbd_penyedia5 = $this->rup->sb_penyedia('APBD,APBD,APBD,APBD,APBD')->result_array();
		$adp_5 = 0;
		foreach ($apbd_penyedia5 as $adp5) {
			$adp_5 = $adp_5+$adp5['pagu_rup'];
		}
		$apbd_penyedia6 = $this->rup->sb_penyedia('APBD,APBD,APBD,APBD,APBD,APBD')->result_array();
		$adp_6 = 0;
		foreach ($apbd_penyedia6 as $adp6) {
			$adp_6 = $adp_6+$adp6['pagu_rup'];
		}
		$apbd_penyedia7 = $this->rup->sb_penyedia('APBD,APBD,APBD,APBD,APBD,APBD,APBD')->result_array();
		$adp_7 = 0;
		foreach ($apbd_penyedia7 as $adp7) {
			$adp_7 = $adp_7+$adp7['pagu_rup'];
		}
		$pagu_apbd_penyedia = $adp_1+$adp_2+$adp_3+$adp_4+$adp_5+$adp_6+$adp_7;

		// SWAKELOLA
		$apbd_swakelola1 = $this->rup->sb_swakelola('APBD')->result_array();
		$ads_1 = 0;
		foreach ($apbd_swakelola1 as $ads1) {
			$ads_1 = $ads_1+$ads1['pagu_rup'];
		}
		$apbd_swakelola2 = $this->rup->sb_swakelola('APBD,APBD')->result_array();
		$ads_2 = 0;
		foreach ($apbd_swakelola2 as $ads2) {
			$ads_2 = $ads_2+$ads2['pagu_rup'];
		}
		$apbd_swakelola3 = $this->rup->sb_swakelola('APBD,APBD,APBD')->result_array();
		$ads_3 = 0;
		foreach ($apbd_swakelola3 as $ads3) {
			$ads_3 = $ads_3+$ads3['pagu_rup'];
		}
		$apbd_swakelolap = $this->rup->sb_swakelola('APBDP')->result_array();
		$ads_p = 0;
		foreach ($apbd_swakelolap as $adsp) {
			$ads_p = $ads_p+$adsp['pagu_rup'];
		}
		$pagu_apbd_swakelola = $ads_1+$ads_2+$ads_3+$ads_p;

		// APBN
		// PENYEDIA
		$apbn_penyedia1 = $this->rup->sb_penyedia('APBN')->result_array();
		$anp_1 = 0;
		foreach ($apbn_penyedia1 as $anp1) {
			$anp_1 = $anp_1+$anp1['pagu_rup'];
		}
		$apbn_penyedia2 = $this->rup->sb_penyedia('APBN,APBN')->result_array();
		$anp_2 = 0;
		foreach ($apbn_penyedia2 as $anp2) {
			$anp_2 = $anp_2+$anp2['pagu_rup'];
		}
		$pagu_apbn_penyedia = $anp_1+$anp_2;

		// SWAKELOLA
		$apbn_swakelola = $this->rup->sb_swakelola('APBN')->result_array();
		$ans = 0;
		foreach ($apbn_swakelola as $anss) {
			$ans = $ans+$anss['pagu_rup'];
		}
		$pagu_apbn_swakelola = $ans;

		$data['apbd'] = $pagu_apbd_penyedia+$pagu_apbd_swakelola;
		$data['apbn'] = $pagu_apbn_penyedia+$pagu_apbn_swakelola;

		// BELANJA
		$simda_skpd = $this->simda->skpd()->result_array();
		$belanja_pegawai = 0;
		$belanja_barang_jasa = 0;
		$belanja_modal = 0;
		foreach ($simda_skpd as $skpd) {
			$belanja_pegawai = $belanja_pegawai+$skpd['pegawai'];
			$belanja_barang_jasa = $belanja_barang_jasa+$skpd['barang_jasa'];
			$belanja_modal = $belanja_modal+$skpd['modal'];
		}
		$data['belanja_pegawai'] = $belanja_pegawai;
		$data['belanja_barang_jasa'] = $belanja_barang_jasa;
		$data['belanja_modal'] = $belanja_modal;

		// SATKER
		$data['satker'] = $this->rup->satker();

		// RPP
		$data['jp'] = $this->rup->jenis_pengadaan()->result_array();
		$data['mp'] = $this->rup->metode_pemilihan()->result_array();
		$data['tender'] = 0;
		$data['tender_cepat'] = 0;
		$data['seleksi'] = 0;
		$data['e_purchasing'] = 0;
		$data['penunjukan_langsung'] = 0;
		$data['pengadaan_langsung'] = 0;
		$data['swakelola_1'] = 0;
		$data['swakelola_2'] = 0;
		$data['swakelola_3'] = 0;
		$data['swakelola_4'] = 0;
		$data['dikecualikan'] = 0;
		$data['judul'] = "Beranda";
		$data['subjudul'] = "e-Protrack+";
		$this->template->load('template', 'beranda', $data);
	}

	public function proses($paket)
	{
		if($paket=='penyedia'){
			$this->db->empty_table('sb_penyedia');
			$penyedia = $this->rup->penyedia()->result_array();
			foreach ($penyedia as $py) {
				switch ($py['sumber_dana']) {
					case null:
						$sumber_dana = '-';
						break;
					
					default:
						$sumber_dana = $py['sumber_dana'];
						break;
				}
				$sb_penyedia = $this->db->get_where('sb_penyedia', ['sumber_dana'=>$sumber_dana])->row_array();
				if(!$sb_penyedia){
					$data = [
						'kode_rup'=>$py['kode_rup'],
						'sumber_dana'=>$sumber_dana,
					];
					$this->db->insert('sb_penyedia', $data);
				}else{
					$data = [
						'kode_rup'=>$py['kode_rup'],
					];
					$this->db->set($data);
					$this->db->where('sumber_dana', $sumber_dana);
					$this->db->update('sb_penyedia');
				}
			}
			redirect(base_url());
		}else if($paket=='swakelola'){
			$this->db->empty_table('sb_swakelola');
			$swakelola = $this->rup->swakelola()->result_array();
			foreach ($swakelola as $swk) {
				switch ($swk['sumber_dana']) {
					case null:
						$sumber_dana = '-';
						break;
					
					default:
						$sumber_dana = $swk['sumber_dana'];
						break;
				}
				$sb_swakelola = $this->db->get_where('sb_swakelola', ['sumber_dana'=>$sumber_dana])->row_array();
				if(!$sb_swakelola){
					$data = [
						'kode_rup'=>$swk['kode_rup'],
						'sumber_dana'=>$sumber_dana,
					];
					$this->db->insert('sb_swakelola', $data);
				}else{
					$data = [
						'kode_rup'=>$swk['kode_rup'],
					];
					$this->db->set($data);
					$this->db->where('sumber_dana', $sumber_dana);
					$this->db->update('sb_swakelola');
				}
			}
			redirect(base_url());
		}
	}

	public function jp($id, $jenis_pengadaan)
	{
		if($jenis_pengadaan=="semua"){
			$data['jenis_pengadaan'] = $this->rup->paket_penyedia_skpd($id)->result_array();
		}else if($jenis_pengadaan=="konstruksi"){
	    $data['jenis_pengadaan'] = $this->rup->jp_konstruksi_skpd($id)->result_array();
		}else if($jenis_pengadaan=="konsultansi"){
	    $data['jenis_pengadaan'] = $this->rup->jp_konsultansi_skpd($id)->result_array();
		}else if($jenis_pengadaan=="barang"){
	    $data['jenis_pengadaan'] = $this->rup->jp_barang_skpd($id)->result_array();
		}else if($jenis_pengadaan=="jasa"){
	    $data['jenis_pengadaan'] = $this->rup->jp_jasa_skpd($id)->result_array();
		}
		switch ($jenis_pengadaan) {
			case 'semua':
				$data['judul'] = "Semua Paket";
				break;
			case 'konstruksi':
				$data['judul'] = "Pekerjaan Konstruksi";
				break;
			case 'konsultansi':
				$data['judul'] = "Jasa Konsultansi";
				break;
			case 'barang':
				$data['judul'] = "Pengadaan Barang";
				break;
			case 'jasa':
				$data['judul'] = "Pengadaan Jasa Lainnya";
				break;
			
			default:
				$data['judul'] = $jenis_pengadaan;
				break;
		}
		$data['pengaturan'] = $this->admin->pengaturan();
		$data['subjudul'] = $this->rup->satker($id)->row_array()['nama_satker'];
		$this->template->load('beranda/template', 'beranda/jp', $data);
	}

	public function mp($id, $metode_pemilihan)
	{
		if($metode_pemilihan=="semuapenyedia"){
			$data['metode_pemilihan'] = $this->rup->paket_penyedia_skpd($id)->result_array();
		}else if($metode_pemilihan=="semuaswakelola"){
	    $data['metode_pemilihan'] = $this->rup->paket_swakelola_skpd($id)->result_array();
		}else if($metode_pemilihan=="dikecualikan"){
	    $data['metode_pemilihan'] = $this->rup->mp_dikecualikan_skpd($id)->result_array();
		}else if($metode_pemilihan=="purchasing"){
	    $data['metode_pemilihan'] = $this->rup->mp_purchasing_skpd($id)->result_array();
		}else if($metode_pemilihan=="pl"){
	    $data['metode_pemilihan'] = $this->rup->mp_pl_skpd($id)->result_array();
		}else if($metode_pemilihan=="pl2"){
	    $data['metode_pemilihan'] = $this->rup->mp_pl2_skpd($id)->result_array();
		}else if($metode_pemilihan=="seleksi"){
	    $data['metode_pemilihan'] = $this->rup->mp_seleksi_skpd($id)->result_array();
		}else if($metode_pemilihan=="tender"){
	    $data['metode_pemilihan'] = $this->rup->mp_tender_skpd($id)->result_array();
		}else if($metode_pemilihan=="tc"){
	    $data['metode_pemilihan'] = $this->rup->mp_tc_skpd($id)->result_array();
		}else if($metode_pemilihan=="swakelola1"){
	    $data['metode_pemilihan'] = $this->rup->swakelola1_skpd($id)->result_array();
		}else if($metode_pemilihan=="swakelola2"){
	    $data['metode_pemilihan'] = $this->rup->swakelola2_skpd($id)->result_array();
		}else if($metode_pemilihan=="swakelola3"){
	    $data['metode_pemilihan'] = $this->rup->swakelola3_skpd($id)->result_array();
		}else if($metode_pemilihan=="swakelola4"){
	    $data['metode_pemilihan'] = $this->rup->swakelola4_skpd($id)->result_array();
		}
		switch ($metode_pemilihan) {
			case 'semuapenyedia':
				$data['judul'] = "Semua Paket Penyedia";
				$data['paket'] = "penyedia";
				break;
			case 'semuaswakelola':
				$data['judul'] = "Semua Paket Swakelola";
				$data['paket'] = "swakelola";
				break;
			case 'dikecualikan':
				$data['judul'] = "Paket Dikecualikan";
				$data['paket'] = "penyedia";
				break;
			case 'purchasing':
				$data['judul'] = "Paket e-Purchasing";
				$data['paket'] = "penyedia";
				break;
			case 'pl':
				$data['judul'] = "Paket Penunjukan Langsung";
				$data['paket'] = "penyedia";
				break;
			case 'pl2':
				$data['judul'] = "Paket Pengadaan Langsung";
				$data['paket'] = "penyedia";
				break;
			case 'seleksi':
				$data['judul'] = "Paket Seleksi";
				$data['paket'] = "penyedia";
				break;
			case 'tender':
				$data['judul'] = "Paket Tender";
				$data['paket'] = "penyedia";
				break;
			case 'tc':
				$data['judul'] = "Paket Tender Cepat";
				$data['paket'] = "penyedia";
				break;
			case 'swakelola1':
				$data['judul'] = "Paket Swakelola Tipe 1";
				$data['paket'] = "swakelola";
				break;
			case 'swakelola2':
				$data['judul'] = "Paket Swakelola Tipe 2";
				$data['paket'] = "swakelola";
				break;
			case 'swakelola3':
				$data['judul'] = "Paket Swakelola Tipe 3";
				$data['paket'] = "swakelola";
				break;
			case 'swakelola4':
				$data['judul'] = "Paket Swakelola Tipe 4";
				$data['paket'] = "swakelola";
				break;
			
			default:
				$data['judul'] = $metode_pemilihan;
				break;
		}
		$data['pengaturan'] = $this->admin->pengaturan();
		$data['subjudul'] = $this->rup->satker($id)->row_array()['nama_satker'];
		$this->template->load('beranda/template', 'beranda/mp', $data);
	}

}
