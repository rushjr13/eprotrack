<table class="table table-sm table-bordered table-hover table-striped" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th class="text-center" style="vertical-align: middle">NO</th>
			<th style="vertical-align: middle">METODE PEMILIHAN</th>
			<th class="text-center" style="vertical-align: middle">PAKET</th>
			<th class="text-center" style="vertical-align: middle">PAGU (Rp)</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach ($metode_pemilihan as $mp): ?>
			<tr>
				<td class="text-center" style="vertical-align: middle" width="3%"><?=$no++ ?></td>
				<td style="vertical-align: middle"><?=$mp['nama_mp'] ?></td>
				<?php
				switch ($mp['nama_mp']) {
					case '-':
						$nama_mp=null;
						break;
					
					default:
						$nama_mp=$mp['nama_mp'];
						break;
				}
					// PENYEDIA
					$paket_metode_pemilihan = $this->db->get_where('penyedia', ['metode_pemilihan'=>$nama_mp]);
					$jlh_paket_metode_pemilihan = $paket_metode_pemilihan->num_rows();
					$data_paket_metode_pemilihan = $paket_metode_pemilihan->result_array();
					$jlh_pagu_metode_pemilihan=0;
					foreach ($data_paket_metode_pemilihan as $dpmp) {
						$pagu_metode_pemilihan = $dpmp['pagu_rup'];
						$jlh_pagu_metode_pemilihan = $jlh_pagu_metode_pemilihan+$pagu_metode_pemilihan;
					}
				?>
				<td class="text-center" style="vertical-align: middle" width="5%"><?=$jlh_paket_metode_pemilihan ?></td>
				<td class="text-right" style="vertical-align: middle" width="10%"><?=number_format($jlh_pagu_metode_pemilihan, 0, ',', '.') ?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>