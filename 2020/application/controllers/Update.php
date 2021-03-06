<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

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
		$data['subjudul'] = "Update Data";
		$data['update_data_terakhir'] = $this->admin->update_data_terakhir()->result_array();
		$this->template->load('template', 'update/index', $data);
	}

	public function penyedia()
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
		$data['subjudul'] = "Update Data RUP Penyedia";

		$rup = rup($data['pengaturan']['jaringan']);
		$data['json'] = $rup['penyedia'];
		$data['db'] = $this->rup->penyedia();
		$this->template->load('template', 'update/penyedia', $data);
	}

	public function penyedia_proses()
	{
		$pengaturan = $this->admin->pengaturan();
		$rup = rup($pengaturan['jaringan']);
		$penyedia = $rup['penyedia'];

		// MENGOSONGKAN TABEL
		$this->db->empty_table('penyedia');

		// LOOPING DATA JSON DAN SIMPAN DI TABEL
		foreach ($penyedia as $py) {
			switch ($py['jenis_pengadaan']) {
				case 'Barang;Barang':
					$jenis_pengadaan = 'Barang';
					break;
				case 'Barang;Barang;Barang':
					$jenis_pengadaan = 'Barang';
					break;
				case 'Barang;Barang;Barang;Barang':
					$jenis_pengadaan = 'Barang';
					break;
				case 'Barang;Barang;Barang;Barang;Barang':
					$jenis_pengadaan = 'Barang';
					break;
				case 'Barang;Barang;Barang;Barang;Barang;Barang':
					$jenis_pengadaan = 'Barang';
					break;
				case 'Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang':
					$jenis_pengadaan = 'Barang';
					break;
				case 'Barang;Jasa Lainnya;Barang;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Barang;Barang;Barang;Barang;Jasa Lainnya;Jasa Lainnya;Barang;Barang;Jasa Lainnya':
					$jenis_pengadaan = 'Barang';
					break;
				case 'Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang':
					$jenis_pengadaan = 'Barang';
					break;
				case 'Barang;Barang;Barang;Barang;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Barang;Jasa Lainnya;Barang;Barang;Barang':
					$jenis_pengadaan = 'Barang';
					break;
				case 'Jasa Konsultansi;Jasa Konsultansi':
					$jenis_pengadaan = 'Jasa Konsultansi';
					break;
				case 'Jasa Lainnya;Barang;Barang;Barang;Barang;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Barang;Barang;Barang;Barang;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya':
					$jenis_pengadaan = 'Jasa Lainnya';
					break;
				case 'Jasa Lainnya;Jasa Lainnya':
					$jenis_pengadaan = 'Jasa Lainnya';
					break;
				case 'Jasa Lainnya;Jasa Lainnya;Jasa Lainnya':
					$jenis_pengadaan = 'Jasa Lainnya';
					break;
				case 'Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya':
					$jenis_pengadaan = 'Jasa Lainnya';
					break;
				case 'Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya':
					$jenis_pengadaan = 'Jasa Lainnya';
					break;
				case 'Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya':
					$jenis_pengadaan = 'Jasa Lainnya';
					break;
				case 'Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya':
					$jenis_pengadaan = 'Jasa Lainnya';
					break;
				case 'Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Barang;Barang;Barang;Barang;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Barang;Barang;Barang;Barang':
					$jenis_pengadaan = 'Jasa Lainnya';
					break;
				case 'Jasa Lainnya;Barang;Barang;Barang;Barang;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Barang;Barang;Barang;Barang;Jasa Lainnya;Jasa Lainnya':
					$jenis_pengadaan = 'Jasa Lainnya';
					break;
				case 'Pekerjaan Konstruksi;Pekerjaan Konstruksi':
					$jenis_pengadaan = 'Pekerjaan Konstruksi';
					break;				
				
				default:
					$jenis_pengadaan = $py['jenis_pengadaan'];
					break;
			}

			switch ($py['sumber_dana']) {
				case 'APBD,APBD':
					$sumber_dana = 'APBD';
					break;
				case 'APBD,APBD,APBD':
					$sumber_dana = 'APBD';
					break;
				case 'APBD,APBD,APBD,APBD':
					$sumber_dana = 'APBD';
					break;
				case 'APBD,APBD,APBD,APBD,APBD':
					$sumber_dana = 'APBD';
					break;
				case 'APBD,APBD,APBD,APBD,APBD,APBD':
					$sumber_dana = 'APBD';
					break;
				case 'APBD,APBD,APBD,APBD,APBD,APBD,APBD':
					$sumber_dana = 'APBD';
					break;
				case 'APBN,APBN':
					$sumber_dana = 'APBN';
					break;
				
				default:
					$sumber_dana = $py['sumber_dana'];
					break;
			}
			$data = [
				'kode_rup'=>$py['kode_rup'],
				'kode_kldi'=>$py['kode_kldi'],
				'kldi'=>$py['kldi'],
				'jenis'=>$py['jenis'],
				'id_satker'=>$py['id_satker'],
				'kode_satker_asli'=>$py['kode_satker_asli'],
				'nama_satker'=>$py['nama_satker'],
				'kode_string_program'=>$py['kode_string_program'],
				'program'=>$py['program'],
				'kode_string_kegiatan'=>$py['kode_string_kegiatan'],
				'kegiatan'=>$py['kegiatan'],
				'mak'=>$py['mak'],
				'nama_paket'=>$py['nama_paket'],
				'volume'=>$py['volume'],
				'pagu_rup'=>$py['pagu_rup'],
				'lokasi'=>$py['lokasi'],
				'detail_lokasi'=>$py['detail_lokasi'],
				'sumber_dana'=>$sumber_dana,
				'metode_pemilihan'=>$py['metode_pemilihan'],
				'jenis_pengadaan'=>$jenis_pengadaan,
				'pagu_perjenis_pengadaan'=>$py['pagu_perjenis_pengadaan'],
				'spesifikasi'=>$py['spesifikasi'],
				'deskripsi'=>$py['deskripsi'],
				'awal_pengadaan'=>$py['awal_pengadaan'],
				'akhir_pengadaan'=>$py['akhir_pengadaan'],
				'awal_pekerjaan'=>$py['awal_pekerjaan'],
				'akhir_pekerjaan'=>$py['akhir_pekerjaan'],
				'tanggal_kebutuhan'=>$py['tanggal_kebutuhan'],
				'nama_kpa'=>$py['nama_kpa'],
				'nip_kpa'=>$py['nip_kpa'],
				'nama_ppk'=>$py['nama_ppk'],
				'nip_ppk'=>$py['nip_ppk'],
				'id_swakelola'=>$py['id_swakelola'],
				'penyedia_didalam_swakelola'=>$py['penyedia_didalam_swakelola'],
				'id_client'=>$py['id_client'],
				'tkdn'=>$py['tkdn'],
				'pradipa'=>$py['pradipa'],
				'umkm'=>$py['umkm'],
				'status_aktif'=>$py['status_aktif'],
				'status_umumkan'=>$py['status_umumkan'],
				'tanggal_terakhir_di_update'=>$py['tanggal_terakhir_di_update'],
			];
			$this->db->insert('penyedia', $data);
		}
		$data_udt = [
			'id_udt'=>time(),
			'keterangan'=>'Pembaruan data Paket Penyedia',
			'username'=>$this->session->userdata('username')
		];
		$this->db->insert('update_data_terakhir', $data_udt);
		$this->session->set_flashdata('info', '<div class="callout callout-success">
													<h4><i class="icon fa fa-check"></i> Proses Berhasil!</h4>
								                <p>Database telah diperbarui</p>
								              </div>');
		redirect('update/penyedia');
	}

	public function swakelola()
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
		$data['subjudul'] = "Update Data RUP Swakelola";

		$rup = rup($data['pengaturan']['jaringan']);
		$data['json'] = $rup['swakelola'];
		$data['db'] = $this->rup->swakelola();
		$this->template->load('template', 'update/swakelola', $data);
	}

	public function swakelola_proses()
	{
		$pengaturan = $this->admin->pengaturan();
		$rup = rup($pengaturan['jaringan']);
		$swakelola = $rup['swakelola'];

		// MENGOSONGKAN TABEL
		$this->db->empty_table('swakelola');

		// LOOPING DATA JSON DAN SIMPAN DI TABEL
		foreach ($swakelola as $swk) {
			switch ($swk['sumber_dana']) {
				case 'APBD,APBD':
					$sumber_dana = 'APBD';
					break;
				case 'APBD,APBD,APBD':
					$sumber_dana = 'APBD';
					break;
				
				default:
					$sumber_dana = $swk['sumber_dana'];
					break;
			}
			$data = [
				'kode_rup'=>$swk['kode_rup'],
				'kode_kldi'=>$swk['kode_kldi'],
				'kldi'=>$swk['kldi'],
				'jenis'=>$swk['jenis'],
				'id_satker'=>$swk['id_satker'],
				'kode_satker_asli'=>$swk['kode_satker_asli'],
				'nama_satker'=>$swk['nama_satker'],
				'kode_string_program'=>$swk['kode_string_program'],
				'program'=>$swk['program'],
				'kode_string_kegiatan'=>$swk['kode_string_kegiatan'],
				'kegiatan'=>$swk['kegiatan'],
				'mak'=>$swk['mak'],
				'nama_paket'=>$swk['nama_paket'],
				'pagu_rup'=>$swk['pagu_rup'],
				'lokasi'=>$swk['lokasi'],
				'detail_lokasi'=>$swk['detail_lokasi'],
				'sumber_dana'=>$sumber_dana,
				'deskripsi'=>$swk['deskripsi'],
				'awal_pekerjaan'=>$swk['awal_pekerjaan'],
				'akhir_pekerjaan'=>$swk['akhir_pekerjaan'],
				'nama_kpa'=>$swk['nama_kpa'],
				'nip_kpa'=>$swk['nip_kpa'],
				'nama_ppk'=>$swk['nama_ppk'],
				'nip_ppk'=>$swk['nip_ppk'],
				'tipe_swakelola'=>$swk['tipe_swakelola'],
				'id_client'=>$swk['id_client'],
				'kode_kldi_penyelenggara'=>$swk['kode_kldi_penyelenggara'],
				'nama_kldi_penyelenggara'=>$swk['nama_kldi_penyelenggara'],
				'kode_satker_penyelenggara'=>$swk['kode_satker_penyelenggara'],
				'nama_satker_penyelenggara'=>$swk['nama_satker_penyelenggara'],
				'status_aktif'=>$swk['status_aktif'],
				'status_umumkan'=>$swk['status_umumkan'],
				'tanggal_terakhir_di_update'=>$swk['tanggal_terakhir_di_update'],
			];
			$this->db->insert('swakelola', $data);
		}
		$data_udt = [
			'id_udt'=>time(),
			'keterangan'=>'Pembaruan data Paket Swakelola',
			'username'=>$this->session->userdata('username')
		];
		$this->db->insert('update_data_terakhir', $data_udt);
		$this->session->set_flashdata('info', '<div class="callout callout-success">
													<h4><i class="icon fa fa-check"></i> Proses Berhasil!</h4>
								                <p>Database telah diperbarui</p>
								              </div>');
		redirect('update/swakelola');
	}

	public function tender()
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
		$data['subjudul'] = "Update Data Tender";

		$rup = rup('offline');
		$data['json'] = $rup['tender'];
		$data['db'] = $this->rup->tender();
		$this->template->load('template', 'update/tender', $data);
	}

	public function tender_proses()
	{
		$pengaturan = $this->admin->pengaturan();
		$rup = rup($pengaturan['jaringan']);
		$penyedia = $rup['penyedia'];

		// MENGOSONGKAN TABEL
		$this->db->empty_table('penyedia');

		// LOOPING DATA JSON DAN SIMPAN DI TABEL
		foreach ($penyedia as $py) {
			switch ($py['jenis_pengadaan']) {
				case 'Barang;Barang':
					$jenis_pengadaan = 'Barang';
					break;
				case 'Barang;Barang;Barang':
					$jenis_pengadaan = 'Barang';
					break;
				case 'Barang;Barang;Barang;Barang':
					$jenis_pengadaan = 'Barang';
					break;
				case 'Barang;Barang;Barang;Barang;Barang':
					$jenis_pengadaan = 'Barang';
					break;
				case 'Barang;Barang;Barang;Barang;Barang;Barang':
					$jenis_pengadaan = 'Barang';
					break;
				case 'Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang;Barang':
					$jenis_pengadaan = 'Barang';
					break;
				case 'Barang;Jasa Lainnya;Barang;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Barang;Barang;Barang;Barang;Jasa Lainnya;Jasa Lainnya;Barang;Barang;Jasa Lainnya':
					$jenis_pengadaan = 'Barang';
					break;
				case 'Jasa Konsultansi;Jasa Konsultansi':
					$jenis_pengadaan = 'Jasa Konsultansi';
					break;
				case 'Jasa Lainnya;Barang;Barang;Barang;Barang;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Barang;Barang;Barang;Barang;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya':
					$jenis_pengadaan = 'Jasa Lainnya';
					break;
				case 'Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Barang;Barang;Barang;Barang;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Barang;Barang;Barang;Barang':
					$jenis_pengadaan = 'Jasa Lainnya';
					break;
				case 'Jasa Lainnya;Jasa Lainnya':
					$jenis_pengadaan = 'Jasa Lainnya';
					break;
				case 'Jasa Lainnya;Jasa Lainnya;Jasa Lainnya':
					$jenis_pengadaan = 'Jasa Lainnya';
					break;
				case 'Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya':
					$jenis_pengadaan = 'Jasa Lainnya';
					break;
				case 'Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya':
					$jenis_pengadaan = 'Jasa Lainnya';
					break;
				case 'Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya':
					$jenis_pengadaan = 'Jasa Lainnya';
					break;
				case 'Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya;Jasa Lainnya':
					$jenis_pengadaan = 'Jasa Lainnya';
					break;
				case 'Pekerjaan Konstruksi;Pekerjaan Konstruksi':
					$jenis_pengadaan = 'Pekerjaan Konstruksi';
					break;				
				
				default:
					$jenis_pengadaan = $py['jenis_pengadaan'];
					break;
			}

			switch ($py['sumber_dana']) {
				case 'APBD,APBD':
					$sumber_dana = 'APBD';
					break;
				case 'APBD,APBD,APBD':
					$sumber_dana = 'APBD';
					break;
				case 'APBD,APBD,APBD,APBD':
					$sumber_dana = 'APBD';
					break;
				case 'APBD,APBD,APBD,APBD,APBD':
					$sumber_dana = 'APBD';
					break;
				case 'APBD,APBD,APBD,APBD,APBD,APBD':
					$sumber_dana = 'APBD';
					break;
				case 'APBD,APBD,APBD,APBD,APBD,APBD,APBD':
					$sumber_dana = 'APBD';
					break;
				case 'APBN,APBN':
					$sumber_dana = 'APBN';
					break;
				
				default:
					$sumber_dana = $py['sumber_dana'];
					break;
			}
			$data = [
				'kode_rup'=>$py['kode_rup'],
				'kode_kldi'=>$py['kode_kldi'],
				'kldi'=>$py['kldi'],
				'jenis'=>$py['jenis'],
				'id_satker'=>$py['id_satker'],
				'kode_satker_asli'=>$py['kode_satker_asli'],
				'nama_satker'=>$py['nama_satker'],
				'kode_string_program'=>$py['kode_string_program'],
				'program'=>$py['program'],
				'kode_string_kegiatan'=>$py['kode_string_kegiatan'],
				'kegiatan'=>$py['kegiatan'],
				'mak'=>$py['mak'],
				'nama_paket'=>$py['nama_paket'],
				'volume'=>$py['volume'],
				'pagu_rup'=>$py['pagu_rup'],
				'lokasi'=>$py['lokasi'],
				'detail_lokasi'=>$py['detail_lokasi'],
				'sumber_dana'=>$sumber_dana,
				'metode_pemilihan'=>$py['metode_pemilihan'],
				'jenis_pengadaan'=>$jenis_pengadaan,
				'pagu_perjenis_pengadaan'=>$py['pagu_perjenis_pengadaan'],
				'spesifikasi'=>$py['spesifikasi'],
				'deskripsi'=>$py['deskripsi'],
				'awal_pengadaan'=>$py['awal_pengadaan'],
				'akhir_pengadaan'=>$py['akhir_pengadaan'],
				'awal_pekerjaan'=>$py['awal_pekerjaan'],
				'akhir_pekerjaan'=>$py['akhir_pekerjaan'],
				'tanggal_kebutuhan'=>$py['tanggal_kebutuhan'],
				'nama_kpa'=>$py['nama_kpa'],
				'nip_kpa'=>$py['nip_kpa'],
				'nama_ppk'=>$py['nama_ppk'],
				'nip_ppk'=>$py['nip_ppk'],
				'id_swakelola'=>$py['id_swakelola'],
				'penyedia_didalam_swakelola'=>$py['penyedia_didalam_swakelola'],
				'id_client'=>$py['id_client'],
				'tkdn'=>$py['tkdn'],
				'pradipa'=>$py['pradipa'],
				'umkm'=>$py['umkm'],
				'status_aktif'=>$py['status_aktif'],
				'status_umumkan'=>$py['status_umumkan'],
				'tanggal_terakhir_di_update'=>$py['tanggal_terakhir_di_update'],
			];
			$this->db->insert('penyedia', $data);
		}
		$data_udt = [
			'id_udt'=>time(),
			'keterangan'=>'Pembaruan data Paket Penyedia',
			'username'=>$this->session->userdata('username')
		];
		$this->db->insert('update_data_terakhir', $data_udt);
		$this->session->set_flashdata('info', '<div class="callout callout-success">
													<h4><i class="icon fa fa-check"></i> Proses Berhasil!</h4>
								                <p>Database telah diperbarui</p>
								              </div>');
		redirect('update/penyedia');
	}

	public function satker()
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
		$data['subjudul'] = "Update Data Satuan Kerja";

		$data['satker'] = $this->rup->satker();
		$this->template->load('template', 'update/satker', $data);
	}

	public function satker_proses()
	{
		$data['pengaturan'] = $this->admin->pengaturan();
		$penyedia = $this->rup->penyedia()->result_array();
		$swakelola = $this->rup->swakelola()->result_array();

		// MENGOSONGKAN TABEL
		$this->db->empty_table('satker');
		$this->db->empty_table('jenis_pengadaan');
		$this->db->empty_table('metode_pemilihan');
		$this->db->empty_table('apbd_penyedia');
		$this->db->empty_table('apbn_penyedia');
		$this->db->empty_table('apbd_swakelola');
		$this->db->empty_table('apbn_swakelola');

		// LOOPING DATA JSON DAN SIMPAN DI TABEL
		foreach ($penyedia as $py) {
			$satker = $this->rup->satker($py['kode_satker_asli'])->row_array();
			if(!$satker){
				$data = [
					'id_satker'=>$py['id_satker'],
					'kode_satker_asli'=>$py['kode_satker_asli'],
					'nama_satker'=>$py['nama_satker'],
				];
				$this->db->insert('satker', $data);
			}else{
				$data = [
					'id_satker'=>$py['id_satker'],
					'nama_satker'=>$py['nama_satker'],
				];
				$this->db->set($data);
				$this->db->where('kode_satker_asli', $py['kode_satker_asli']);
				$this->db->update('satker');
			}
			
			// JENIS PENGADAAN
			switch ($py['jenis_pengadaan']) {
				case null:
					$nama_jp = '-';
					break;
				
				default:
					$nama_jp=$py['jenis_pengadaan'];
					break;
			}
			$jenis_pengadaan = $this->rup->jenis_pengadaan($nama_jp)->row_array();
			if(!$jenis_pengadaan){
				$data_jp = [
					'id_jp'=>$py['kode_rup'],
					'nama_jp'=>$nama_jp,
				];
				$this->db->insert('jenis_pengadaan', $data_jp);
			}else{
				$data_jp = [
					'id_jp'=>$py['kode_rup']
				];
				$this->db->set($data_jp);
				$this->db->where('nama_jp', $nama_jp);
				$this->db->update('jenis_pengadaan');
			}

			// METODE PEMILIHAN
			switch ($py['metode_pemilihan']) {
				case null:
					$nama_mp = '-';
					break;
				
				default:
					$nama_mp=$py['metode_pemilihan'];
					break;
			}
			$metode_pemilihan = $this->rup->metode_pemilihan($nama_mp)->row_array();
			if(!$metode_pemilihan){
				$data_mp = [
					'id_mp'=>$py['kode_rup'],
					'nama_mp'=>$nama_mp,
				];
				$this->db->insert('metode_pemilihan', $data_mp);
			}else{
				$data_mp = [
					'id_mp'=>$py['kode_rup']
				];
				$this->db->set($data_mp);
				$this->db->where('nama_mp', $nama_mp);
				$this->db->update('metode_pemilihan');
			}

			// SUMBER DANA
			// APBD
			$apbd_penyedia = $this->rup->apbd_penyedia($py['sumber_dana'])->row_array();
			if(!$apbd_penyedia){
				$data_apbd_penyedia = [
					'id_apbd_penyedia'=>$py['kode_rup'],
					'nama_apbd_penyedia'=>$py['sumber_dana'],
				];
				$this->db->insert('apbd_penyedia', $data_apbd_penyedia);
			}else{
				$data_apbd_penyedia = [
					'id_apbd_penyedia'=>$py['kode_rup']
				];
				$this->db->set($data_apbd_penyedia);
				$this->db->where('nama_apbd_penyedia', $py['sumber_dana']);
				$this->db->update('apbd_penyedia');
			}
			// APBN
			$apbn_penyedia = $this->rup->apbn_penyedia($py['sumber_dana'])->row_array();
			if(!$apbn_penyedia){
				$data_apbn_penyedia = [
					'id_apbn_penyedia'=>$py['kode_rup'],
					'nama_apbn_penyedia'=>$py['sumber_dana'],
				];
				$this->db->insert('apbn_penyedia', $data_apbn_penyedia);
			}else{
				$data_apbn_penyedia = [
					'id_apbn_penyedia'=>$py['kode_rup']
				];
				$this->db->set($data_apbn_penyedia);
				$this->db->where('nama_apbn_penyedia', $py['sumber_dana']);
				$this->db->update('apbn_penyedia');
			}
		}

		foreach ($swakelola as $swk) {
			$satker = $this->rup->satker($swk['kode_satker_asli'])->row_array();
			if(!$satker){
				$data = [
					'id_satker'=>$swk['id_satker'],
					'kode_satker_asli'=>$swk['kode_satker_asli'],
					'nama_satker'=>$swk['nama_satker'],
				];
				$this->db->insert('satker', $data);
			}else{
				$data = [
					'id_satker'=>$swk['id_satker'],
					'nama_satker'=>$swk['nama_satker'],
				];
				$this->db->set($data);
				$this->db->where('kode_satker_asli', $swk['kode_satker_asli']);
				$this->db->update('satker');
			}

			// SUMBER DANA
			// APBD
			$apbd_swakelola = $this->rup->apbd_swakelola($swk['sumber_dana'])->row_array();
			if(!$apbd_swakelola){
				$data_apbd_swakelola = [
					'id_apbd_swakelola'=>$swk['kode_rup'],
					'nama_apbd_swakelola'=>$swk['sumber_dana'],
				];
				$this->db->insert('apbd_swakelola', $data_apbd_swakelola);
			}else{
				$data_apbd_swakelola = [
					'id_apbd_swakelola'=>$swk['kode_rup']
				];
				$this->db->set($data_apbd_swakelola);
				$this->db->where('nama_apbd_swakelola', $swk['sumber_dana']);
				$this->db->update('apbd_swakelola');
			}
			// APBN
			$apbn_swakelola = $this->rup->apbn_swakelola($swk['sumber_dana'])->row_array();
			if(!$apbn_swakelola){
				$data_apbn_swakelola = [
					'id_apbn_swakelola'=>$swk['kode_rup'],
					'nama_apbn_swakelola'=>$swk['sumber_dana'],
				];
				$this->db->insert('apbn_swakelola', $data_apbn_swakelola);
			}else{
				$data_apbn_swakelola = [
					'id_apbn_swakelola'=>$swk['kode_rup']
				];
				$this->db->set($data_apbn_swakelola);
				$this->db->where('nama_apbn_swakelola', $swk['sumber_dana']);
				$this->db->update('apbn_swakelola');
			}
		}

		$data_udt = [
			'id_udt'=>time(),
			'keterangan'=>'Pembaruan data Satuan Kerja',
			'username'=>$this->session->userdata('username')
		];
		$this->db->insert('update_data_terakhir', $data_udt);
		$this->session->set_flashdata('info', '<div class="callout callout-success">
            																	<h4><i class="icon fa fa-check"></i> Proses Berhasil!</h4>
															                <p>Database telah diperbarui</p>
															              </div>');
		redirect('update/satker');
	}

	public function program()
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
		$data['subjudul'] = "Update Data Program";

		$data['program'] = $this->rup->program();
		$this->template->load('template', 'update/program', $data);
	}

	public function program_proses()
	{
		$data['pengaturan'] = $this->admin->pengaturan();
		$penyedia = $this->rup->penyedia()->result_array();
		$swakelola = $this->rup->swakelola()->result_array();

		// MENGOSONGKAN TABEL
		$this->db->empty_table('program');

		// LOOPING DATA JSON DAN SIMPAN DI TABEL
		foreach ($penyedia as $py) {
			$program = $this->rup->program($py['kode_string_program'])->row_array();
			if(!$program){
				$data = [
					'kode_string_program'=>$py['kode_string_program'],
					'kode_satker_asli'=>$py['kode_satker_asli'],
					'nama_program'=>$py['program'],
				];
				$this->db->insert('program', $data);
			}else{
				$data = [
					'kode_satker_asli'=>$py['kode_satker_asli'],
					'nama_program'=>$py['program'],
				];
				$this->db->set($data);
				$this->db->where('kode_string_program', $py['kode_string_program']);
				$this->db->update('program');
			}
		}

		foreach ($swakelola as $swk) {
			$program = $this->rup->program($swk['kode_string_program'])->row_array();
			if(!$program){
				$data = [
					'kode_string_program'=>$swk['kode_string_program'],
					'kode_satker_asli'=>$swk['kode_satker_asli'],
					'nama_program'=>$swk['program'],
				];
				$this->db->insert('program', $data);
			}else{
				$data = [
					'kode_satker_asli'=>$swk['kode_satker_asli'],
					'nama_program'=>$swk['program'],
				];
				$this->db->set($data);
				$this->db->where('kode_string_program', $py['kode_string_program']);
				$this->db->update('program');
			}
		}
		$data_udt = [
			'id_udt'=>time(),
			'keterangan'=>'Pembaruan data Program',
			'username'=>$this->session->userdata('username')
		];
		$this->db->insert('update_data_terakhir', $data_udt);
		$this->session->set_flashdata('info', '<div class="callout callout-success">
            																	<h4><i class="icon fa fa-check"></i> Proses Berhasil!</h4>
															                <p>Database telah diperbarui</p>
															              </div>');
		redirect('update/program');
	}

	public function kegiatan()
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
		$data['subjudul'] = "Update Data Kegiatan";

		$data['kegiatan'] = $this->rup->kegiatan();
		$this->template->load('template', 'update/kegiatan', $data);
	}

	public function kegiatan_proses()
	{
		$data['pengaturan'] = $this->admin->pengaturan();
		$penyedia = $this->rup->penyedia()->result_array();
		$swakelola = $this->rup->swakelola()->result_array();

		// MENGOSONGKAN TABEL
		$this->db->empty_table('kegiatan');

		// LOOPING DATA JSON DAN SIMPAN DI TABEL
		foreach ($penyedia as $py) {
			$kegiatan = $this->rup->kegiatan($py['kode_string_kegiatan'])->row_array();
			if(!$kegiatan){
				$data = [
					'kode_string_kegiatan'=>$py['kode_string_kegiatan'],
					'kode_satker_asli'=>$py['kode_satker_asli'],
					'kode_string_program'=>$py['kode_string_program'],
					'nama_kegiatan'=>$py['kegiatan'],
				];
				$this->db->insert('kegiatan', $data);
			}else{
				$data = [
					'kode_satker_asli'=>$py['kode_satker_asli'],
					'kode_string_program'=>$py['kode_string_program'],
					'nama_kegiatan'=>$py['kegiatan'],
				];
				$this->db->set($data);
				$this->db->where('kode_string_kegiatan', $py['kode_string_kegiatan']);
				$this->db->update('kegiatan');
			}
		}

		foreach ($swakelola as $swk) {
			$kegiatan = $this->rup->kegiatan($swk['kode_string_kegiatan'])->row_array();
			if(!$kegiatan){
				$data = [
					'kode_string_kegiatan'=>$swk['kode_string_kegiatan'],
					'kode_satker_asli'=>$swk['kode_satker_asli'],
					'kode_string_program'=>$swk['kode_string_program'],
					'nama_kegiatan'=>$swk['kegiatan'],
				];
				$this->db->insert('kegiatan', $data);
			}else{
				$data = [
					'kode_satker_asli'=>$swk['kode_satker_asli'],
					'kode_string_program'=>$swk['kode_string_program'],
					'nama_kegiatan'=>$swk['kegiatan'],
				];
				$this->db->set($data);
				$this->db->where('kode_string_kegiatan', $py['kode_string_kegiatan']);
				$this->db->update('kegiatan');
			}
		}
		$data_udt = [
			'id_udt'=>time(),
			'keterangan'=>'Pembaruan data Kegiatan',
			'username'=>$this->session->userdata('username')
		];
		$this->db->insert('update_data_terakhir', $data_udt);
		$this->session->set_flashdata('info', '<div class="callout callout-success">
            																	<h4><i class="icon fa fa-check"></i> Proses Berhasil!</h4>
															                <p>Database telah diperbarui</p>
															              </div>');
		redirect('update/kegiatan');
	}

}
