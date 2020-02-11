<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?=$subjudul ?></h3>
		<div class="box-tools pull-right">
      <a href="#modalKegiatan" data-toggle="modal" class="btn btn-box-tool" title="Perbarui"><i class="fa fa-refresh fa-spin"></i></a>
      <a href="<?=base_url('update') ?>" class="btn btn-box-tool" data-toggle="tooltip" title="Kembali"><i class="fa fa-times"></i></a>
    </div>
	</div>
	<div class="box-body table-responsive">
		<table class="table table-sm table-bordered table-striped table-hover" id="table2" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th rowspan="2" class="text-center" style="vertical-align: middle">NO</th>
					<th rowspan="2" class="text-center" style="vertical-align: middle">MAK KEGIATAN</th>
					<th rowspan="2" style="vertical-align: middle">KEGIATAN</th>
					<th colspan="2" class="text-center" style="vertical-align: middle">PENYEDIA</th>
					<th colspan="2" class="text-center" style="vertical-align: middle">SWAKELOLA</th>
					<th colspan="2" class="text-center" style="vertical-align: middle">TOTAL</th>
				</tr>
				<tr>
					<th class="text-center" style="vertical-align: middle">PAKET</th>
					<th class="text-center" style="vertical-align: middle">PAGU (Rp)</th>
					<th class="text-center" style="vertical-align: middle">PAKET</th>
					<th class="text-center" style="vertical-align: middle">PAGU (Rp)</th>
					<th class="text-center" style="vertical-align: middle">PAKET</th>
					<th class="text-center" style="vertical-align: middle">PAGU (Rp)</th>
				</tr>
			</thead>
			<dialog id="dialogloading" style="z-index: 9999; position: absolute; vertical-align: middle;">
	      <div class="box box-widget">
	        <div class="inner text-center">
	          <i class="fa fa-spinner fa-spin fa-3x text-primary"></i>
	          <p>Mohon tunggu!<br>Pembaruan data sedang diproses.</p>
	          <small class="text-danger text-bold">Jangan menutup jendela ini sampai proses pembaruan selesai!</small>
	        </div>
	      </div>
	    </dialog>
			<tbody>
				<?php $no=1; $total_paket=0; $total_pagu=0; foreach ($kegiatan->result_array() as $keg): ?>
					<tr>
						<td class="text-center" style="vertical-align: middle" width="3%"><?=$no++ ?></td>
						<td class="text-center" style="vertical-align: middle" width="13%"><?=$keg['kode_string_kegiatan'] ?></td>
						<td style="vertical-align: middle"><?=$keg['nama_kegiatan'] ?><br><small class="text-primary"><?=$keg['nama_program'] ?><br><?=$keg['nama_satker'] ?></small></td>
						<?php
							// PENYEDIA
							$paket_penyedia_kegiatan = $this->db->get_where('penyedia', ['kode_string_kegiatan'=>$keg['kode_string_kegiatan']]);
							$jlh_paket_penyedia_kegiatan = $paket_penyedia_kegiatan->num_rows();
							$data_paket_penyedia_kegiatan = $paket_penyedia_kegiatan->result_array();
							$jlh_pagu_penyedia_kegiatan=0;
							foreach ($data_paket_penyedia_kegiatan as $dppk) {
								$pagu_penyedia_kegiatan = $dppk['pagu_rup'];
								$jlh_pagu_penyedia_kegiatan = $jlh_pagu_penyedia_kegiatan+$pagu_penyedia_kegiatan;
							}

							// SWAKELOLA
							$paket_swakelola_kegiatan = $this->db->get_where('swakelola', ['kode_string_kegiatan'=>$keg['kode_string_kegiatan']]);
							$jlh_paket_swakelola_kegiatan = $paket_swakelola_kegiatan->num_rows();
							$data_paket_swakelola_kegiatan = $paket_swakelola_kegiatan->result_array();
							$jlh_pagu_swakelola_kegiatan=0;
							foreach ($data_paket_swakelola_kegiatan as $dpsk) {
								$pagu_swakelola_kegiatan = $dpsk['pagu_rup'];
								$jlh_pagu_swakelola_kegiatan = $jlh_pagu_swakelola_kegiatan+$pagu_swakelola_kegiatan;
							}

							// JUMLAH
							$jlh_paket_kegiatan = $jlh_paket_penyedia_kegiatan+$jlh_paket_swakelola_kegiatan;
							$jlh_pagu_kegiatan = $jlh_pagu_penyedia_kegiatan+$jlh_pagu_swakelola_kegiatan;
						?>
						<td class="text-center" style="vertical-align: middle" width="5%"><?=number_format($jlh_paket_penyedia_kegiatan, 0, ',', '.') ?></td>
						<td class="text-right" style="vertical-align: middle" width="5%"><?=number_format($jlh_pagu_penyedia_kegiatan, 0, ',', '.') ?></td>
						<td class="text-center" style="vertical-align: middle" width="5%"><?=number_format($jlh_paket_swakelola_kegiatan, 0, ',', '.') ?></td>
						<td class="text-right" style="vertical-align: middle" width="5%"><?=number_format($jlh_pagu_swakelola_kegiatan, 0, ',', '.') ?></td>
						<td class="text-center" style="vertical-align: middle" width="5%"><?=number_format($jlh_paket_kegiatan, 0, ',', '.') ?></td>
						<td class="text-right" style="vertical-align: middle" width="5%"><?=number_format($jlh_pagu_kegiatan, 0, ',', '.') ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
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