<table class="table table-sm table-bordered table-striped table-hover" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th rowspan="2" class="text-center" style="vertical-align: middle">NO</th>
			<th rowspan="2" class="text-center" style="vertical-align: middle">MAK</th>
			<th rowspan="2" style="vertical-align: middle">SATUAN KERJA</th>
			<th rowspan="2" class="text-center" style="vertical-align: middle">SIMDA<br>(Rp)</th>
			<th colspan="2" class="text-center" style="vertical-align: middle">PENYEDIA</th>
			<th colspan="2" class="text-center" style="vertical-align: middle">SWAKELOLA</th>
			<th colspan="2" class="text-center" style="vertical-align: middle">TOTAL</th>
			<th rowspan="2" class="text-center" style="vertical-align: middle">OPSI</th>
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
	<tbody>
		<?php $no=1; foreach ($satker->result_array() as $sk): ?>
			<tr>
				<td class="text-center" style="vertical-align: middle" width="3%"><?=$no++ ?></td>
				<td class="text-center" style="vertical-align: middle" width="5%"><?=$sk['kode_satker_asli'] ?></td>
				<td style="vertical-align: middle"><?=$sk['nama_satker'] ?></td>
				<td class="text-right" style="vertical-align: middle"><?=number_format($sk['pagu_simda'], 0, ',', '.') ?></td>
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
				<td class="text-center" style="vertical-align: middle" width="5%">
					<a href="<?=base_url('referensi/edit/satker/'.$sk['kode_satker_asli']) ?>" class="btn btn-flat btn-sm btn-info" data-toggle="tooltip" title="Ubah Anggaran SIMDA"><i class="fa fa-edit"></i></a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>