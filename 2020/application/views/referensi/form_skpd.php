<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Ubah Anggaran SIMDA <?=$satker['nama_satker'] ?></h3>
		<div class="box-tools pull-right">
      <a href="<?=base_url('referensi') ?>" class="btn btn-box-tool" data-toggle="tooltip" title="Kembali"><i class="fa fa-times"></i></a>
    </div>
	</div>
	<form class="form-horizontal" action="<?=base_url('referensi/proses') ?>" method="post">
		<div class="box-body row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="form-group">
					<label for="pegawai" class="col-sm-4 control-label">Belanja Pegawai</label>
	        <div class="col-sm-8">
	          <input type="hidden" class="form-control" id="kode_satker_asli" name="kode_satker_asli" value="<?=$satker['kode_satker_asli'] ?>" readonly>
	          <input type="hidden" class="form-control" id="nama_satker" name="nama_satker" value="<?=$satker['nama_satker'] ?>" readonly>
	          <input type="number" min="0" class="form-control" id="belanja_pegawai" name="pegawai" value="<?=$satker['pegawai'] ?>" required>
	        </div>
				</div>
				<div class="form-group">
					<label for="barang_jasa" class="col-sm-4 control-label">Belanja Barang / Jasa</label>
	        <div class="col-sm-8">
	          <input type="number" min="0" class="form-control" id="belanja_barang_jasa" name="barang_jasa" value="<?=$satker['barang_jasa'] ?>" required>
	        </div>
				</div>
				<div class="form-group">
					<label for="modal" class="col-sm-4 control-label">Belanja Modal</label>
	        <div class="col-sm-8">
	          <input type="number" min="0" class="form-control" id="belanja_modal" name="modal" value="<?=$satker['modal'] ?>" required>
	        </div>
				</div>
			</div>
		</div>
		<div class="box-footer">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
          <button type="submit" name="simpan_simda" class="btn btn-sm btn-flat btn-primary pull-right"><i class="fa fa-save"></i> Simpan</button>
          <button type="button" class="btn btn-sm btn-flat btn-success pull-right" style="margin-right: 5px" data-toggle="modal" data-target="#modalPilihskpd"><i class="fa fa-refresh"></i> Pilih</button>
				</div>
			</div>
		</div>
	</form>
</div>

<!-- MODAL PILIH SKPD -->
<div class="modal fade" id="modalPilihskpd">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Pilih Anggaran SKPD</h4>
      </div>
      <div class="modal-body table-responsive">
        <table class="table table-sm table-bordered table-striped table-hover" width="100%" cellspacing="0" id="table2">
        	<thead>
        		<tr>
        			<th class="text-center" style="vertical-align: middle">NO</th>
        			<th class="text-center" style="vertical-align: middle">SKPD</th>
        			<th class="text-center" style="vertical-align: middle">BELANJA PEGAWAI</th>
        			<th class="text-center" style="vertical-align: middle">BELANJA BARANG JASA</th>
        			<th class="text-center" style="vertical-align: middle">BELANJA MODAL</th>
        			<th class="text-center" style="vertical-align: middle">TOTAL</th>
        			<th class="text-center" style="vertical-align: middle">OPSI</th>
        		</tr>
        	</thead>
        	<tbody>
        		<?php $no=1; foreach ($skpd as $opd): ?>
	        		<tr>
	        			<td class="text-center" style="vertical-align: middle"><?=$no++ ?></td>
	        			<td style="vertical-align: middle"><?=$opd['uraian'] ?></td>
	        			<td class="text-right" style="vertical-align: middle"><?=number_format($opd['pegawai'], 0, ',', '.') ?></td>
	        			<td class="text-right" style="vertical-align: middle"><?=number_format($opd['barang_jasa'], 0, ',', '.') ?></td>
	        			<td class="text-right" style="vertical-align: middle"><?=number_format($opd['modal'], 0, ',', '.') ?></td>
	        			<td class="text-right" style="vertical-align: middle"><?=number_format($opd['total'], 0, ',', '.') ?></td>
	        			<td class="text-center" style="vertical-align: middle">
	        				<button type="button" id="tblpilihskpd" data-pegawai="<?=$opd['pegawai'] ?>" data-barang_jasa="<?=$opd['barang_jasa'] ?>" data-modal="<?=$opd['modal'] ?>" class="btn btn-sm btn-flat btn-success pull-left" data-dismiss="modal"><i class="fa fa-check"></i></button>
	        			</td>
	        		</tr>
        		<?php endforeach ?>
        	</tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url() ?>assets/bower_components/jquery/jquery-1.10.2.js"></script>
<script type="text/javascript">
  $(document).on("click", "#tblpilihskpd", function(){
    var pegawai = $(this).data('pegawai');
    var barang_jasa = $(this).data('barang_jasa');
    var modal = $(this).data('modal');
    $("#belanja_pegawai").val(pegawai);
    $("#belanja_barang_jasa").val(barang_jasa);
    $("#belanja_modal").val(modal);
  })
</script>