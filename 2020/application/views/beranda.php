<div class="row">
  <div class="col-md-6 col-xs-12">
    <div class="box box-danger box-solid">
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
    <div class="box box-primary box-solid">
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


<div class="box box-warning box-solid">
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
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
      </button>
    </div>
  </div>
  <div class="box-body table-responsive">
    <table class="table table-sm table-bordered table-striped table-hover" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th rowspan="2" class="text-center" style="vertical-align: middle">NO</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">ORGANISASI PERANGKAT DAERAH</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">SIMDA Keuangan (Rp)<br><small>(Belanja Langsung)</small></th>
          <th colspan="2" class="text-center" style="vertical-align: middle">SIRUP LKPP <small>(Tayang RUP)</small></th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">SELISIH (Rp)</th>
        </tr>
        <tr>
          <th class="text-center" style="vertical-align: middle">Penyedia (Rp)</th>
          <th class="text-center" style="vertical-align: middle">Swakelola (Rp)</th>
        </tr>
      </thead>
      <tbody>
        <?php $total_simda=0; $total_penyedia=0; $total_swakelola=0; $total_selisih=0; $no=1; foreach ($satker->result_array() as $sk): ?>
        <?php
          $total_simda = $total_simda+$sk['pagu_simda'];
        ?>
          <tr>
            <td width="3%" style="vertical-align: middle" class="text-center"><?=$no++ ?></td>
            <td style="vertical-align: middle"><?=$sk['nama_satker'] ?></td>
            <td width="12%" style="vertical-align: middle" class="text-right"><?=number_format($sk['pagu_simda'], 0, ',', '.') ?></td>
            <?php
              // PENYEDIA
              $paket_penyedia_satker = $this->db->get_where('penyedia', ['kode_satker_asli'=>$sk['kode_satker_asli'], 'status_aktif'=>'ya', 'status_umumkan'=>'sudah']);
              $jlh_paket_penyedia_satker = $paket_penyedia_satker->num_rows();
              $data_paket_penyedia_satker = $paket_penyedia_satker->result_array();
              $jlh_pagu_penyedia_satker=0;
              foreach ($data_paket_penyedia_satker as $dppk) {
                $pagu_penyedia_satker = $dppk['pagu_rup'];
                $jlh_pagu_penyedia_satker = $jlh_pagu_penyedia_satker+$pagu_penyedia_satker;
              }
              $total_penyedia = $total_penyedia+$jlh_pagu_penyedia_satker;

              // SWAKELOLA
              $paket_swakelola_satker = $this->db->get_where('swakelola', ['kode_satker_asli'=>$sk['kode_satker_asli'], 'status_aktif'=>'ya', 'status_umumkan'=>'sudah']);
              $jlh_paket_swakelola_satker = $paket_swakelola_satker->num_rows();
              $data_paket_swakelola_satker = $paket_swakelola_satker->result_array();
              $jlh_pagu_swakelola_satker=0;
              foreach ($data_paket_swakelola_satker as $dpsk) {
                $pagu_swakelola_satker = $dpsk['pagu_rup'];
                $jlh_pagu_swakelola_satker = $jlh_pagu_swakelola_satker+$pagu_swakelola_satker;
              }
              $total_swakelola = $total_swakelola+$jlh_pagu_swakelola_satker;

              $jlh_paket_satker = $jlh_paket_penyedia_satker+$jlh_paket_swakelola_satker;
            ?>
            <td width="10%" style="vertical-align: middle" class="text-right"><?=number_format($jlh_pagu_penyedia_satker, 0, ',', '.') ?></td>
            <td width="10%" style="vertical-align: middle" class="text-right"><?=number_format($jlh_pagu_swakelola_satker, 0, ',', '.') ?></td>
            <?php
              $selisih = ($jlh_pagu_penyedia_satker+$jlh_pagu_swakelola_satker)-$sk['pagu_simda'];
              $total_selisih = $total_selisih+$selisih;

              if($selisih<0){
                $warna = 'bg-danger';
                $title = 'Kurang';
              }else if($selisih>0){
                $warna = 'bg-warning';
                $title = 'Lebih';
              }else{
                $warna = 'bg-success';
                $title = 'Sama';
              }

              if($total_selisih<0){
                $warnats = 'bg-danger';
                $titlets = 'Kurang';
              }else if($total_selisih>0){
                $warnats = 'bg-warning';
                $titlets = 'Lebih';
              }else{
                $warnats = 'bg-success';
                $titlets = 'Sama';
              }
            ?>
            <td width="10%" style="vertical-align: middle" class="text-right <?=$warna ?>" data-toggle="tooltip" title="<?=$title ?>"><?=number_format($selisih, 0, ',', '.') ?></td>
          </tr>
        <?php endforeach ?>
      </tbody>
      <tfoot>
        <tr>
          <th class="text-right" colspan="2" style="vertical-align: middle">TOTAL (Rp)</th>
          <th class="text-right" style="vertical-align: middle"><?=number_format($total_simda, 0, ',', '.') ?></th>
          <th class="text-right" style="vertical-align: middle"><?=number_format($total_penyedia, 0, ',', '.') ?></th>
          <th class="text-right" style="vertical-align: middle"><?=number_format($total_swakelola, 0, ',', '.') ?></th>
          <th style="vertical-align: middle" class="text-right <?=$warnats ?>" data-toggle="tooltip" title="<?=$titlets ?>"><?=number_format($total_selisih, 0, ',', '.') ?></th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>

<div class="box box-success box-solid">
  <div class="box-header with-border">
    <h3 class="box-title">RPP</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
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
                  <?php $totalpagu_jp=0; $totalpaket_jp=0; foreach ($jp as $jp): ?>
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
                        $paket_jenis_pengadaan = $this->db->get_where('penyedia', ['jenis_pengadaan'=>$nama_jp, 'status_aktif'=>'ya', 'status_umumkan'=>'sudah']);
                        $jlh_paket_jenis_pengadaan = $paket_jenis_pengadaan->num_rows();
                        $data_paket_jenis_pengadaan = $paket_jenis_pengadaan->result_array();
                        $jlh_pagu_jenis_pengadaan=0;
                        foreach ($data_paket_jenis_pengadaan as $dpjp) {
                          $pagu_jenis_pengadaan = $dpjp['pagu_rup'];
                          $jlh_pagu_jenis_pengadaan = $jlh_pagu_jenis_pengadaan+$pagu_jenis_pengadaan;
                        }

                        $totalpaket_jp = $totalpaket_jp+$jlh_paket_jenis_pengadaan;
                        $totalpagu_jp = $totalpagu_jp+$jlh_pagu_jenis_pengadaan;
                      ?>
                    <li>
                      <span class="text"><?=$jp['nama_jp'] ?> <small>(<?=number_format($jlh_paket_jenis_pengadaan, 0, ',', '.') ?> Paket)</small></span>
                      <small class="label label-success">0%</small>
                      <div class="pull-right">
                        <span class="text-bold">Rp. <?=number_format($jlh_pagu_jenis_pengadaan, 0, ',', '.') ?>,-</span>
                      </div>
                    </li>
                  <?php endforeach ?>
                  <li>
                    <span class="text text-primary">TOTAL <small>(<?=number_format($totalpaket_jp, 0, ',', '.') ?> Paket)</small></span>
                    <div class="pull-right">
                      <span class="text-bold text-primary">Rp. <?=number_format($totalpagu_jp, 0, ',', '.') ?>,-</span>
                    </div>
                  </li>
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
                  <?php $totalpagu_mp=0; $totalpaket_mp=0; foreach ($mp as $mp): ?>
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
                        $paket_metode_pemilihan = $this->db->get_where('penyedia', ['metode_pemilihan'=>$nama_mp, 'status_aktif'=>'ya', 'status_umumkan'=>'sudah']);
                        $jlh_paket_metode_pemilihan = $paket_metode_pemilihan->num_rows();
                        $data_paket_metode_pemilihan = $paket_metode_pemilihan->result_array();
                        $jlh_pagu_metode_pemilihan=0;
                        foreach ($data_paket_metode_pemilihan as $dpmp) {
                          $pagu_metode_pemilihan = $dpmp['pagu_rup'];
                          $jlh_pagu_metode_pemilihan = $jlh_pagu_metode_pemilihan+$pagu_metode_pemilihan;
                        }

                        $totalpaket_mp = $totalpaket_mp+$jlh_paket_metode_pemilihan;
                        $totalpagu_mp = $totalpagu_mp+$jlh_pagu_metode_pemilihan;
                      ?>
                    <li>
                      <span class="text"><?=$mp['nama_mp'] ?> <small>(<?=number_format($jlh_paket_metode_pemilihan, 0, ',', '.') ?> Paket)</small></span>
                      <small class="label label-success">0%</small>
                      <div class="pull-right">
                        <span class="text-bold">Rp. <?=number_format($jlh_pagu_metode_pemilihan, 0, ',', '.') ?>,-</span>
                      </div>
                    </li>
                  <?php endforeach ?>
                  <li>
                    <span class="text text-primary">TOTAL <small>(<?=number_format($totalpaket_mp, 0, ',', '.') ?> Paket)</small></span>
                    <div class="pull-right">
                      <span class="text-bold text-primary">Rp. <?=number_format($totalpagu_mp, 0, ',', '.') ?>,-</span>
                    </div>
                  </li>
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
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
      </button>
    </div>
  </div>
  <div class="box-body table-responsive">
    <table class="table table-sm table-bordered table-striped table-hover" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th class="text-center" style="vertical-align: middle">NO</th>
          <th class="text-center" style="vertical-align: middle">ORGANISASI PERANGKAT DAERAH</th>
          <th class="text-center" style="vertical-align: middle">PAKET<br><small>(Penyedia)</small></th>
          <th class="text-center" style="vertical-align: middle">KONSTRUKSI</th>
          <th class="text-center" style="vertical-align: middle">KONSULTANSI</th>
          <th class="text-center" style="vertical-align: middle">BARANG</th>
          <th class="text-center" style="vertical-align: middle">JASA LAINNYA</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($satker->result_array() as $sk): ?>
          <?php
            $paket_penyedia = $this->rup->paket_penyedia_skpd($sk['kode_satker_asli'])->num_rows();
            $jp_konstruksi = $this->rup->jp_konstruksi_skpd($sk['kode_satker_asli'])->num_rows();
            $jp_konsultansi = $this->rup->jp_konsultansi_skpd($sk['kode_satker_asli'])->num_rows();
            $jp_barang = $this->rup->jp_barang_skpd($sk['kode_satker_asli'])->num_rows();
            $jp_jasa = $this->rup->jp_jasa_skpd($sk['kode_satker_asli'])->num_rows();
          ?>
          <tr>
            <td class="text-center" style="vertical-align: middle" width="2%"><?=$no++ ?></td>
            <td style="vertical-align: middle"><?=$sk['nama_satker'] ?></td>
            <td class="text-center" style="vertical-align: middle" width="8%">
              <?php if($paket_penyedia>0){ ?>
                <a id="tblpaketpenyediajp" style="cursor: pointer" data-id="<?=$sk['kode_satker_asli'] ?>" data-jp="semua" data-toggle="tooltip" title="<?=$paket_penyedia ?> Paket Penyedia"><?=$paket_penyedia ?></a>
              <?php }else{ ?>
                <span data-toggle="tooltip" title="Tidak Ada Paket Penyedia">-</span>
              <?php } ?>
            </td>
            <td class="text-center" style="vertical-align: middle" width="8%">
              <?php if($jp_konstruksi>0){ ?>
                <a id="tblpaketpenyediajp" style="cursor: pointer" data-id="<?=$sk['kode_satker_asli'] ?>" data-jp="konstruksi" data-toggle="tooltip" title="<?=$jp_konstruksi ?> Paket Pekerjaan Konstruksi"><?=$jp_konstruksi ?></a>
              <?php }else{ ?>
                <span data-toggle="tooltip" title="Tidak Ada Paket Pekerjaan Konstruksi" style="cursor: default">-</span>
              <?php } ?>
            </td>
            <td class="text-center" style="vertical-align: middle" width="8%">
              <?php if($jp_konsultansi>0){ ?>
                <a id="tblpaketpenyediajp" style="cursor: pointer" data-id="<?=$sk['kode_satker_asli'] ?>" data-jp="konsultansi" data-toggle="tooltip" title="<?=$jp_konsultansi ?> Paket Jasa Konsultansi"><?=$jp_konsultansi ?></a>
              <?php }else{ ?>
                <span data-toggle="tooltip" title="Tidak Ada Paket Jasa Konsultansi" style="cursor: default">-</span>
              <?php } ?>
            </td>
            <td class="text-center" style="vertical-align: middle" width="8%">
              <?php if($jp_barang>0){ ?>
                <a id="tblpaketpenyediajp" style="cursor: pointer" data-id="<?=$sk['kode_satker_asli'] ?>" data-jp="barang" data-toggle="tooltip" title="<?=$jp_barang ?> Paket Pengadaan Barang"><?=$jp_barang ?></a>
              <?php }else{ ?>
                <span data-toggle="tooltip" title="Tidak Ada Paket Pengadaan Barang" style="cursor: default">-</span>
              <?php } ?>
            </td>
            <td class="text-center" style="vertical-align: middle" width="8%">
              <?php if($jp_jasa>0){ ?>
                <a id="tblpaketpenyediajp" style="cursor: pointer" data-id="<?=$sk['kode_satker_asli'] ?>" data-jp="jasa" data-toggle="tooltip" title="<?=$jp_jasa ?> Paket Pengadaan Jasa Lainnya"><?=$jp_jasa ?></a>
              <?php }else{ ?>
                <span data-toggle="tooltip" title="Tidak Ada Paket Pengadaan Jasa Lainnya" style="cursor: default">-</span>
              <?php } ?>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>

<div class="box box-danger box-solid">
  <div class="box-header with-border">
    <h3 class="box-title">METODE PEMILIHAN & TIPE SWAKELOLA</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
      </button>
    </div>
  </div>
  <div class="box-body table-responsive">
    <table class="table table-sm table-bordered table-striped table-hover" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th rowspan="2" class="text-center" style="vertical-align: middle">NO</th>
          <th rowspan="2" class="text-center" style="vertical-align: middle">ORGANISASI PERANGKAT DAERAH</th>
          <th colspan="8" class="text-center" style="vertical-align: middle">PENYEDIA</th>
          <th colspan="5" class="text-center bg-warning" style="vertical-align: middle">SWAKELOLA</th>
        </tr>
        <tr>
          <th class="text-center" style="vertical-align: middle">PAKET</th>
          <th class="text-center" style="vertical-align: middle">SELEKSI</th>
          <th class="text-center" style="vertical-align: middle">TENDER</th>
          <th class="text-center" style="vertical-align: middle">TENDER<br>CEPAT</th>
          <th class="text-center" style="vertical-align: middle">E-PURCHASING</th>
          <th class="text-center" style="vertical-align: middle">PENUNJUKAN<br>LANGSUNG</th>
          <th class="text-center" style="vertical-align: middle">PENGADAAN<br>LANGSUNG</th>
          <th class="text-center" style="vertical-align: middle">DIKECUALIKAN</th>
          <th class="text-center bg-warning" style="vertical-align: middle">PAKET</th>
          <th class="text-center bg-warning" style="vertical-align: middle">Tipe 1</th>
          <th class="text-center bg-warning" style="vertical-align: middle">Tipe 2</th>
          <th class="text-center bg-warning" style="vertical-align: middle">Tipe 3</th>
          <th class="text-center bg-warning" style="vertical-align: middle">Tipe 4</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($satker->result_array() as $sk): ?>
          <?php
            $paket_penyedia = $this->rup->paket_penyedia_skpd($sk['kode_satker_asli'])->num_rows();
            $paket_swakelola = $this->rup->paket_swakelola_skpd($sk['kode_satker_asli'])->num_rows();
            $mp_dikecualikan = $this->rup->mp_dikecualikan_skpd($sk['kode_satker_asli'])->num_rows();
            $mp_purchasing = $this->rup->mp_purchasing_skpd($sk['kode_satker_asli'])->num_rows();
            $mp_pl = $this->rup->mp_pl_skpd($sk['kode_satker_asli'])->num_rows();
            $mp_pl2 = $this->rup->mp_pl2_skpd($sk['kode_satker_asli'])->num_rows();
            $mp_seleksi = $this->rup->mp_seleksi_skpd($sk['kode_satker_asli'])->num_rows();
            $mp_tender = $this->rup->mp_tender_skpd($sk['kode_satker_asli'])->num_rows();
            $mp_tc = $this->rup->mp_tc_skpd($sk['kode_satker_asli'])->num_rows();
            $swakelola1 = $this->rup->swakelola1_skpd($sk['kode_satker_asli'])->num_rows();
            $swakelola2 = $this->rup->swakelola2_skpd($sk['kode_satker_asli'])->num_rows();
            $swakelola3 = $this->rup->swakelola3_skpd($sk['kode_satker_asli'])->num_rows();
            $swakelola4 = $this->rup->swakelola4_skpd($sk['kode_satker_asli'])->num_rows();
          ?>
          <tr>
            <td class="text-center" style="vertical-align: middle" width="2%"><?=$no++ ?></td>
            <td style="vertical-align: middle"><?=$sk['nama_satker'] ?></td>
            <td class="text-center" style="vertical-align: middle" width="5%">
              <?php if($paket_penyedia>0){ ?>
                <a id="tblpaketpenyediamp" style="cursor: pointer" data-id="<?=$sk['kode_satker_asli'] ?>" data-mp="semuapenyedia" data-toggle="tooltip" title="<?=$paket_penyedia ?> Paket Penyedia"><?=$paket_penyedia ?></a>
              <?php }else{ ?>
                <span data-toggle="tooltip" title="Tidak Ada Paket Penyedia" style="cursor: default">-</span>
              <?php } ?>
            </td>
            <td class="text-center" style="vertical-align: middle" width="5%">
              <?php if($mp_seleksi>0){ ?>
                <a id="tblpaketpenyediamp" style="cursor: pointer" data-id="<?=$sk['kode_satker_asli'] ?>" data-mp="seleksi" data-toggle="tooltip" title="<?=$mp_seleksi ?> Paket Seleksi"><?=$mp_seleksi ?></a>
              <?php }else{ ?>
                <span data-toggle="tooltip" title="Tidak Ada Paket Seleksi" style="cursor: default">-</span>
              <?php } ?>
            </td>
            <td class="text-center" style="vertical-align: middle" width="5%">
              <?php if($mp_tender>0){ ?>
                <a id="tblpaketpenyediamp" style="cursor: pointer" data-id="<?=$sk['kode_satker_asli'] ?>" data-mp="tender" data-toggle="tooltip" title="<?=$mp_tender ?> Paket Tender"><?=$mp_tender ?></a>
              <?php }else{ ?>
                <span data-toggle="tooltip" title="Tidak Ada Paket Tender" style="cursor: default">-</span>
              <?php } ?>
            </td>
            <td class="text-center" style="vertical-align: middle" width="5%">
              <?php if($mp_tc>0){ ?>
                <a id="tblpaketpenyediamp" style="cursor: pointer" data-id="<?=$sk['kode_satker_asli'] ?>" data-mp="tc" data-toggle="tooltip" title="<?=$mp_tc ?> Paket Tender Cepat"><?=$mp_tc ?></a>
              <?php }else{ ?>
                <span data-toggle="tooltip" title="Tidak Ada Paket Tender Cepat" style="cursor: default">-</span>
              <?php } ?>
            </td>
            <td class="text-center" style="vertical-align: middle" width="5%">
              <?php if($mp_purchasing>0){ ?>
                <a id="tblpaketpenyediamp" style="cursor: pointer" data-id="<?=$sk['kode_satker_asli'] ?>" data-mp="purchasing" data-toggle="tooltip" title="<?=$mp_purchasing ?> Paket e-Purchasing"><?=$mp_purchasing ?></a>
              <?php }else{ ?>
                <span data-toggle="tooltip" title="Tidak Ada Paket e-Purchasing" style="cursor: default">-</span>
              <?php } ?>
            </td>
            <td class="text-center" style="vertical-align: middle" width="5%">
              <?php if($mp_pl2>0){ ?>
                <a id="tblpaketpenyediamp" style="cursor: pointer" data-id="<?=$sk['kode_satker_asli'] ?>" data-mp="pl2" data-toggle="tooltip" title="<?=$mp_pl2 ?> Paket Penunjukan Langsung"><?=$mp_pl2 ?></a>
              <?php }else{ ?>
                <span data-toggle="tooltip" title="Tidak Ada Paket Penunjukan Langsung" style="cursor: default">-</span>
              <?php } ?>
            </td>
            <td class="text-center" style="vertical-align: middle" width="5%">
              <?php if($mp_pl>0){ ?>
                <a id="tblpaketpenyediamp" style="cursor: pointer" data-id="<?=$sk['kode_satker_asli'] ?>" data-mp="pl" data-toggle="tooltip" title="<?=$mp_pl ?> Paket Pengadaan Langsung"><?=$mp_pl ?></a>
              <?php }else{ ?>
                <span data-toggle="tooltip" title="Tidak Ada Paket Pengadaan Langsung" style="cursor: default">-</span>
              <?php } ?>
            </td>
            <td class="text-center" style="vertical-align: middle" width="5%">
              <?php if($mp_dikecualikan>0){ ?>
                <a id="tblpaketpenyediamp" style="cursor: pointer" data-id="<?=$sk['kode_satker_asli'] ?>" data-mp="dikecualikan" data-toggle="tooltip" title="<?=$mp_dikecualikan ?> Paket Dikecualikan"><?=$mp_dikecualikan ?></a>
              <?php }else{ ?>
                <span data-toggle="tooltip" title="Tidak Ada Paket Dikecualikan" style="cursor: default">-</span>
              <?php } ?>
            </td>
            <td class="text-center bg-warning" style="vertical-align: middle" width="5%">
              <?php if($paket_swakelola>0){ ?>
                <a id="tblpaketpenyediamp" style="cursor: pointer" data-id="<?=$sk['kode_satker_asli'] ?>" data-mp="semuaswakelola" data-toggle="tooltip" title="<?=$paket_swakelola ?> Paket Swakelola"><?=$paket_swakelola ?></a>
              <?php }else{ ?>
                <span data-toggle="tooltip" title="Tidak Ada Paket Swakelola" style="cursor: default">-</span>
              <?php } ?>
            </td>
            <td class="text-center bg-warning" style="vertical-align: middle" width="5%">
              <?php if($swakelola1>0){ ?>
                <a id="tblpaketpenyediamp" style="cursor: pointer" data-id="<?=$sk['kode_satker_asli'] ?>" data-mp="swakelola1" data-toggle="tooltip" title="<?=$swakelola1 ?> Paket Swakelola Tipe 1"><?=$swakelola1 ?></a>
              <?php }else{ ?>
                <span data-toggle="tooltip" title="Tidak Ada Paket Swakelola Tipe 1" style="cursor: default">-</span>
              <?php } ?>
            </td>
            <td class="text-center bg-warning" style="vertical-align: middle" width="5%">
              <?php if($swakelola2>0){ ?>
                <a id="tblpaketpenyediamp" style="cursor: pointer" data-id="<?=$sk['kode_satker_asli'] ?>" data-mp="swakelola2" data-toggle="tooltip" title="<?=$swakelola2 ?> Paket Swakelola Tipe 2"><?=$swakelola2 ?></a>
              <?php }else{ ?>
                <span data-toggle="tooltip" title="Tidak Ada Paket Swakelola Tipe 2" style="cursor: default">-</span>
              <?php } ?>
            </td>
            <td class="text-center bg-warning" style="vertical-align: middle" width="5%">
              <?php if($swakelola3>0){ ?>
                <a id="tblpaketpenyediamp" style="cursor: pointer" data-id="<?=$sk['kode_satker_asli'] ?>" data-mp="swakelola3" data-toggle="tooltip" title="<?=$swakelola3 ?> Paket Swakelola Tipe 3"><?=$swakelola3 ?></a>
              <?php }else{ ?>
                <span data-toggle="tooltip" title="Tidak Ada Paket Swakelola Tipe 3" style="cursor: default">-</span>
              <?php } ?>
            </td>
            <td class="text-center bg-warning" style="vertical-align: middle" width="5%">
              <?php if($swakelola4>0){ ?>
                <a id="tblpaketpenyediamp" style="cursor: pointer" data-id="<?=$sk['kode_satker_asli'] ?>" data-mp="swakelola4" data-toggle="tooltip" title="<?=$swakelola4 ?> Paket Swakelola Tipe 4"><?=$swakelola4 ?></a>
              <?php }else{ ?>
                <span data-toggle="tooltip" title="Tidak Ada Paket Swakelola Tipe 4" style="cursor: default">-</span>
              <?php } ?>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>

<script src="<?php echo base_url() ?>assets/bower_components/jquery/jquery-1.10.2.js"></script>
<script>
  $(document).on("click", "#tblpaketpenyediajp", function(){
    var id = $(this).data('id');
    var jenis_pengadaan = $(this).data('jp');
    window.open("<?=base_url('beranda/jp/') ?>"+id+"/"+jenis_pengadaan, "_blank", "toolbar=yes,scrollbars=yes,resizable=no,top=auto,left=auto,width=1280,height=720");
  });

  $(document).on("click", "#tblpaketpenyediamp", function(){
    var id = $(this).data('id');
    var metode_pemilihan = $(this).data('mp');
    window.open("<?=base_url('beranda/mp/') ?>"+id+"/"+metode_pemilihan, "_blank", "toolbar=yes,scrollbars=yes,resizable=no,top=auto,left=auto,width=1280,height=720");
  });
</script>