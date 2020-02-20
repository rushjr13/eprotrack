<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#jenis_pengadaan" data-toggle="tab">Jenis Pengadaan</a></li>
    <li><a href="#metode_pemilihan" data-toggle="tab">Metode Pemilihan</a></li>
    <li><a href="#satker" data-toggle="tab">Satuan Kerja</a></li>
    <li><a href="#apbd_penyedia" data-toggle="tab">APBD Penyedia</a></li>
    <li><a href="#apbd_swakelola" data-toggle="tab">APBD Swakelola</a></li>
    <li><a href="#apbn_penyedia" data-toggle="tab">APBN Penyedia</a></li>
    <li><a href="#apbn_swakelola" data-toggle="tab">APBN Swakelola</a></li>
  </ul>
  <div class="tab-content">
    <div class="active tab-pane table-responsive" id="jenis_pengadaan">
      <?php include('jenis_pengadaan.php') ?>
    </div>
    <div class="tab-pane" id="metode_pemilihan">
      <?php include('metode_pemilihan.php') ?>
    </div>
    <div class="tab-pane table-responsive" id="satker">
      <?php include('satker.php') ?>
    </div>
    <div class="tab-pane table-responsive" id="apbd_penyedia">
      <?php include('apbd_penyedia.php') ?>
    </div>
    <div class="tab-pane table-responsive" id="apbd_swakelola">
      <?php include('apbd_swakelola.php') ?>
    </div>
    <div class="tab-pane table-responsive" id="apbn_penyedia">
      <?php include('apbn_penyedia.php') ?>
    </div>
    <div class="tab-pane table-responsive" id="apbn_swakelola">
      <?php include('apbn_swakelola.php') ?>
    </div>
  </div>
</div>