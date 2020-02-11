<table class="table table-sm table-bordered table-hover table-striped" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th class="text-center" style="vertical-align: middle">NO</th>
			<th style="vertical-align: middle">JENIS PENGADAAN</th>
			<th class="text-center" style="vertical-align: middle">PAKET</th>
			<th class="text-center" style="vertical-align: middle">PAGU (Rp)</th>
			<th class="text-center" style="vertical-align: middle">OPSI</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; $total_paket=0; $total_pagu=0; foreach ($jp as $jp): ?>
			<?php
				$total_paket = $total_paket+$jp['paket_jp'];
				$total_pagu = $total_pagu+$jp['pagu_jp'];
			?>
			<tr>
				<td class="text-center" style="vertical-align: middle" width="3%"><?=$no++ ?></td>
				<td style="vertical-align: middle"><?=$jp['nama_jp'] ?></td>
				<td class="text-center" style="vertical-align: middle" width="5%"><?=number_format($jp['paket_jp'], 0, ',', '.') ?></td>
				<td class="text-right" style="vertical-align: middle" width="10%"><?=number_format($jp['pagu_jp'], 0, ',', '.') ?></td>
				<td class="text-center" style="vertical-align: middle" width="5%">
					<a href="<?=base_url('rekapitulasi/jp/edit/'.$jp['id_jp']) ?>" class="btn btn-sm btn-flat btn-info" title="Ubah"><i class="fa fa-edit"></i></a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
	<tfoot>
		<tr>
			<th colspan="2" class="text-right" style="vertical-align: middle">TOTAL</th>
			<th class="text-center" style="vertical-align: middle"><?=number_format($total_paket, 0, ',', '.') ?></th>
			<th class="text-right" style="vertical-align: middle"><?=number_format($total_pagu, 0, ',', '.') ?></th>
			<th class="text-right" style="vertical-align: middle">&nbsp;</th>
		</tr>
	</tfoot>
</table>