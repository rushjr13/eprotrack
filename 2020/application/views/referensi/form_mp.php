<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Ubah Metode Pemilihan <?=$mp['nama_mp'] ?></h3>
		<div class="box-tools pull-right">
      <a href="<?=base_url('rekapitulasi') ?>" class="btn btn-box-tool" data-toggle="tooltip" title="Kembali"><i class="fa fa-times"></i></a>
    </div>
	</div>
	<form class="form-horizontal" action="<?=base_url('referensi/proses') ?>" method="post">
		<div class="box-body row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="form-group">
					<label for="nama_mp" class="col-sm-4 control-label">Metode Pemilihan</label>
	        <div class="col-sm-8">
	          <input type="hidden" class="form-control" id="id_mp" name="id_mp" value="<?=$mp['id_mp'] ?>" readonly>
	          <input type="text" class="form-control" id="nama_mp" name="nama_mp" value="<?=$mp['nama_mp'] ?>" readonly>
	        </div>
				</div>
				<div class="form-group">
					<label for="paket_mp" class="col-sm-4 control-label">Paket Metode Pemilihan</label>
	        <div class="col-sm-8">
	          <input type="number" min="0" class="form-control" id="paket_mp" name="paket_mp" value="<?=$mp['paket_mp'] ?>" required>
	        </div>
				</div>
				<div class="form-group">
					<label for="pagu_mp" class="col-sm-4 control-label">Pagu Metode Pemilihan</label>
	        <div class="col-sm-8">
	          <input type="number" min="0" class="form-control" id="pagu_mp" name="pagu_mp" value="<?=$mp['pagu_mp'] ?>" required>
	        </div>
				</div>
			</div>
		</div>
		<div class="box-footer">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
          <button type="submit" name="simpan_mp" class="btn btn-sm btn-flat btn-primary pull-right"><i class="fa fa-save"></i> Simpan</button>
				</div>
			</div>
		</div>
	</form>
</div>