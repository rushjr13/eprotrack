<div class="row">
  <!-- PROGRAM -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="small-box bg-light-blue">
      <div class="inner">
        <input type="hidden" id="program" value="<?=$program ?>">
        <h3><?=number_format($program, 0, ',', '.') ?></h3>
        <h4 class="text-bold">Program</h4>
      </div>
      <div class="icon">
        <i class="fa fa-list"></i>
      </div>
    </div>
  </div>

  <!-- KEGIATAN -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="small-box bg-green">
      <div class="inner">
        <input type="hidden" id="kegiatan" value="<?=$kegiatan ?>">
        <h3><?=number_format($kegiatan, 0, ',', '.') ?></h3>
        <h4 class="text-bold">Kegiatan</h4>
      </div>
      <div class="icon">
        <i class="fa fa-list"></i>
      </div>
    </div>
  </div>

  <!-- APBD -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="small-box bg-yellow">
      <div class="inner">
        <input type="hidden" id="apbd" value="<?=$apbd ?>">
        <h3><?=number_format($penyedia, 0, ',', '.') ?></h3>
        <h4 class="text-bold">Paket Penyedia</h4>
      </div>
      <div class="icon">
        <i class="fa fa-cubes"></i>
      </div>
    </div>
  </div>

  <!-- APBN -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="small-box bg-red">
      <div class="inner">
        <input type="hidden" id="apbn" value="<?=$apbn ?>">
        <h3><?=number_format($swakelola, 0, ',', '.') ?></h3>
        <h4 class="text-bold">Paket Swakelola</h4>
      </div>
      <div class="icon">
        <i class="fa fa-cubes"></i>
      </div>
    </div>
  </div>
</div>

<div class="box box-info collapsed-box box-solid">
  <div class="box-header with-border">
    <h3 class="box-title">BELANJA</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
      </button>
    </div>
  </div>
  <div class="box-body">
    <div class="row" style="margin-bottom: 0px">
      <!-- BELANJA PEGAWAI -->
      <div class="col-md-4 col-xs-12">
        <div class="small-box bg-light-blue">
          <div class="inner">
            <input type="hidden" id="belanja_pegawai" value="<?=$belanja_pegawai ?>">
            <h3>Pegawai</3>
            <h4 class="text-bold">Rp. <?=number_format($belanja_pegawai, 0, ',', '.') ?>,-</h4>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
        </div>
      </div>

      <!-- BELANJA BARANG / JASA -->
      <div class="col-md-4 col-xs-12">
        <div class="small-box bg-green">
          <div class="inner">
            <input type="hidden" id="belanja_barang_jasa" value="<?=$belanja_barang_jasa ?>">
            <h3>Barang / Jasa</h3>
            <h4 class="text-bold">Rp. <?=number_format($belanja_barang_jasa, 0, ',', '.') ?>,-</h4>
          </div>
          <div class="icon">
            <i class="fa fa-cubes"></i>
          </div>
        </div>
      </div>

      <!-- BELANJA MODAL -->
      <div class="col-md-4 col-xs-12">
        <div class="small-box bg-yellow">
          <div class="inner">
            <input type="hidden" id="belanja_modal" value="<?=$belanja_modal ?>">
            <h3>Modal</h3>
            <h4 class="text-bold">Rp. <?=number_format($belanja_modal, 0, ',', '.') ?>,-</h4>
          </div>
          <div class="icon">
            <i class="fa fa-archive"></i>
          </div>
        </div>
      </div>

      <!-- TOTAL ANGGARAN -->
      <div class="col-md-12 col-xs-12">
        <div class="small-box bg-red">
          <div class="inner">
            <input type="hidden" id="total_anggaran" value="<?=($belanja_pegawai+$belanja_barang_jasa+$belanja_modal) ?>">
            <h3>Rp. <?=number_format(($belanja_pegawai+$belanja_barang_jasa+$belanja_modal), 0, ',', '.') ?>,-</h3>
            <p>Total Anggaran</p>
          </div>
          <div class="icon">
            <i class="fa fa-money"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="box box-primary collapsed-box box-solid">
  <div class="box-header with-border">
    <h3 class="box-title">PAGU ANGGARAN</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
      </button>
    </div>
  </div>
  <div class="box-body table-responsive">
    <table class="table table-sm table-bordered table-striped table-hover" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th class="text-center" style="vertical-align: middle">NO</th>
          <th class="text-center" style="vertical-align: middle">OPD</th>
          <th class="text-center" style="vertical-align: middle">SIMDA Keuangan (Rp)<br><small>(Belanja Langsung)</small></th>
          <th class="text-center" style="vertical-align: middle">SIRUP LKPP (Rp)<br><small>(Tayang RUP)</small></th>
          <th class="text-center" style="vertical-align: middle">SELISIH (Rp)</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($satker->result_array() as $sk): ?>
          <tr>
            <td width="3%" style="vertical-align: middle" class="text-center"><?=$no++ ?></td>
            <td style="vertical-align: middle"><?=$sk['nama_satker'] ?></td>
            <td width="15%" style="vertical-align: middle" class="text-right"><?=number_format($sk['pagu_simda'], 0, ',', '.') ?></td>
            <?php
              // PENYEDIA
              $paket_penyedia_satker = $this->db->get_where('penyedia', ['kode_satker_asli'=>$sk['kode_satker_asli']]);
              $jlh_paket_penyedia_satker = $paket_penyedia_satker->num_rows();
              $data_paket_penyedia_satker = $paket_penyedia_satker->result_array();
              $jlh_pagu_penyedia_satker=0;
              foreach ($data_paket_penyedia_satker as $dppk) {
                $pagu_penyedia_satker = $dppk['pagu_rup'];
                $jlh_pagu_penyedia_satker = $jlh_pagu_penyedia_satker+$pagu_penyedia_satker;
              }

              // SWAKELOLA
              $paket_swakelola_satker = $this->db->get_where('swakelola', ['kode_satker_asli'=>$sk['kode_satker_asli']]);
              $jlh_paket_swakelola_satker = $paket_swakelola_satker->num_rows();
              $data_paket_swakelola_satker = $paket_swakelola_satker->result_array();
              $jlh_pagu_swakelola_satker=0;
              foreach ($data_paket_swakelola_satker as $dpsk) {
                $pagu_swakelola_satker = $dpsk['pagu_rup'];
                $jlh_pagu_swakelola_satker = $jlh_pagu_swakelola_satker+$pagu_swakelola_satker;
              }

              $jlh_paket_satker = $jlh_paket_penyedia_satker+$jlh_paket_swakelola_satker;
              $jlh_pagu_satker = $jlh_pagu_penyedia_satker+$jlh_pagu_swakelola_satker;
            ?>
            <td width="15%" style="vertical-align: middle" class="text-right"><?=number_format($jlh_pagu_satker, 0, ',', '.') ?></td>
            <td width="15%" style="vertical-align: middle" class="text-right"><?=number_format(($sk['pagu_simda']-$jlh_pagu_satker), 0, ',', '.') ?></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>

<div class="box box-success collapsed-box box-solid">
  <div class="box-header with-border">
    <h3 class="box-title">RPP</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
      </button>
    </div>
  </div>
  <div class="box-body">
    <div class="row">
      <!-- JENIS PENGADAAN -->
      <div class="col-sm-6 col-xs-12">
        <div class="box box-default box-solid">
          <div class="box-header">
            <i class="ion ion-clipboard"></i>
            <h3 class="box-title">Jenis Pengadaan</h3>
          </div>
          <div class="box-body">
            <ul class="todo-list">
              <?php foreach ($jp as $jp): ?>
                <li>
                  <span class="text"><?=$jp['nama_jp'] ?> <small>(<?=number_format($jp['paket_jp'], 0, ',', '.') ?> Paket)</small></span>
                  <small class="label label-success">0%</small>
                  <div class="pull-right">
                    <span class="text-bold">Rp. <?=number_format($jp['pagu_jp'], 0, ',', '.') ?>,-</span>
                  </div>
                </li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
      </div>

      <!-- METODE PEMILIHAN -->
      <div class="col-sm-6 col-xs-12">
        <div class="box box-default box-solid">
          <div class="box-header">
            <i class="ion ion-clipboard"></i>
            <h3 class="box-title">Metode Pemilihan</h3>
          </div>
          <div class="box-body">
            <ul class="todo-list">
              <?php foreach ($mp as $mp): ?>
                <li>
                  <span class="text"><?=$mp['nama_mp'] ?> <small>(<?=number_format($mp['paket_mp'], 0, ',', '.') ?> Paket)</small></span>
                  <small class="label label-success">0%</small>
                  <div class="pull-right">
                    <span class="text-bold">Rp. <?=number_format($mp['pagu_mp'], 0, ',', '.') ?>,-</span>
                  </div>
                </li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="box box-warning collapsed-box box-solid">
  <div class="box-header with-border">
    <h3 class="box-title">TRACKING JENIS PENGADAAN</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
      </button>
    </div>
  </div>
  <div class="box-body table-responsive">
    <table class="table table-sm table-bordered table-striped table-hover small" id="table3" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th class="text-center" style="vertical-align: middle">NO</th>
          <th class="text-center" style="vertical-align: middle">OPD</th>
          <th class="text-center" style="vertical-align: middle">PAKET</th>
          <th class="text-center" style="vertical-align: middle">KONSTRUKSI</th>
          <th class="text-center" style="vertical-align: middle">KONSULTANSI</th>
          <th class="text-center" style="vertical-align: middle">BARANG</th>
          <th class="text-center" style="vertical-align: middle">JASA LAINNYA</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-center" style="vertical-align: middle" width="2%">1</td>
          <td style="vertical-align: middle">nama opd</td>
          <td class="text-center" style="vertical-align: middle" width="9%">0</td>
          <td class="text-center" style="vertical-align: middle" width="9%">0</td>
          <td class="text-center" style="vertical-align: middle" width="9%">0</td>
          <td class="text-center" style="vertical-align: middle" width="9%">0</td>
          <td class="text-center" style="vertical-align: middle" width="9%">0</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="2" class="text-right" style="vertical-align: middle">TOTAL</th>
          <th class="text-center" style="vertical-align: middle">0</th>
          <th class="text-center" style="vertical-align: middle">0</th>
          <th class="text-center" style="vertical-align: middle">0</th>
          <th class="text-center" style="vertical-align: middle">0</th>
          <th class="text-center" style="vertical-align: middle">0</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>

<div class="box box-danger collapsed-box box-solid">
  <div class="box-header with-border">
    <h3 class="box-title">TRACKING METODE PEMILIHAN</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
      </button>
    </div>
  </div>
  <div class="box-body table-responsive">
    <table class="table table-sm table-bordered table-striped table-hover small" id="table4" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th rowspan="2" class="text-center" style="vertical-align: middle">NO</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">OPD</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">PAKET</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">TENDER</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">TENDER<br>CEPAT</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">E-PURCHASING</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">PENUNJUKAN<br>LANGSUNG</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">PENGADAAN<br>LANGSUNG</th>
          <th colspan="4" class="text-center" style="vertical-align: middle">SWAKELOLA</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">DIKECUALIKAN</th>
        </tr>
        <tr>
          <th class="text-center" style="vertical-align: middle">Tipe 1</th>
          <th class="text-center" style="vertical-align: middle">Tipe 2</th>
          <th class="text-center" style="vertical-align: middle">Tipe 3</th>
          <th class="text-center" style="vertical-align: middle">Tipe 4</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-center" style="vertical-align: middle" width="2%">1</td>
          <td style="vertical-align: middle">nama opd</td>
          <td class="text-center" style="vertical-align: middle" width="5%">0</td>
          <td class="text-center" style="vertical-align: middle" width="5%">0</td>
          <td class="text-center" style="vertical-align: middle" width="5%">0</td>
          <td class="text-center" style="vertical-align: middle" width="9%">0</td>
          <td class="text-center" style="vertical-align: middle" width="9%">0</td>
          <td class="text-center" style="vertical-align: middle" width="9%">0</td>
          <td class="text-center" style="vertical-align: middle" width="5%">0</td>
          <td class="text-center" style="vertical-align: middle" width="5%">0</td>
          <td class="text-center" style="vertical-align: middle" width="5%">0</td>
          <td class="text-center" style="vertical-align: middle" width="5%">0</td>
          <td class="text-center" style="vertical-align: middle" width="9%">0</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="2" class="text-right" style="vertical-align: middle">TOTAL</th>
          <th class="text-center" style="vertical-align: middle">0</th>
          <th class="text-center" style="vertical-align: middle">0</th>
          <th class="text-center" style="vertical-align: middle">0</th>
          <th class="text-center" style="vertical-align: middle">0</th>
          <th class="text-center" style="vertical-align: middle">0</th>
          <th class="text-center" style="vertical-align: middle">0</th>
          <th class="text-center" style="vertical-align: middle">0</th>
          <th class="text-center" style="vertical-align: middle">0</th>
          <th class="text-center" style="vertical-align: middle">0</th>
          <th class="text-center" style="vertical-align: middle">0</th>
          <th class="text-center" style="vertical-align: middle">0</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>