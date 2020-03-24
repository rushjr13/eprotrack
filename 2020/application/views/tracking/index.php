<?php
  $paket_penyedia = $this->rup->paket_penyedia_skpd($satker['kode_satker_asli'])->num_rows();
  $jp_konstruksi = $this->rup->jp_konstruksi_skpd($satker['kode_satker_asli'])->num_rows();
  $jp_konsultansi = $this->rup->jp_konsultansi_skpd($satker['kode_satker_asli'])->num_rows();
  $jp_barang = $this->rup->jp_barang_skpd($satker['kode_satker_asli'])->num_rows();
  $jp_jasa = $this->rup->jp_jasa_skpd($satker['kode_satker_asli'])->num_rows();
  $paket_penyedia = $this->rup->paket_penyedia_skpd($satker['kode_satker_asli'])->num_rows();
  $paket_swakelola = $this->rup->paket_swakelola_skpd($satker['kode_satker_asli'])->num_rows();
  $mp_dikecualikan = $this->rup->mp_dikecualikan_skpd($satker['kode_satker_asli'])->num_rows();
  $mp_purchasing = $this->rup->mp_purchasing_skpd($satker['kode_satker_asli'])->num_rows();
  $mp_pl = $this->rup->mp_pl_skpd($satker['kode_satker_asli'])->num_rows();
  $mp_pl2 = $this->rup->mp_pl2_skpd($satker['kode_satker_asli'])->num_rows();
  $mp_seleksi = $this->rup->mp_seleksi_skpd($satker['kode_satker_asli'])->num_rows();
  $mp_tender = $this->rup->mp_tender_skpd($satker['kode_satker_asli'])->num_rows();
  $mp_tc = $this->rup->mp_tc_skpd($satker['kode_satker_asli'])->num_rows();
  $swakelola1 = $this->rup->swakelola1_skpd($satker['kode_satker_asli'])->num_rows();
  $swakelola2 = $this->rup->swakelola2_skpd($satker['kode_satker_asli'])->num_rows();
  $swakelola3 = $this->rup->swakelola3_skpd($satker['kode_satker_asli'])->num_rows();
  $swakelola4 = $this->rup->swakelola4_skpd($satker['kode_satker_asli'])->num_rows();
?>
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><?=$satker['kode_satker_asli'] ?> - <?=$satker['nama_satker'] ?></h3>
  </div>
  <div class="box-body table-responsive">
		<table class="table table-sm table-bordered small" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th colspan="5" class="text-center bg-green" style="vertical-align: middle">JENIS PENGADAAN</th>
					<th colspan="8" class="text-center bg-blue" style="vertical-align: middle">METODE PEMILIHAN</th>
					<th colspan="5" class="text-center bg-red" style="vertical-align: middle">SWAKELOLA</th>
				</tr>
				<tr>
					<th class="text-center bg-green" style="vertical-align: middle">KONSTRUKSI</th>
					<th class="text-center bg-green" style="vertical-align: middle">KONSULTANSI</th>
					<th class="text-center bg-green" style="vertical-align: middle">BARANG</th>
					<th class="text-center bg-green" style="vertical-align: middle">JASA</th>
					<th class="text-center bg-green" style="vertical-align: middle">TOTAL</th>
					<th class="text-center bg-blue" style="vertical-align: middle">SELEKSI</th>
					<th class="text-center bg-blue" style="vertical-align: middle">TENDER</th>
					<th class="text-center bg-blue" style="vertical-align: middle">TENDER CEPAT</th>
					<th class="text-center bg-blue" style="vertical-align: middle">E-PURCHASING</th>
					<th class="text-center bg-blue" style="vertical-align: middle">PENUNJUKAN LANGSUNG</th>
					<th class="text-center bg-blue" style="vertical-align: middle">PENGADAAN LANGSUNG</th>
					<th class="text-center bg-blue" style="vertical-align: middle">DIKECUALIKAN</th>
					<th class="text-center bg-blue" style="vertical-align: middle">TOTAL</th>
					<th class="text-center bg-red" style="vertical-align: middle">SWAKELOLA 1</th>
					<th class="text-center bg-red" style="vertical-align: middle">SWAKELOLA 2</th>
					<th class="text-center bg-red" style="vertical-align: middle">SWAKELOLA 3</th>
					<th class="text-center bg-red" style="vertical-align: middle">SWAKELOLA 4</th>
					<th class="text-center bg-red" style="vertical-align: middle">TOTAL</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="text-center bg-green" style="vertical-align: middle"><?=$jp_konstruksi ?></td>
					<td class="text-center bg-green" style="vertical-align: middle"><?=$jp_konsultansi ?></td>
					<td class="text-center bg-green" style="vertical-align: middle"><?=$jp_barang ?></td>
					<td class="text-center bg-green" style="vertical-align: middle"><?=$jp_jasa ?></td>
					<th class="text-center bg-green" style="vertical-align: middle"><?=$paket_penyedia ?></th>
					<td class="text-center bg-blue" style="vertical-align: middle"><?=$mp_seleksi ?></td>
					<td class="text-center bg-blue" style="vertical-align: middle"><?=$mp_tender ?></td>
					<td class="text-center bg-blue" style="vertical-align: middle"><?=$mp_tc ?></td>
					<td class="text-center bg-blue" style="vertical-align: middle"><?=$mp_purchasing ?></td>
					<td class="text-center bg-blue" style="vertical-align: middle"><?=$mp_pl2 ?></td>
					<td class="text-center bg-blue" style="vertical-align: middle"><?=$mp_pl ?></td>
					<td class="text-center bg-blue" style="vertical-align: middle"><?=$mp_dikecualikan ?></td>
					<th class="text-center bg-blue" style="vertical-align: middle"><?=$paket_penyedia ?></th>
					<td class="text-center bg-red" style="vertical-align: middle"><?=$swakelola1 ?></td>
					<td class="text-center bg-red" style="vertical-align: middle"><?=$swakelola2 ?></td>
					<td class="text-center bg-red" style="vertical-align: middle"><?=$swakelola3 ?></td>
					<td class="text-center bg-red" style="vertical-align: middle"><?=$swakelola4 ?></td>
					<th class="text-center bg-red" style="vertical-align: middle"><?=$paket_swakelola ?></th>
				</tr>
			</tbody>
		</table>
  </div>
</div>

<!-- TRACKING -->
<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tender" data-toggle="tab">Tender</a></li>
    <li><a href="#nontender" data-toggle="tab">Non Tender</a></li>
  </ul>
  <div class="tab-content">
    <div class="active tab-pane" id="tender">
      <?php include('tender.php') ?>
    </div>
    <div class="tab-pane" id="nontender">
      <?php include('nontender.php') ?>
    </div>
  </div>
</div>

<!-- RUP -->
<!-- <div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#penyedia" data-toggle="tab">Penyedia</a></li>
    <li><a href="#swakelola" data-toggle="tab">Swakelola</a></li>
  </ul>
  <div class="tab-content">
    <div class="active tab-pane" id="penyedia">
      <?php include('penyedia.php') ?>
    </div>
    <div class="tab-pane" id="swakelola">
      <?php include('swakelola.php') ?>
    </div>
  </div>
</div> -->