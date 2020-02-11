<table class="table table-sm table-bordered table-hover table-striped" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th class="text-center" style="vertical-align: middle">NO</th>
			<th style="vertical-align: middle">JENIS PENGADAAN</th>
			<th class="text-center" style="vertical-align: middle">PAKET</th>
			<th class="text-center" style="vertical-align: middle">PAGU (Rp)</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach ($jenis_pengadaan as $jp): ?>
			<tr>
				<td class="text-center" style="vertical-align: middle" width="3%"><?=$no++ ?></td>
				<td style="vertical-align: middle"><?=$jp['nama_jp'] ?></td>
				<?php
				switch ($jp['nama_jp']) {
					case '-':
						$nama_jp=null;
						break;
					
					default:
						$nama_jp=$jp['nama_jp'];
						break;
				}
					// PENYEDIA
					$paket_jenis_pengadaan = $this->db->get_where('penyedia', ['jenis_pengadaan'=>$nama_jp]);
					$jlh_paket_jenis_pengadaan = $paket_jenis_pengadaan->num_rows();
					$data_paket_jenis_pengadaan = $paket_jenis_pengadaan->result_array();
					$jlh_pagu_jenis_pengadaan=0;
					foreach ($data_paket_jenis_pengadaan as $dpjp) {
						$pagu_jenis_pengadaan = $dpjp['pagu_rup'];
						$jlh_pagu_jenis_pengadaan = $jlh_pagu_jenis_pengadaan+$pagu_jenis_pengadaan;
					}
				?>
				<td class="text-center" style="vertical-align: middle" width="5%"><?=$jlh_paket_jenis_pengadaan ?></td>
				<td class="text-right" style="vertical-align: middle" width="10%"><?=number_format($jlh_pagu_jenis_pengadaan, 0, ',', '.') ?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>