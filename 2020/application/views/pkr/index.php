<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#bj" data-toggle="tab">Barang / Jasa Lainnya</a></li>
    <li><a href="#konstruksi" data-toggle="tab">Konstruksi</a></li>
    <li><a href="#konsultan" data-toggle="tab">Konsultan</a></li>
    <li class="box-tools pull-right">
      <a class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" title="Tambah Penilaian"><i class="fa fa-plus"></i></a>
      <ul class="dropdown-menu">
        <li><a href="<?=base_url('pkr/bj/tambah') ?>">Barang / Jasa Lainnya</a></li>
        <li class="divider"></li>
        <li><a href="<?=base_url('pkr/konstruksi/tambah') ?>">Pelaksana Konstruksi</a></li>
        <li class="divider"></li>
        <li><a href="<?=base_url('pkr/konsultan/rennis/tambah') ?>">Konsultan - Perencana Teknis</a></li>
        <li><a href="<?=base_url('pkr/konsultan/renstu/tambah') ?>">Konsultan - Perencana Studi</a></li>
        <li><a href="<?=base_url('pkr/konsultan/tanwas/tambah') ?>">Konsultan - Pengawas</a></li>
      </ul>
    </li>
  </ul>
  <div class="tab-content">
    <div class="active tab-pane table-responsive" id="bj">
      <?php include('bj/index.php') ?>
    </div>
    <div class="tab-pane table-responsive" id="konstruksi">
      <?php include('konstruksi/index.php') ?>
    </div>
    <div class="tab-pane table-responsive" id="konsultan">
      <?php include('konsultan/index.php') ?>
    </div>
  </div>
</div>