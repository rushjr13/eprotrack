<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#jenis_pengadaan" data-toggle="tab">Jenis Pengadaan</a></li>
    <li><a href="#metode_pemilihan" data-toggle="tab">Metode Pemilihan</a></li>
    <li><a href="#satker" data-toggle="tab">Satuan Kerja</a></li>
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
  </div>
</div>