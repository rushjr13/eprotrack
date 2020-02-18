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
	          <input type="number" min="0" class="form-control" id="pegawai" name="pegawai" value="<?=$satker['pegawai'] ?>" required>
	        </div>
				</div>
				<div class="form-group">
					<label for="barang_jasa" class="col-sm-4 control-label">Belanja Barang / Jasa</label>
	        <div class="col-sm-8">
	          <input type="number" min="0" class="form-control" id="barang_jasa" name="barang_jasa" value="<?=$satker['barang_jasa'] ?>" required>
	        </div>
				</div>
				<div class="form-group">
					<label for="modal" class="col-sm-4 control-label">Belanja Modal</label>
	        <div class="col-sm-8">
	          <input type="number" min="0" class="form-control" id="modal" name="modal" value="<?=$satker['modal'] ?>" required>
	        </div>
				</div>
			</div>
		</div>
		<div class="box-footer">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
          <button type="submit" name="simpan_simda" class="btn btn-sm btn-flat btn-primary pull-right"><i class="fa fa-save"></i> Simpan</button>
				</div>
			</div>
		</div>
	</form>
</div>