<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?=$subjudul ?></h3>
		<div class="box-tools pull-right">
      <a href="#modalSwakelola" data-toggle="modal" class="btn btn-box-tool" title="Perbarui"><i class="fa fa-refresh fa-spin"></i></a>
      <a href="<?=base_url('update') ?>" class="btn btn-box-tool" data-toggle="tooltip" title="Kembali"><i class="fa fa-times"></i></a>
    </div>
	</div>
	<dialog id="dialogloading" style="z-index: 9999; position: absolute; vertical-align: middle;">
      <div class="box box-widget">
        <div class="inner text-center">
          <i class="fa fa-spinner fa-spin fa-3x text-primary"></i>
          <p>Mohon tunggu!<br>Pembaruan data sedang diproses.</p>
          <small class="text-danger text-bold">Jangan menutup jendela ini sampai proses pembaruan selesai!</small>
        </div>
      </div>
    </dialog>
	<div class="box-body row">
	 <!-- JSON -->
	  <div class="col-md-6 col-xs-12">
	    <div class="small-box bg-aqua">
	      <div class="inner">
	        <?php
	        	$jlh=1;
	        	foreach ($json as $data) {
	        		$jlh++;
	        	}
	        ?>
	        <h3><?=number_format($jlh-1, 0, ',', '.') ?> Data</h3>
	        <h4 class="text-bold">JSON</h4>
	      </div>
	      <div class="icon">
	        <span class="text-bold">{}</span>
	      </div>
	    </div>
	  </div>

	  <!-- DATABASE -->
	  <div class="col-md-6 col-xs-12">
	    <div class="small-box bg-green">
	      <div class="inner">
	        <h3><?=number_format($db->num_rows(), 0, ',', '.') ?> Data</h3>
	        <h4 class="text-bold">DATABASE</h4>
	      </div>
	      <div class="icon">
	        <i class="fa fa-database"></i>
	      </div>
	    </div>
	  </div>
	</div>
</div>

<!-- MODAL SWAKELOLA -->
<div class="modal fade" id="modalSwakelola">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Perbarui Data Swakelola</h4>
      </div>
      <div class="modal-body">
        <p class="text-center">Anda yakin ingin memperbarui data <strong>Paket Swakelola</strong> dari SIRUP?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-flat btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
        <a href="<?=base_url('update/swakelola/proses') ?>" onclick="loading()"  class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh fa-spin"></i> Perbarui</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function loading()
  {
    $('.modal').hide();
    $('#dialogloading').show();
  }
</script>