<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#paket" data-toggle="tab">Paket</a></li>
    <li><a href="#peserta" data-toggle="tab">Peserta Lelang</a></li>
    <li><a href="#evaluasi" data-toggle="tab">Evaluasi</a></li>
    <li class="box-tools pull-right"><a href="<?=base_url('rup') ?>" class="btn btn-box-tool" data-toggle="tooltip" title="Kembali"><i class="fa fa-times"></i></a></li>
  </ul>
  <div class="tab-content">
    <div class="active tab-pane" id="paket">
      <?php include('data_tender_paket.php') ?>
    </div>
    <div class="tab-pane" id="peserta">
      <?php include('data_tender_peserta.php') ?>
    </div>
    <div class="tab-pane table-responsive" id="evaluasi">
      <?php include('data_tender_evaluasi.php') ?>
    </div>
  </div>
</div>