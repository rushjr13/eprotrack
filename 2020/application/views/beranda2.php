<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">SUMBER DANA</h3>
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
  	<div class="col-md-6">
	  	<div class="box box-success">
	  		<div class="box-header">
	  			<h3 class="box-title">PENYEDIA</h3>
					<div class="box-tools pull-right">
			      <a href="#modalPenyedia" data-toggle="modal" class="btn btn-box-tool" title="Perbarui"><i class="fa fa-refresh fa-spin"></i></a>
			    </div>
	  		</div>
		  	<div class="box-body table-responsive">
		  		<table class="table table-sm table-striped" width="100%">
		  			<tbody>
		  				<?php $sb_penyedia = $this->db->get('sb_penyedia')->result_array(); ?>
		  				<?php foreach ($sb_penyedia as $sbp): ?>
			  				<tr>
			  					<td style="vertical-align: middle"><?=$sbp['sumber_dana'] ?></td>
			  				</tr>
		  				<?php endforeach ?>
		  			</tbody>
		  		</table>
		  	</div>
	  	</div>
  	</div>
  	<div class="col-md-6">
	  	<div class="box box-danger">
	  		<div class="box-header">
	  			<h3 class="box-title">SWAKELOLA</h3>
					<div class="box-tools pull-right">
			      <a href="#modalSwakelola" data-toggle="modal" class="btn btn-box-tool" title="Perbarui"><i class="fa fa-refresh fa-spin"></i></a>
			    </div>
	  		</div>
		  	<div class="box-body table-responsive">
		  		<table class="table table-sm table-striped" width="100%">
		  			<tbody>
		  				<?php $sb_swakelola = $this->db->get('sb_swakelola')->result_array(); ?>
		  				<?php foreach ($sb_swakelola as $sbs): ?>
			  				<tr>
			  					<td style="vertical-align: middle"><?=$sbs['sumber_dana'] ?></td>
			  				</tr>
		  				<?php endforeach ?>
		  			</tbody>
		  		</table>
		  	</div>
	  	</div>

	  	Total Anggaran = <?=number_format($total_anggaran, 0,',','.') ?><br><br>
	  	APBD = <?=number_format($apbd, 0,',','.') ?><br><br>
	  	APBN = <?=number_format($apbn, 0,',','.') ?>

  	</div>
  </div>
</div>

<!-- MODAL PENYEDIA -->
<div class="modal fade" id="modalPenyedia">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Perbarui Sumber Dana Penyedia</h4>
      </div>
      <div class="modal-body">
        <p class="text-center">Anda yakin ingin memperbarui sumber dana <strong>Penyedia</strong> dari SIRUP?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-flat btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
        <a href="<?=base_url('beranda/proses/penyedia') ?>" onclick="loading()" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh fa-spin"></i> Perbarui</a>
      </div>
    </div>
  </div>
</div>

<!-- MODAL SWAKELOLA -->
<div class="modal fade" id="modalSwakelola">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Perbarui Sumber Dana Swakelola</h4>
      </div>
      <div class="modal-body">
        <p class="text-center">Anda yakin ingin memperbarui sumber dana <strong>Swakelola</strong> dari SIRUP?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-flat btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
        <a href="<?=base_url('beranda/proses/swakelola') ?>" onclick="loading()" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh fa-spin"></i> Perbarui</a>
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