<div class="row">
  <div class="col-md-6 col-xs-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">PROGRAM & KEGIATAN</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="box-body">
        <div class="row" style="margin-bottom: 0px">
          <div class="col-md-6 col-xs-12">
            <div id="donut-chart-progkeg" style="height: 250px;"></div>
          </div>
          <div class="col-md-6 col-xs-12">
            <!-- PROGRAM -->
            <div class="small-box bg-light-blue">
              <div class="inner">
                <input type="hidden" id="program" value="<?=$program->num_rows() ?>">
                <h3><?=number_format($program->num_rows(), 0, ',', '.') ?></h3>
                <h4 class="text-bold">Program</h4>
              </div>
              <div class="icon">
                <i class="fa fa-list"></i>
              </div>
            </div>
            <!-- KEGIATAN -->
            <div class="small-box bg-green">
              <div class="inner">
                <input type="hidden" id="kegiatan" value="<?=$kegiatan->num_rows() ?>">
                <h3><?=number_format($kegiatan->num_rows(), 0, ',', '.') ?></h3>
                <h4 class="text-bold">Kegiatan</h4>
              </div>
              <div class="icon">
                <i class="fa fa-list"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xs-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">PAKET</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="box-body">
        <div class="row" style="margin-bottom: 0px">
          <div class="col-md-6 col-xs-12">
            <div id="donut-chart-pyswk" style="height: 250px;"></div>
          </div>

          <div class="col-md-6 col-xs-12">
            <!-- APBD -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <input type="hidden" id="penyedia" value="<?=$penyedia->num_rows() ?>">
                <h3><?=number_format($penyedia->num_rows(), 0, ',', '.') ?></h3>
                <h4 class="text-bold">Paket Penyedia</h4>
              </div>
              <div class="icon">
                <i class="fa fa-cubes"></i>
              </div>
            </div>
            <!-- APBN -->
            <div class="small-box bg-red">
              <div class="inner">
                <input type="hidden" id="swakelola" value="<?=$swakelola->num_rows() ?>">
                <h3><?=number_format($swakelola->num_rows(), 0, ',', '.') ?></h3>
                <h4 class="text-bold">Paket Swakelola</h4>
              </div>
              <div class="icon">
                <i class="fa fa-cubes"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">ANGGARAN BELANJA</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
      </button>
    </div>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-md-3 col-xs-12">
        <div id="donut-chart-belanja" style="height: 265px;"></div>
      </div>
      <div class="col-md-3 col-xs-12">
        <div class="chart" id="bar-chart-apb" style="height: 265px;"></div>
      </div>

      <div class="col-md-6 col-xs-12">
        <div class="callout callout-success" style="margin-bottom: 3px">
          <input type="hidden" id="belanja_pegawai" value="<?=$belanja_pegawai ?>">
          <h4 style="margin-bottom: 0px"><i class="fa fa-fw fa-users"></i> Belanja Pegawai <span class="pull-right">Rp. <?=number_format($belanja_pegawai, 0, ',', '.') ?>,-</span></h4>
        </div>
        <div class="callout callout-warning" style="margin-bottom: 3px">
          <input type="hidden" id="belanja_barang_jasa" value="<?=$belanja_barang_jasa ?>">
          <h4 style="margin-bottom: 0px"><i class="fa fa-fw fa-cubes"></i> Belanja Barang / Jasa <span class="pull-right">Rp. <?=number_format($belanja_barang_jasa, 0, ',', '.') ?>,-</span></h4>
        </div>
        <div class="callout callout-danger" style="margin-bottom: 3px">
          <input type="hidden" id="belanja_modal" value="<?=$belanja_modal ?>">
          <h4 style="margin-bottom: 0px"><i class="fa fa-fw fa-archive"></i> Belanja Modal <span class="pull-right">Rp. <?=number_format($belanja_modal, 0, ',', '.') ?>,-</span></h4>
        </div>
        <div class="callout callout-info" style="margin-bottom: 3px">
          <input type="hidden" id="total_anggaran" value="<?=($belanja_pegawai+$belanja_barang_jasa+$belanja_modal) ?>">
          <h4 style="margin-bottom: 0px"><i class="fa fa-fw fa-money"></i> Total Anggaran <span class="pull-right">Rp. <?=number_format(($belanja_pegawai+$belanja_barang_jasa+$belanja_modal), 0, ',', '.') ?>,-</span></h4>
        </div>
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <div class="callout callout-success" style="margin-bottom: 3px">
              <input type="hidden" id="apbd" value="<?=$apbd ?>">
              <h4 style="margin-bottom: 0px"><i class="fa fa-fw fa-money"></i> APBD</h4>
              <p>Rp. <?=number_format($apbd, 0, ',', '.') ?>,-</p>
            </div>
          </div>
          <div class="col-md-6 col-xs-12">
            <div class="callout callout-danger" style="margin-bottom: 3px">
              <input type="hidden" id="apbn" value="<?=$apbn ?>">
              <input type="hidden" id="jlhapb" value="<?=$apbd+$apbn ?>">
              <h4 style="margin-bottom: 0px"><i class="fa fa-fw fa-money"></i> APBN</h4>
              <p>Rp. <?=number_format($apbn, 0, ',', '.') ?>,-</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="box box-primary box-solid">
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

<div class="box box-success box-solid">
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
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div id="donut-chart-jp" style="height: 265px;"></div>
              </div>
              <div class="col-md-12 col-xs-12">
                <ul class="todo-list">
                  <?php foreach ($jp as $jp): ?>
                    <?php
                      switch ($jp['nama_jp']) {
                        case '-':
                          $nama_jp=null;
                          break;
                        
                        default:
                          $nama_jp=$jp['nama_jp'];
                          break;
                      }
                        // PENYEDIA
                        $paket_jenis_pengadaan = $this->db->get_where('penyedia', ['jenis_pengadaan'=>$nama_jp]);
                        $jlh_paket_jenis_pengadaan = $paket_jenis_pengadaan->num_rows();
                        $data_paket_jenis_pengadaan = $paket_jenis_pengadaan->result_array();
                        $jlh_pagu_jenis_pengadaan=0;
                        foreach ($data_paket_jenis_pengadaan as $dpjp) {
                          $pagu_jenis_pengadaan = $dpjp['pagu_rup'];
                          $jlh_pagu_jenis_pengadaan = $jlh_pagu_jenis_pengadaan+$pagu_jenis_pengadaan;
                        }
                      ?>
                    <li>
                      <span class="text"><?=$jp['nama_jp'] ?> <small>(<?=number_format($jlh_paket_jenis_pengadaan, 0, ',', '.') ?> Paket)</small></span>
                      <small class="label label-success">0%</small>
                      <div class="pull-right">
                        <span class="text-bold">Rp. <?=number_format($jlh_pagu_jenis_pengadaan, 0, ',', '.') ?>,-</span>
                      </div>
                    </li>
                  <?php endforeach ?>
                </ul>
              </div>
            </div>
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
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div id="donut-chart-jp" style="height: 265px;"></div>
              </div>
              <div class="col-md-12 col-xs-12">
                <ul class="todo-list">
                  <?php foreach ($mp as $mp): ?>
                    <?php
                      switch ($mp['nama_mp']) {
                        case '-':
                          $nama_mp=null;
                          break;
                        
                        default:
                          $nama_mp=$mp['nama_mp'];
                          break;
                      }
                        // PENYEDIA
                        $paket_metode_pemilihan = $this->db->get_where('penyedia', ['metode_pemilihan'=>$nama_mp]);
                        $jlh_paket_metode_pemilihan = $paket_metode_pemilihan->num_rows();
                        $data_paket_metode_pemilihan = $paket_metode_pemilihan->result_array();
                        $jlh_pagu_metode_pemilihan=0;
                        foreach ($data_paket_metode_pemilihan as $dpmp) {
                          $pagu_metode_pemilihan = $dpmp['pagu_rup'];
                          $jlh_pagu_metode_pemilihan = $jlh_pagu_metode_pemilihan+$pagu_metode_pemilihan;
                        }
                      ?>
                    <li>
                      <span class="text"><?=$mp['nama_mp'] ?> <small>(<?=number_format($jlh_paket_metode_pemilihan, 0, ',', '.') ?> Paket)</small></span>
                      <small class="label label-success">0%</small>
                      <div class="pull-right">
                        <span class="text-bold">Rp. <?=number_format($jlh_pagu_metode_pemilihan, 0, ',', '.') ?>,-</span>
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
  </div>
</div>

<div class="box box-warning box-solid">
  <div class="box-header with-border">
    <h3 class="box-title">JENIS PENGADAAN</h3>
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
          <th class="text-center" style="vertical-align: middle">PAKET</th>
          <th class="text-center" style="vertical-align: middle">KONSTRUKSI</th>
          <th class="text-center" style="vertical-align: middle">KONSULTANSI</th>
          <th class="text-center" style="vertical-align: middle">BARANG</th>
          <th class="text-center" style="vertical-align: middle">JASA LAINNYA</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($satker->result_array() as $sk): ?>
          <?php
            $paket = $this->rup->paket_skpd($sk['kode_satker_asli'])->num_rows();
            $jp_konstruksi = $this->rup->jp_konstruksi_skpd($sk['kode_satker_asli'])->num_rows();
            $jp_konsultansi = $this->rup->jp_konsultansi_skpd($sk['kode_satker_asli'])->num_rows();
            $jp_barang = $this->rup->jp_barang_skpd($sk['kode_satker_asli'])->num_rows();
            $jp_jasa = $this->rup->jp_jasa_skpd($sk['kode_satker_asli'])->num_rows();
          ?>
          <tr>
            <td class="text-center" style="vertical-align: middle" width="2%"><?=$no++ ?></td>
            <td style="vertical-align: middle"><?=$sk['nama_satker'] ?></td>
            <td class="text-center" style="vertical-align: middle" width="9%"><?=$paket ?></td>
            <td class="text-center" style="vertical-align: middle" width="9%"><?=$jp_konstruksi ?></td>
            <td class="text-center" style="vertical-align: middle" width="9%"><?=$jp_konsultansi ?></td>
            <td class="text-center" style="vertical-align: middle" width="9%"><?=$jp_barang ?></td>
            <td class="text-center" style="vertical-align: middle" width="9%"><?=$jp_jasa ?></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>

<div class="box box-danger box-solid">
  <div class="box-header with-border">
    <h3 class="box-title">METODE PEMILIHAN</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
      </button>
    </div>
  </div>
  <div class="box-body table-responsive">
    <table class="table table-sm table-bordered table-striped table-hover small" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th rowspan="2" class="text-center" style="vertical-align: middle">NO</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">OPD</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">PAKET</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">SELEKSI</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">TENDER</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">TENDER<br>CEPAT</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">E-PURCHASING</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">PENUNJUKAN<br>LANGSUNG</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">PENGADAAN<br>LANGSUNG</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">DIKECUALIKAN</th>
          <th colspan="4" class="text-center" style="vertical-align: middle">SWAKELOLA</th>
        </tr>
        <tr>
          <th class="text-center" style="vertical-align: middle">Tipe 1</th>
          <th class="text-center" style="vertical-align: middle">Tipe 2</th>
          <th class="text-center" style="vertical-align: middle">Tipe 3</th>
          <th class="text-center" style="vertical-align: middle">Tipe 4</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($satker->result_array() as $sk): ?>
          <?php
            $paket = $this->rup->paket_skpd($sk['kode_satker_asli'])->num_rows();
            $mp_dikecualikan = $this->rup->mp_dikecualikan_skpd($sk['kode_satker_asli'])->num_rows();
            $mp_purchasing = $this->rup->mp_purchasing_skpd($sk['kode_satker_asli'])->num_rows();
            $mp_pl = $this->rup->mp_pl_skpd($sk['kode_satker_asli'])->num_rows();
            $mp_pl2 = $this->rup->mp_pl2_skpd($sk['kode_satker_asli'])->num_rows();
            $mp_seleksi = $this->rup->mp_seleksi_skpd($sk['kode_satker_asli'])->num_rows();
            $mp_tender = $this->rup->mp_tender_skpd($sk['kode_satker_asli'])->num_rows();
            $mp_tc = $this->rup->mp_tc_skpd($sk['kode_satker_asli'])->num_rows();
          ?>
          <tr>
            <td class="text-center" style="vertical-align: middle" width="2%"><?=$no++ ?></td>
            <td style="vertical-align: middle"><?=$sk['nama_satker'] ?></td>
            <td class="text-center" style="vertical-align: middle" width="5%"><?=$paket ?></td>
            <td class="text-center" style="vertical-align: middle" width="9%"><?=$mp_seleksi ?></td>
            <td class="text-center" style="vertical-align: middle" width="5%"><?=$mp_tender ?></td>
            <td class="text-center" style="vertical-align: middle" width="5%"><?=$mp_tc ?></td>
            <td class="text-center" style="vertical-align: middle" width="5%"><?=$mp_purchasing ?></td>
            <td class="text-center" style="vertical-align: middle" width="9%"><?=$mp_pl2 ?></td>
            <td class="text-center" style="vertical-align: middle" width="9%"><?=$mp_pl ?></td>
            <td class="text-center" style="vertical-align: middle" width="5%"><?=$mp_dikecualikan ?></td>
            <td class="text-center" style="vertical-align: middle" width="5%">0</td>
            <td class="text-center" style="vertical-align: middle" width="5%">0</td>
            <td class="text-center" style="vertical-align: middle" width="9%">0</td>
            <td class="text-center" style="vertical-align: middle" width="9%">0</td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>