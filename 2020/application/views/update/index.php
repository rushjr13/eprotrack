<div class="box box-primary">
	<div class="box-header">
		<h3 class="box-title"><?=$subjudul ?></h3>
	</div>
	<div class="box-body text-center">
		<a href="#modalPenyedia" data-toggle="modal" class="btn btn-app">
      <i class="fa fa-refresh fa-spin"></i> Perbarui Data Penyedia - SIRUP
    </a>
		<a href="#modalSwakelola" data-toggle="modal" class="btn btn-app">
      <i class="fa fa-refresh fa-spin"></i> Perbarui Data Swakelola - SIRUP
    </a>
		<a href="#modalTender" data-toggle="modal" class="btn btn-app">
      <i class="fa fa-refresh fa-spin"></i> Perbarui Data Tender - SPSE
    </a>
    <a href="#modalSatker" data-toggle="modal" class="btn btn-app">
      <i class="fa fa-refresh fa-spin"></i> Perbarui Data Satuan Kerja
    </a>
    <a href="#modalProgram" data-toggle="modal" class="btn btn-app">
      <i class="fa fa-refresh fa-spin"></i> Perbarui Data Program
    </a>
    <a href="#modalKegiatan" data-toggle="modal" class="btn btn-app">
      <i class="fa fa-refresh fa-spin"></i> Perbarui Data Kegiatan
    </a>
    <dialog id="dialogloading" style="z-index: 9999; position: absolute; vertical-align: middle;">
      <div class="box box-widget">
        <div class="inner text-center">
          <i class="fa fa-spinner fa-spin fa-3x text-primary"></i>
          <p>Mohon tunggu!<br>Pembaruan data sedang diproses.</p>
          <small class="text-danger text-bold">Jangan menutup jendela ini sampai proses pembaruan selesai!</small>
        </div>
      </div>
    </dialog>
	</div>
</div>


<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">Update 5 Data Terakhir</h3>
  </div>
  <div class="box-body no-padding">
    <ul class="nav nav-pills nav-stacked">
      <?php $no=1; foreach ($update_data_terakhir as $udt): ?>
        <li>
          <a href="#">
            <?=$no++ ?>. <?=tgl_indolengkaptime($udt['id_udt']) ?> || <strong><?=$udt['keterangan'] ?></strong><small class="label label-primary pull-right"><?=$udt['nama_lengkap'] ?></small>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
</div>

<!-- MODAL PENYEDIA -->
<div class="modal fade" id="modalPenyedia">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Perbarui Data Penyedia</h4>
      </div>
      <div class="modal-body">
        <p class="text-center">Anda yakin ingin memperbarui data <strong>Paket Penyedia</strong> dari SIRUP?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-flat btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
        <a href="<?=base_url('update/penyedia/proses') ?>" onclick="loading()"  class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh fa-spin"></i> Perbarui</a>
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

<!-- MODAL TENDER -->
<div class="modal fade" id="modalTender">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Perbarui Data Tender</h4>
      </div>
      <div class="modal-body">
        <p class="text-center">Anda yakin ingin memperbarui data <strong>Paket Tender</strong> dari SPSE?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-flat btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
        <a href="<?=base_url('update/tender/proses') ?>" onclick="loading()"  class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh fa-spin"></i> Perbarui</a>
      </div>
    </div>
  </div>
</div>

<!-- MODAL SATKER -->
<div class="modal fade" id="modalSatker">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Perbarui Data Satuan Kerja</h4>
      </div>
      <div class="modal-body">
        <p class="text-center">Anda yakin ingin memperbarui data <strong>Satuan Kerja</strong> dari SIRUP?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-flat btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
        <a href="<?=base_url('update/satker/proses') ?>" onclick="loading()"  class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh fa-spin"></i> Perbarui</a>
      </div>
    </div>
  </div>
</div>

<!-- MODAL PROGRAM -->
<div class="modal fade" id="modalProgram">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Perbarui Data Program</h4>
      </div>
      <div class="modal-body">
        <p class="text-center">Anda yakin ingin memperbarui data <strong>Program</strong> dari SIRUP?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-flat btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
        <a href="<?=base_url('update/program/proses') ?>" onclick="loading()"  class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh fa-spin"></i> Perbarui</a>
      </div>
    </div>
  </div>
</div>

<!-- MODAL KEGIATAN -->
<div class="modal fade" id="modalKegiatan">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Perbarui Data Kegiatan</h4>
      </div>
      <div class="modal-body">
        <p class="text-center">Anda yakin ingin memperbarui data <strong>Kegiatan</strong> dari SIRUP?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-flat btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
        <a href="<?=base_url('update/kegiatan/proses') ?>" onclick="loading()" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh fa-spin"></i> Perbarui</a>
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