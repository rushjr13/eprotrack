<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Ubah Jenis Pengadaan <?=$jp['nama_jp'] ?></h3>
		<div class="box-tools pull-right">
      <a href="<?=base_url('rekapitulasi') ?>" class="btn btn-box-tool" data-toggle="tooltip" title="Kembali"><i class="fa fa-times"></i></a>
    </div>
	</div>
	<form class="form-horizontal" action="<?=base_url('referensi/proses') ?>" method="post">
		<div class="box-body row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="form-group">
					<label for="nama_jp" class="col-sm-4 control-label">Jenis Pengadaan</label>
	        <div class="col-sm-8">
	          <input type="hidden" class="form-control" id="id_jp" name="id_jp" value="<?=$jp['id_jp'] ?>" readonly>
	          <input type="text" class="form-control" id="nama_jp" name="nama_jp" value="<?=$jp['nama_jp'] ?>" readonly>
	        </div>
				</div>
				<div class="form-group">
					<label for="paket_jp" class="col-sm-4 control-label">Paket Jenis Pengadaan</label>
	        <div class="col-sm-8">
	          <input type="number" min="0" class="form-control" id="paket_jp" name="paket_jp" value="<?=$jp['paket_jp'] ?>" required>
	        </div>
				</div>
				<div class="form-group">
					<label for="pagu_jp" class="col-sm-4 control-label">Pagu Jenis Pengadaan</label>
	        <div class="col-sm-8">
	          <input type="number" min="0" class="form-control" id="pagu_jp" name="pagu_jp" value="<?=$jp['pagu_jp'] ?>" required>
	        </div>
				</div>
			</div>
		</div>
		<div class="box-footer">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
          <button type="submit" name="simpan_jp" class="btn btn-sm btn-flat btn-primary pull-right"><i class="fa fa-save"></i> Simpan</button>
				</div>
			</div>
		</div>
	</form>
</div>