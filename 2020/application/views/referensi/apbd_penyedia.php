<table class="table table-sm table-bordered table-hover table-striped" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th class="text-center" style="vertical-align: middle">NO</th>
			<th style="vertical-align: middle">SUMBER DANA</th>
			<th class="text-center" style="vertical-align: middle">PAKET</th>
			<th class="text-center" style="vertical-align: middle">PAGU (Rp)</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach ($apbd_penyedia as $anp): ?>
			<tr>
				<td class="text-center" style="vertical-align: middle" width="3%"><?=$no++ ?></td>
				<td style="vertical-align: middle"><?=$anp['nama_apbd_penyedia'] ?></td>
				<?php
					$paket_sumber_dana = $this->db->get_where('penyedia', ['sumber_dana'=>$anp['nama_apbd_penyedia']]);
					$jlh_paket_sumber_dana = $paket_sumber_dana->num_rows();
					$data_paket_sumber_dana = $paket_sumber_dana->result_array();
					$jlh_pagu_sumber_dana=0;
					foreach ($data_paket_sumber_dana as $dpsd) {
						$pagu_sumber_dana = $dpsd['pagu_rup'];
						$jlh_pagu_sumber_dana = $jlh_pagu_sumber_dana+$pagu_sumber_dana;
					}
				?>
				<td class="text-center" style="vertical-align: middle" width="5%"><?=$jlh_paket_sumber_dana ?></td>
				<td class="text-right" style="vertical-align: middle" width="10%"><?=number_format($jlh_pagu_sumber_dana, 0, ',', '.') ?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>