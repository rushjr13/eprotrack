<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?=$subjudul ?></h3>
		<div class="box-tools pull-right">
      <a href="#modalSatker" data-toggle="modal" class="btn btn-box-tool" title="Perbarui"><i class="fa fa-refresh fa-spin"></i></a>
      <a href="<?=base_url('update') ?>" class="btn btn-box-tool" data-toggle="tooltip" title="Kembali"><i class="fa fa-times"></i></a>
    </div>
	</div>
	<div class="box-body table-responsive">
		<table class="table table-sm table-bordered table-striped table-hover" id="table7" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th rowspan="2" class="text-center" style="vertical-align: middle">NO</th>
					<th rowspan="2" class="text-center" style="vertical-align: middle">MAK SATKER</th>
					<th rowspan="2" style="vertical-align: middle">SATUAN KERJA</th>
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
				<?php $no=1; foreach ($satker->result_array() as $sk): ?>
					<tr>
						<td class="text-center" style="vertical-align: middle" width="3%"><?=$no++ ?></td>
						<td class="text-center" style="vertical-align: middle" width="10%"><?=$sk['kode_satker_asli'] ?></td>
						<td style="vertical-align: middle"><?=$sk['nama_satker'] ?></td>
						<?php
							// PENYEDIA
							$paket_penyedia_satker = $this->db->get_where('penyedia', ['kode_satker_asli'=>$sk['kode_satker_asli']]);
							$jlh_paket_penyedia_satker = $paket_penyedia_satker->num_rows();
							$data_paket_penyedia_satker = $paket_penyedia_satker->result_array();
							$jlh_pagu_penyedia_satker=0;
							foreach ($data_paket_penyedia_satker as $dppk) {
								$pagu_penyedia_satker = $dppk['pagu_rup'];
								$jlh_pagu_penyedia_satker = $jlh_pagu_penyedia_satker+$pagu_penyedia_satker;
							}

							// SWAKELOLA
							$paket_swakelola_satker = $this->db->get_where('swakelola', ['kode_satker_asli'=>$sk['kode_satker_asli']]);
							$jlh_paket_swakelola_satker = $paket_swakelola_satker->num_rows();
							$data_paket_swakelola_satker = $paket_swakelola_satker->result_array();
							$jlh_pagu_swakelola_satker=0;
							foreach ($data_paket_swakelola_satker as $dpsk) {
								$pagu_swakelola_satker = $dpsk['pagu_rup'];
								$jlh_pagu_swakelola_satker = $jlh_pagu_swakelola_satker+$pagu_swakelola_satker;
							}

							$jlh_paket_satker = $jlh_paket_penyedia_satker+$jlh_paket_swakelola_satker;
							$jlh_pagu_satker = $jlh_pagu_penyedia_satker+$jlh_pagu_swakelola_satker;
						?>
						<td class="text-center" style="vertical-align: middle" width="5%"><?=$jlh_paket_penyedia_satker ?></td>
						<td class="text-right" style="vertical-align: middle" width="5%"><?=number_format($jlh_pagu_penyedia_satker, 0, ',', '.') ?></td>
						<td class="text-center" style="vertical-align: middle" width="5%"><?=$jlh_paket_swakelola_satker ?></td>
						<td class="text-right" style="vertical-align: middle" width="5%"><?=number_format($jlh_pagu_swakelola_satker, 0, ',', '.') ?></td>
						<td class="text-center" style="vertical-align: middle" width="5%"><?=$jlh_paket_satker ?></td>
						<td class="text-right" style="vertical-align: middle" width="5%"><?=number_format($jlh_pagu_satker, 0, ',', '.') ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
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

<script type="text/javascript">
  function loading()
  {
    $('.modal').hide();
    $('#dialogloading').show();
  }
</script>