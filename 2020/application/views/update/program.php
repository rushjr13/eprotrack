<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?=$subjudul ?></h3>
		<div class="box-tools pull-right">
      <a href="#modalProgram" data-toggle="modal" class="btn btn-box-tool" title="Perbarui"><i class="fa fa-refresh fa-spin"></i></a>
      <a href="<?=base_url('update') ?>" class="btn btn-box-tool" data-toggle="tooltip" title="Kembali"><i class="fa fa-times"></i></a>
    </div>
	</div>
	<div class="box-body table-responsive">
		<table class="table table-sm table-bordered table-striped table-hover" id="table2" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th rowspan="2" class="text-center" style="vertical-align: middle">NO</th>
					<th rowspan="2" class="text-center" style="vertical-align: middle">MAK PROGRAM</th>
					<th rowspan="2" style="vertical-align: middle">PROGRAM</th>
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
				<?php $no=1; foreach ($program->result_array() as $prog): ?>
					<tr>
						<td class="text-center" style="vertical-align: middle" width="3%"><?=$no++ ?></td>
						<td class="text-center" style="vertical-align: middle" width="12%"><?=$prog['kode_string_program'] ?></td>
						<td style="vertical-align: middle"><?=$prog['nama_program'] ?><br><small class="text-primary"><?=$prog['nama_satker'] ?></small></td>
						<?php
							// PENYEDIA
							$paket_penyedia_program = $this->db->get_where('penyedia', ['kode_string_program'=>$prog['kode_string_program']]);
							$jlh_paket_penyedia_program = $paket_penyedia_program->num_rows();
							$data_paket_penyedia_program = $paket_penyedia_program->result_array();
							$jlh_pagu_penyedia_program=0;
							foreach ($data_paket_penyedia_program as $dppk) {
								$pagu_penyedia_program = $dppk['pagu_rup'];
								$jlh_pagu_penyedia_program = $jlh_pagu_penyedia_program+$pagu_penyedia_program;
							}

							// SWAKELOLA
							$paket_swakelola_program = $this->db->get_where('swakelola', ['kode_string_program'=>$prog['kode_string_program']]);
							$jlh_paket_swakelola_program = $paket_swakelola_program->num_rows();
							$data_paket_swakelola_program = $paket_swakelola_program->result_array();
							$jlh_pagu_swakelola_program=0;
							foreach ($data_paket_swakelola_program as $dpsk) {
								$pagu_swakelola_program = $dpsk['pagu_rup'];
								$jlh_pagu_swakelola_program = $jlh_pagu_swakelola_program+$pagu_swakelola_program;
							}

							// JUMLAH
							$jlh_paket_program = $jlh_paket_penyedia_program+$jlh_paket_swakelola_program;
							$jlh_pagu_program = $jlh_pagu_penyedia_program+$jlh_pagu_swakelola_program;
						?>
						<td class="text-center" style="vertical-align: middle" width="5%"><?=$jlh_paket_penyedia_program ?></td>
						<td class="text-right" style="vertical-align: middle" width="5%"><?=number_format($jlh_pagu_penyedia_program, 0, ',', '.') ?></td>
						<td class="text-center" style="vertical-align: middle" width="5%"><?=$jlh_paket_swakelola_program ?></td>
						<td class="text-right" style="vertical-align: middle" width="5%"><?=number_format($jlh_pagu_swakelola_program, 0, ',', '.') ?></td>
						<td class="text-center" style="vertical-align: middle" width="5%"><?=$jlh_paket_program ?></td>
						<td class="text-right" style="vertical-align: middle" width="5%"><?=number_format($jlh_pagu_program, 0, ',', '.') ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
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

<script type="text/javascript">
  function loading()
  {
    $('.modal').hide();
    $('#dialogloading').show();
  }
</script>