<?php

function get($table, $field=null, $id=null)
{
    $ci =& get_instance();
    if($field!=null){
        $ci->db->where($field, $id);
    }
    return $ci->db->get($table);
}

function rup($jaringan)
{
    if($jaringan=='offline'){
        // OFFLINE
        $penyedia = base_url('json/sirup-penyedia.json');
        $swakelola = base_url('json/sirup-swakelola.json');
        // $tender = base_url('json/spse-tender.json');
    }else{
        // ONLINE
        $penyedia = "https://inaproc.lkpp.go.id/isb/api/2b60f20d-95dd-437c-9c94-61d0c08748ae/json/23093911/PengumumanPenyediaDaerah1618/tipe/4:12/parameter/2020:D76";
        $swakelola = "https://inaproc.lkpp.go.id/isb/api/e0da2d3b-e1d8-49d5-89fa-5490062d7315/json/23093919/PengumumanSwakelolaDaerah1618/tipe/4:12/parameter/2020:D76";
        // $tender = base_url('json/spse-tender.json');
    }
    $json_penyedia = file_get_contents($penyedia);
    $json_swakelola = file_get_contents($swakelola);
    // $json_tender = file_get_contents($tender);
    $data['penyedia'] = json_decode($json_penyedia, true);
    $data['swakelola'] = json_decode($json_swakelola, true);
    // $data['tender'] = json_decode($json_tender, true);
    return $data;
}

function tender()
{
    $tender = base_url('json/spse-tender.json');
    $json_tender = file_get_contents($tender);
    $data_tender = json_decode($json_tender, true);
    return $data_tender;
}

function cek_sudah_masuk()
{
	$ci =& get_instance();
	$username_session = $ci->session->userdata('username');
	if($username_session){
		$ci->session->set_flashdata('info', '<div class="callout callout-danger">
																						<h4><i class="fa fa-ban"></i> Akses Ditolak!</h4>
														                <p>Anda sudah masuk! Klik tombol keluar di profil untuk keluar dari aplikasi!</p>
														              </div>');
		redirect('beranda');
	}
}

function cek_tidak_masuk()
{
	$ci =& get_instance();
	$username_session = $ci->session->userdata('username');
	if(!$username_session){
		$ci->session->set_flashdata('info', '<div class="callout callout-danger">
																						<h4><i class="fa fa-ban"></i> Akses Ditolak!</h4>
														                <p>Anda harus masuk dahulu!</p>
														              </div>');
		redirect('masuk');
	}
}

// Tanggal Indonesia Berdasarkan Fungsi date() - 2019-12-13
function tgl_indodate($tanggal){
	date_default_timezone_set('Asia/Makassar');
    $tgl = substr($tanggal, 8, 2);
    $bln = substr($tanggal, 5, 2);
    $thn = substr($tanggal, 0, 4);

    if($bln=='01'){
        $bulan='Januari';
    } else if($bln=='02'){
        $bulan='Februari';
    } else if($bln=='03'){
        $bulan='Maret';
    } else if($bln=='04'){
        $bulan='April';
    } else if($bln=='05'){
        $bulan='Mei';
    } else if($bln=='06'){
        $bulan='Juni';
    } else if($bln=='07'){
        $bulan='Juli';
    } else if($bln=='08'){
        $bulan='Agustus';
    } else if($bln=='09'){
        $bulan='September';
    } else if($bln=='10'){
        $bulan='Oktober';
    } else if($bln=='11'){
        $bulan='November';
    } else if($bln=='12'){
        $bulan='Desember';
    }

    return $tgl.' '.$bulan.' '.$thn;
}

// Tanggal Indonesia Berdasarkan Fungsi date() - 2019-12-13
function tgl_indodatewaktu($tanggal){
    date_default_timezone_set('Asia/Makassar');
    $tgl = substr($tanggal, 8, 2);
    $bln = substr($tanggal, 5, 2);
    $thn = substr($tanggal, 0, 4);
    $waktu = substr($tanggal, 11, 12);

    if($bln=='01'){
        $bulan='Januari';
    } else if($bln=='02'){
        $bulan='Februari';
    } else if($bln=='03'){
        $bulan='Maret';
    } else if($bln=='04'){
        $bulan='April';
    } else if($bln=='05'){
        $bulan='Mei';
    } else if($bln=='06'){
        $bulan='Juni';
    } else if($bln=='07'){
        $bulan='Juli';
    } else if($bln=='08'){
        $bulan='Agustus';
    } else if($bln=='09'){
        $bulan='September';
    } else if($bln=='10'){
        $bulan='Oktober';
    } else if($bln=='11'){
        $bulan='November';
    } else if($bln=='12'){
        $bulan='Desember';
    }

    return $tgl.' '.$bulan.' '.$thn.' - '.$waktu;
}

// Tanggal Indonesia Berdasarkan Fungsi date() - 2019-12-13
function tgl_indodatebulan($tanggal){
    date_default_timezone_set('Asia/Makassar');
    $tgl = substr($tanggal, 8, 2);
    $bln = substr($tanggal, 5, 2);
    $thn = substr($tanggal, 0, 4);

    if($bln=='01'){
        $bulan='Januari';
    } else if($bln=='02'){
        $bulan='Februari';
    } else if($bln=='03'){
        $bulan='Maret';
    } else if($bln=='04'){
        $bulan='April';
    } else if($bln=='05'){
        $bulan='Mei';
    } else if($bln=='06'){
        $bulan='Juni';
    } else if($bln=='07'){
        $bulan='Juli';
    } else if($bln=='08'){
        $bulan='Agustus';
    } else if($bln=='09'){
        $bulan='September';
    } else if($bln=='10'){
        $bulan='Oktober';
    } else if($bln=='11'){
        $bulan='November';
    } else if($bln=='12'){
        $bulan='Desember';
    }

    return $bulan.' '.$thn;
}

// Hari Indonesia Berdasarkan Fungsi date() - l
function haridate($hari){

    if($hari=='Sunday'){
    	$hr='Minggu';
    } else if($hari=='Monday'){
    	$hr='Senin';
    } else if($hari=='Tuesday'){
    	$hr='Selasa';
    } else if($hari=='Wednesday'){
    	$hr='Rabu';
    } else if($hari=='Thursday'){
    	$hr='Kamis';
    } else if($hari=='Friday'){
    	$hr='Jumat';
    } else if($hari=='Saturday'){
    	$hr='Sabtu';
    }
    return $hr;
}

// Tanggal Indonesia Berdasarkan Fungsi time() - 1560990566
function tgl_indotime($tanggal){
	date_default_timezone_set('Asia/Makassar');
    $tgl = date('d', $tanggal);
    $bln = date('F', $tanggal);
    $thn = date('Y', $tanggal);

    if($bln=='January'){
        $bulan='Januari';
    } else if($bln=='February'){
        $bulan='Februari';
    } else if($bln=='March'){
        $bulan='Maret';
    } else if($bln=='April'){
        $bulan='April';
    } else if($bln=='May'){
        $bulan='Mei';
    } else if($bln=='June'){
        $bulan='Juni';
    } else if($bln=='July'){
        $bulan='Juli';
    } else if($bln=='August'){
        $bulan='Agustus';
    } else if($bln=='September'){
        $bulan='September';
    } else if($bln=='October'){
        $bulan='Oktober';
    } else if($bln=='November'){
        $bulan='November';
    } else if($bln=='December'){
        $bulan='Desember';
    }

    return $tgl.' '.$bulan.' '.$thn;
}

// Hari Indonesia Berdasarkan Fungsi time() - l
function haritime($hari){
	date_default_timezone_set('Asia/Makassar');
    $tgl = date('l', $tanggal);

    if($hari=='Sunday'){
    	$hr='Minggu';
    } else if($hari=='Monday'){
    	$hr='Senin';
    } else if($hari=='Tuesday'){
    	$hr='Selasa';
    } else if($hari=='Wednesday'){
    	$hr='Rabu';
    } else if($hari=='Thursday'){
    	$hr='Kamis';
    } else if($hari=='Friday'){
    	$hr='Jumat';
    } else if($hari=='Saturday'){
    	$hr='Sabtu';
    }
    return $hr;
}

// Tanggal Indonesia Lengkap dengan Hari Berdasarkan Fungsi time() - 1560990566
function tgl_indoharitime($tanggal){
	date_default_timezone_set('Asia/Makassar');
    $hari = date('l', $tanggal);
    $tgl = date('d', $tanggal);
    $bln = date('F', $tanggal);
    $thn = date('Y', $tanggal);

    if($hari=='Sunday'){
    	$hr='Minggu';
    } else if($hari=='Monday'){
    	$hr='Senin';
    } else if($hari=='Tuesday'){
    	$hr='Selasa';
    } else if($hari=='Wednesday'){
    	$hr='Rabu';
    } else if($hari=='Thursday'){
    	$hr='Kamis';
    } else if($hari=='Friday'){
    	$hr='Jumat';
    } else if($hari=='Saturday'){
    	$hr='Sabtu';
    }

    if($bln=='January'){
        $bulan='Januari';
    } else if($bln=='February'){
        $bulan='Februari';
    } else if($bln=='March'){
        $bulan='Maret';
    } else if($bln=='April'){
        $bulan='April';
    } else if($bln=='May'){
        $bulan='Mei';
    } else if($bln=='June'){
        $bulan='Juni';
    } else if($bln=='July'){
        $bulan='Juli';
    } else if($bln=='August'){
        $bulan='Agustus';
    } else if($bln=='September'){
        $bulan='September';
    } else if($bln=='October'){
        $bulan='Oktober';
    } else if($bln=='November'){
        $bulan='November';
    } else if($bln=='December'){
        $bulan='Desember';
    }

    return $hr.', '.$tgl.' '.$bulan.' '.$thn;
}

// Tanggal Indonesia Lengkap dengan Hari tanggal bulan tahun jam menit detik Berdasarkan Fungsi time() - 1560990566
function tgl_indolengkaptime($tanggal){
    date_default_timezone_set('Asia/Makassar');
    $hari = date('l', $tanggal);
    $tgl = date('d', $tanggal);
    $bln = date('F', $tanggal);
    $thn = date('Y', $tanggal);
    $jam = date('H', $tanggal);
    $menit = date('i', $tanggal);
    $detik = date('s', $tanggal);

    if($hari=='Sunday'){
        $hr='Minggu';
    } else if($hari=='Monday'){
        $hr='Senin';
    } else if($hari=='Tuesday'){
        $hr='Selasa';
    } else if($hari=='Wednesday'){
        $hr='Rabu';
    } else if($hari=='Thursday'){
        $hr='Kamis';
    } else if($hari=='Friday'){
        $hr='Jumat';
    } else if($hari=='Saturday'){
        $hr='Sabtu';
    }

    if($bln=='January'){
        $bulan='Januari';
    } else if($bln=='February'){
        $bulan='Februari';
    } else if($bln=='March'){
        $bulan='Maret';
    } else if($bln=='April'){
        $bulan='April';
    } else if($bln=='May'){
        $bulan='Mei';
    } else if($bln=='June'){
        $bulan='Juni';
    } else if($bln=='July'){
        $bulan='Juli';
    } else if($bln=='August'){
        $bulan='Agustus';
    } else if($bln=='September'){
        $bulan='September';
    } else if($bln=='October'){
        $bulan='Oktober';
    } else if($bln=='November'){
        $bulan='November';
    } else if($bln=='December'){
        $bulan='Desember';
    }

    return $hr.', '.$tgl.' '.$bulan.' '.$thn.' - '.$jam.':'.$menit.':'.$detik;
}

// PENYEBUT
function penyebut($nilai) {
    $nilai = abs($nilai);
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($nilai < 12) {
        $temp = " ". $huruf[$nilai];
    } else if ($nilai <20) {
        $temp = penyebut($nilai - 10). " belas";
    } else if ($nilai < 100) {
        $temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
    } else if ($nilai < 200) {
        $temp = " seratus" . penyebut($nilai - 100);
    } else if ($nilai < 1000) {
        $temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
    } else if ($nilai < 2000) {
        $temp = " seribu" . penyebut($nilai - 1000);
    } else if ($nilai < 1000000) {
        $temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
    } else if ($nilai < 1000000000) {
        $temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
        $temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
    } else if ($nilai < 1000000000000000) {
        $temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
    }     
    return $temp;
}


// TERBILANG
function terbilang($nilai) {
    if($nilai<0) {
        $hasil = "minus ". trim(penyebut($nilai));
    } else {
        $hasil = trim(penyebut($nilai));
    }           
    return $hasil;
}