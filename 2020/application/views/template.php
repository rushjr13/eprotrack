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
  <script type="text/javascript">
    function startTime()
    {
      var today=new Date();
      var h=today.getHours();
      var m=today.getMinutes();
      var s=today.getSeconds();
      // add a zero in front of numbers<10
      h=checkTime(h);
      m=checkTime(m);
      s=checkTime(s);
      document.getElementById('txt').innerHTML=h+":"+m+":"+s;
      t=setTimeout('startTime()',500);
    }
    function checkTime(i)
    {
      if (i<10)
    {
      i="0" + i;
    }
      return i;
    }
  </script>
</head>
<body class="hold-transition skin-red fixed layout-top-nav" onload="startTime()">
  <div class="wrapper">
    <header class="main-header">
      <nav class="navbar navbar-static-top">
        <!-- <div class="container"> -->
          <div class="navbar-header">
            <a href="<?=base_url() ?>" class="navbar-brand"><span><img src="<?=base_url('uploads/icon.png') ?>" width="25"> e-<b>Protrack</b>+</span></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="<?php if($judul=='Beranda'){echo "active";} ?>"><a href="<?=base_url() ?>">Beranda</a></li>
              <?php if($pengguna_masuk!=''){ ?>
                <li class="<?php if($judul=='Tracking'){echo "active";} ?>"><a href="<?=base_url('tracking') ?>">Tracking</a></li>
                <li class="<?php if($judul=='RUP'){echo "active";} ?>"><a href="<?=base_url('rup') ?>">RUP</a></li>
                <!-- <li class="<?php if($judul=='Penilaian Kinerja Rekanan'){echo "active";} ?>"><a href="<?=base_url('pkr') ?>">Penilaian Kinerja Rekanan</a></li> -->
                <?php if($pengguna_masuk['id_level']==1){ ?>
                  <li class="dropdown <?php if($judul=='Pengguna' || $judul=='Master'){echo "active";} ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li class="<?php if($judul=='Pengguna'){echo "active";} ?>"><a href="<?=base_url('pengguna') ?>">Pengguna</a></li>
                      <li class="divider"></li>
                      <li class="<?php if($subjudul=='Update Data' || $subjudul=='Update Data RUP Penyedia' || $subjudul=='Update Data RUP Swakelola' || $subjudul=='Update Data Tender' || $subjudul=='Update Data Satuan Kerja' || $subjudul=='Update Data Program' || $subjudul=='Update Data Kegiatan'){echo "active";} ?>"><a href="<?=base_url('update') ?>">Update Data</a></li>
                      <li class="<?php if($subjudul=='Referensi'){echo "active";} ?>"><a href="<?=base_url('referensi') ?>">Referensi</a></li>
                      <li class="divider"></li>
                      <li class="<?php if($judul=='Pengaturan'){echo "active";} ?>"><a href="<?=base_url('pengaturan') ?>">Pengaturan</a></li>
                    </ul>
                  </li>
                <?php } ?>
              <?php } ?>
            </ul>
          </div>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown notifications-menu">
                <a href="#">
                  <span><?=tgl_indoharitime(time()) ?></span> - <span id="txt"></span>
                  <?php
                    date_default_timezone_set('Asia/Makassar');
                    $a = date ("H");
                    if (($a>=1) && ($a<=11)){
                      $saat = "Pagi";
                    } else if(($a>11) && ($a<=15)) {
                      $saat = "Siang";
                    } else if (($a>15) && ($a<=18)) {
                      $saat = "Sore";
                    } else {
                      $saat = "Malam";
                    }
                    echo ' '.$saat;
                  ?>
                </a>
              </li>
              <?php if($pengguna_masuk!=''){ ?>
                <li class="dropdown notifications-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">10</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 10 notifications</li>
                    <li>
                      <ul class="menu">
                        <li>
                          <a href="#">5 new members joined today</a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer"><a href="#">View all</a></li>
                  </ul>
                </li>
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?=base_url('uploads/pengguna/'.$pengguna_masuk['foto']) ?>" class="user-image" alt="User Image">
                    <span class="hidden-xs"><?=$pengguna_masuk['nama_lengkap'] ?></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="user-header">
                      <img src="<?=base_url('uploads/pengguna/'.$pengguna_masuk['foto']) ?>" class="img-circle" alt="User Image">
                      <p>
                        <?=$pengguna_masuk['nama_lengkap'] ?> (<?=$pengguna_masuk['nama_level'] ?>)
                        <small>Aktif Sejak : <?=tgl_indolengkaptime($pengguna_masuk['tgl_masuk']) ?></small>
                      </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="<?=base_url('pengguna/profil/'.$pengguna_masuk['username']) ?>" class="btn btn-primary btn-flat"><i class="fa fa-user"></i> Profil</a>
                      </div>
                      <div class="pull-right">
                        <a href="#modalKeluar" data-toggle="modal" class="btn btn-danger btn-flat">Keluar <i class="fa fa-sign-out"></i></a>
                      </div>
                    </li>
                  </ul>
                </li>
              <?php }else{ ?>
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?=base_url('uploads/icon.png') ?>" class="user-image" alt="User Image">
                    <span class="hidden-xs">e-<strong>Protrack</strong>+ </span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="user-header">
                      <img src="<?=base_url('uploads/icon.png') ?>" class="img-circle" alt="User Image">
                      <p>e-<strong>Protrack</strong>+</p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="<?=base_url('daftar') ?>" class="btn btn-default btn-flat"><i class="fa fa-user-plus"></i> Daftar</a>
                      </div>
                      <div class="pull-right">
                        <a href="<?=base_url('masuk') ?>" class="btn btn-primary btn-flat">Masuk <i class="fa fa-sign-in"></i></a>
                      </div>
                    </li>
                  </ul>
                </li>
              <?php } ?>
            </ul>
          </div>
          <!-- /.navbar-custom-menu -->
        <!-- </div> -->
        <!-- /.container-fluid -->
      </nav>
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper">
      <!-- <div class="container"> -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?=$judul ?>
            <small><?=$subjudul ?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> <?=$judul ?></a></li>
            <li class="active"><?=$subjudul ?></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <?= $this->session->flashdata('info'); ?>
          <?=$contents ?>
        </section>
        <!-- /.content -->
      <!-- </div> -->
      <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <!-- <div class="container"> -->
        <div class="pull-right hidden-xs">
          e-<b>Protrack</b>+ 2020 || <b>Versi</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2020 <a href="#">Biro Pengadaan Sekretariat Daerah Provinsi Gorontalo</a></strong>
      <!-- </div> -->
      <!-- /.container -->
    </footer>
  </div>
  <!-- ./wrapper -->

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
<script src="<?=base_url()?>assets/bower_components/chart.js/Chart.js"></script>
<script src="<?=base_url()?>assets/bower_components/Flot/jquery.flot.js"></script>
<script src="<?=base_url()?>assets/bower_components/Flot/jquery.flot.resize.js"></script>
<script src="<?=base_url()?>assets/bower_components/Flot/jquery.flot.pie.js"></script>
<script src="<?=base_url()?>assets/bower_components/Flot/jquery.flot.categories.js"></script>
<script src="<?=base_url()?>assets/bower_components/jquery-knob/js/jquery.knob.js"></script>
<script src="<?=base_url()?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="<?=base_url()?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
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
    $('#table3').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true
    })
    $('#table4').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true
    })
    $('#table5').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true
    })
    $('#table6').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true
    })
    $('#table7').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : true
    })
    $('#table8').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true
    })
  })

  // DONAT CHART FLOT
  var program = $('#program').val()
  var kegiatan = $('#kegiatan').val()
  var penyedia = $('#penyedia').val()
  var swakelola = $('#swakelola').val()
  var belanja_pegawai = $('#belanja_pegawai').val()
  var belanja_barang_jasa = $('#belanja_barang_jasa').val()
  var belanja_modal = $('#belanja_modal').val()
  // PROGRAM KEGIATAN
  var donutDataprogkeg = [
      { label: 'Program', data: program, color: '#3c8dbc' },
      { label: 'Kegiatan', data: kegiatan, color: '#00a65a' },
    ]
  $.plot('#donut-chart-progkeg', donutDataprogkeg, {
    series: {
      pie: {
        show       : true,
        radius     : 1,
        innerRadius: 0.5,
        label      : {
          show     : true,
          radius   : 2 / 3,
          formatter: labelFormatter,
          threshold: 0.1
        }

      }
    },
    legend: {
      show: false
    }
  })
  // PROGRAM KEGIATAN
  var donutDatapyswk = [
      { label: 'Penyedia', data: penyedia, color: '#f39c12' },
      { label: 'Swakelola', data: swakelola, color: '#f56954' },
    ]
  $.plot('#donut-chart-pyswk', donutDatapyswk, {
    series: {
      pie: {
        show       : true,
        radius     : 1,
        innerRadius: 0.5,
        label      : {
          show     : true,
          radius   : 2 / 3,
          formatter: labelFormatter,
          threshold: 0.1
        }

      }
    },
    legend: {
      show: false
    }
  })
  // BELANJA
  var donutDatabelanja = [
      { label: 'Pegawai', data: belanja_pegawai, color: '#00a65a' },
      { label: 'Barang Jasa', data: belanja_barang_jasa, color: '#f39c12' },
      { label: 'Modal', data: belanja_modal, color: '#f56954' },
    ]
  $.plot('#donut-chart-belanja', donutDatabelanja, {
    series: {
      pie: {
        show       : true,
        radius     : 1,
        innerRadius: 0.5,
        label      : {
          show     : true,
          radius   : 2 / 3,
          formatter: labelFormatter,
          threshold: 0.1
        }

      }
    },
    legend: {
      show: false
    }
  })
  // END DONAT CHART FLOT

  // CUSTOM LABELFORMATER
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }

  //INITIALIZE SPARKLINE CHARTS
  "use strict";
  var apbd = $('#apbd').val();
  var apbn = $('#apbn').val();
  var jlhapb = $('#jlhapb').val();
  console.log(jlhapb);
  var persen_apbd = Math.round((apbd/jlhapb)*100);
  var persen_apbn = Math.round((apbn/jlhapb)*100);
  var bar = new Morris.Bar({
      element: 'bar-chart-apb',
      resize: true,
      data: [
        {y: 'APBD', a: persen_apbd},
        {y: 'APBN', a: persen_apbn},
      ],
      barColors: ['#00a65a'],
      xkey: 'y',
      ykeys: ['a'],
      labels: ['%'],
      hideHover: 'auto'
    });

</script>
</body>
</html>
