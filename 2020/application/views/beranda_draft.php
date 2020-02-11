<?php
  // PENYEDIA
  $no_paket_penyedia = 1;
  $total_anggaran_penyedia = 0;
  foreach ($penyedia as $py) {
    $jlh_paket_penyedia = $no_paket_penyedia++;
    $total_anggaran_penyedia = $total_anggaran_penyedia+$py['pagu_rup'];
  }

  // SWAKELOLA
  $no_paket_swakelola = 1;
  $total_anggaran_swakelola = 0;
  foreach ($swakelola as $swk) {
    $jlh_paket_swakelola = $no_paket_swakelola++;
    $total_anggaran_swakelola = $total_anggaran_swakelola+$swk['pagu_rup'];
  }
?>
<div class="row">
  <!-- PENYEDIA -->
  <div class="col-md-4 col-xs-12">
    <div class="small-box bg-aqua">
      <div class="inner">
        <input type="hidden" id="jlh_paket_penyedia" value="<?=$jlh_paket_penyedia ?>">
        <h3><?=number_format($jlh_paket_penyedia, 0, ',', '.') ?> Paket</h3>
        <p>Paket Penyedia</p>
      </div>
      <div class="icon">
        <i class="fa fa-cubes"></i>
      </div>
    </div>
  </div>
  <div class="col-md-8 col-xs-12">
    <div class="small-box bg-aqua">
      <div class="inner">
        <input type="hidden" id="total_anggaran_penyedia" value="<?=$total_anggaran_penyedia ?>">
        <h3>Rp. <?=number_format($total_anggaran_penyedia, 0, ',', '.') ?>,-</h3>
        <p>Anggaran Paket Penyedia</p>
      </div>
      <div class="icon">
        <i class="fa fa-money"></i>
      </div>
    </div>
  </div>

  <!-- SWAKELOLA -->
  <div class="col-md-4 col-xs-12">
    <div class="small-box bg-yellow">
      <div class="inner">
        <input type="hidden" id="jlh_paket_swakelola" value="<?=$jlh_paket_swakelola ?>">
        <h3><?=number_format($jlh_paket_swakelola, 0, ',', '.') ?> Paket</h3>
        <p>Paket Swakelola</p>
      </div>
      <div class="icon">
        <i class="fa fa-cubes"></i>
      </div>
    </div>
  </div>
  <div class="col-md-8 col-xs-12">
    <div class="small-box bg-yellow">
      <div class="inner">
        <input type="hidden" id="total_anggaran_swakelola" value="<?=$total_anggaran_swakelola ?>">
        <h3>Rp. <?=number_format($total_anggaran_swakelola, 0, ',', '.') ?>,-</h3>
        <p>Anggaran Paket Swakelola</p>
      </div>
      <div class="icon">
        <i class="fa fa-money"></i>
      </div>
    </div>
  </div>

  <!-- TOTAL -->
  <div class="col-md-4 col-xs-12">
    <div class="small-box bg-green">
      <div class="inner">
        <h3><?=number_format($jlh_paket_penyedia+$jlh_paket_penyedia, 0, ',', '.') ?> Paket</h3>
        <p>Total Paket</p>
      </div>
      <div class="icon">
        <i class="fa fa-cubes"></i>
      </div>
    </div>
  </div>
  <div class="col-md-8 col-xs-12">
    <div class="small-box bg-red">
      <div class="inner">
        <h3>Rp. <?=number_format($total_anggaran_penyedia+$total_anggaran_swakelola, 0, ',', '.') ?>,-</h3>
        <p>Total Anggaran</p>
      </div>
      <div class="icon">
        <i class="fa fa-money"></i>
      </div>
    </div>
  </div>
</div>

<!-- CHART -->
<div class="row">
  <div class="col-md-6">
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-bar-chart"></i> PAKET RUP</h3>
      </div>
      <div class="box-body">
        <div class="chart" id="bar-chartPaket"></div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-pie-chart"></i> ANGGARAN RUP</h3>
      </div>
      <div class="box-body">
        <div class="chart" id="sales-chartAnggaran"></div>
      </div>
    </div>
  </div>
</div>