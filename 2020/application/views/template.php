<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>e-Protrack+ || <?=$judul ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="<?=base_url('uploads/icon.png') ?>">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/iCheck/all.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/pace/pace.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">

<div class="wrapper">
  <header class="main-header">
    <a href="<?=base_url()?>" class="logo">
      <span class="logo-mini"><img src="<?=base_url('uploads/icon.png') ?>"></span>
      <span class="logo-lg"><img src="<?=base_url('uploads/icon.png') ?>">e-<b>Protrack</b>+</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <?php if($pengguna_masuk!=""){ ?>
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-default">1</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">Anda memiliki 1 pemberitahuan baru</li>
                <li>
                  <ul class="menu">
                    <li>
                      <a href="#">5 new members joined today</a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">Lihat Semua</a></li>
              </ul>
            </li>
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php if($pengguna_masuk['foto']){ ?>
                  <img src="<?=base_url('uploads/pengguna/'.$pengguna_masuk['foto'])?>" class="user-image" alt="Foto <?=$pengguna_masuk['nama_lengkap'] ?>">
                <?php }else{ ?>
                  <img src="<?=base_url('uploads/pengguna/user.png')?>" class="user-image" alt="Foto <?=$pengguna_masuk['nama_lengkap'] ?>">
                <?php } ?>
                <span class="hidden-xs"><?=$pengguna_masuk['nama_lengkap'] ?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <?php if($pengguna_masuk['foto']){ ?>
                    <img src="<?=base_url('uploads/pengguna/'.$pengguna_masuk['foto'])?>" class="img-circle" alt="Foto Profil">
                  <?php }else{ ?>
                    <img src="<?=base_url('uploads/pengguna/user.png')?>" class="img-circle" alt="Foto Profil">
                  <?php } ?>
                  <p>
                    <?=$pengguna_masuk['nama_lengkap'] ?> (<?=$pengguna_masuk['nama_level'] ?>)
                    <small>Aktif Sejak <?=tgl_indolengkaptime($pengguna_masuk['tgl_masuk']) ?></small>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?=base_url('pengguna/profil/'.$pengguna_masuk['username']) ?>" class="btn btn-success btn-flat"><i class="fa fa-user"></i> Profil</a>
                  </div>
                  <div class="pull-right">
                    <button type="button" id="keluar" data-toggle="modal" data-target="#modalKeluar" class="btn btn-danger btn-flat">Keluar <i class="fa fa-sign-out"></i></button>
                  </div>
                </li>
              </ul>
            </li>
          <?php }else{ ?>
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?=base_url('uploads/icon.png')?>" class="user-image" alt="Logo">
                <span class="hidden-xs">e-<strong>Protrack</strong>+</span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="<?=base_url('uploads/icon.png')?>" class="img-circle" alt="Logo">
                  <p>
                    e-<strong>Protrack</strong>+
                    <small>Hari & Tanggal : <strong><?=tgl_indoharitime(time()) ?></strong></small>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?=base_url('daftar') ?>" class="btn btn-default btn-flat"><i class="fa fa-user-plus"></i> Daftar</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?=base_url('masuk') ?>" class="btn btn-success btn-flat">Masuk <i class="fa fa-sign-in"></i></a>
                  </div>
                </li>
              </ul>
            </li>
          <?php } ?>
        </ul>
      </div>
    </nav>
  </header>

  <aside class="main-sidebar">
    <section class="sidebar">
      <?php if($pengguna_masuk!=""){ ?>
        <div class="user-panel">
          <div class="pull-left image">
            <?php if($pengguna_masuk['foto']){ ?>
              <img src="<?=base_url('uploads/pengguna/'.$pengguna_masuk['foto'])?>" class="img-circle" alt="Foto Profil">
            <?php }else{ ?>
              <img src="<?=base_url('uploads/pengguna/user.png')?>" class="img-circle" alt="Foto Profil">
            <?php } ?>
          </div>
          <div class="pull-left info">
            <p><?=$pengguna_masuk['nama_lengkap'] ?></p>
            <a href="#" data-toggle="modal" data-target="#modalKeluar"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
      <?php } ?>
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU UTAMA</li>
        <li class="<?php if($judul=='Beranda'){echo 'active';} ?>"><a href="<?=base_url() ?>"><i class="fa fa-home"></i> <span>Beranda</span></a></li>

        <!-- PENGGUNA MASUK -->
        <?php if($pengguna_masuk!=""){ ?>
          <?php if($pengguna_masuk['id_level']==1){ ?>
            <li class="header">MASTER</li>
            <li class="<?php if($judul=='Pengguna'){echo 'active';} ?>"><a href="<?=base_url('pengguna') ?>"><i class="fa fa-users"></i> <span>Pengguna</span></a></li>
            <li class="treeview <?php if($judul=='Kelas' || $judul=='Kurikulum & Paket' || $judul=='Mata Pelajaran' || $judul=='Bank Soal'){echo 'active';} ?>">
              <a href="#">
                <i class="fa fa-bank"></i>
                <span>Ruang Belajar</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if($judul=='Mata Pelajaran'){echo 'active';} ?>"><a href="<?=base_url('mapel') ?>"><i class="fa fa-circle-o"></i> Mata Pelajaran</a></li>
                <li class="<?php if($judul=='Kurikulum & Paket'){echo 'active';} ?>"><a href="<?=base_url('kurikulum') ?>"><i class="fa fa-circle-o"></i> Kurikulum & Paket</a></li>
                <li class="<?php if($judul=='Kelas'){echo 'active';} ?>"><a href="<?=base_url('kelas') ?>"><i class="fa fa-circle-o"></i> Kelas</a></li>
                <li class="<?php if($judul=='Bank Soal'){echo 'active';} ?>"><a href="<?=base_url('soal') ?>"><i class="fa fa-circle-o"></i> Bank Soal</a></li>
              </ul>
            </li>
          <?php } ?>
        <?php } ?>
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <?=$judul ?>
        <small><?=$subjudul ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> <?=$judul ?></a></li>
        <?php if($subjudul!=null){ ?>
          <li class="active"><?=$subjudul ?></li>
        <?php } ?>
      </ol>
    </section>
    <section class="content">
      <?= $this->session->flashdata('info'); ?>
      <?=$contents ?>
    </section>
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <?=tgl_indoharitime(time()) ?> | <b>Versi</b> 1.0.0
    </div>
    <strong>Copyright &copy; <?=date('Y',time()) ?> <a href="https://rushjr.wordpress.com" target="_blank">Rush Jr. Studio</a>.</strong> All rights reserved.
  </footer>
</div>

<!-- MODAL KELUAR -->
<div class="modal fade" id="modalKeluar">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Konfirmasi Keluar</h4>
      </div>
      <div class="modal-body">
        <p class="text-center">Anda yakin ingin keluar dari aplikasi?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-flat btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
        <a href="<?=base_url('auth/keluar') ?>" type="button" class="btn btn-flat btn-danger">Keluar <i class="fa fa-sign-out"></i></a>
      </div>
    </div>
  </div>
</div>

<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?=base_url()?>assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?=base_url()?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?=base_url()?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="<?=base_url()?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?=base_url()?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/morris.js/morris.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="<?=base_url()?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="<?=base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/PACE/pace.min.js"></script>
<script src="<?=base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?=base_url()?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?=base_url()?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<script src="<?=base_url()?>assets/dist/js/pages/dashboard.js"></script>
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
<script>
  $(document).ajaxStart(function() {
    Pace.restart();
  });

  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })

    $('#table1').DataTable()
    $('#table2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
</body>
</html>
