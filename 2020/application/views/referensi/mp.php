<table class="table table-sm table-bordered table-hover table-striped" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th class="text-center" style="vertical-align: middle">NO</th>
			<th style="vertical-align: middle">METODE PEMILIHAN</th>
			<th class="text-center" style="vertical-align: middle">PAKET</th>
			<th class="text-center" style="vertical-align: middle">PAGU (Rp)</th>
			<th class="text-center" style="vertical-align: middle">OPSI</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach ($mp as $mp): ?>
		<?php
				$total_paket = $total_paket+$mp['paket_mp'];
				$total_pagu = $total_pagu+$mp['pagu_mp'];
			?>
			<tr>
				<td class="text-center" style="vertical-align: middle" width="3%"><?=$no++ ?></td>
				<td style="vertical-align: middle"><?=$mp['nama_mp'] ?></td>
				<td class="text-center" style="vertical-align: middle" width="5%"><?=$mp['paket_mp'] ?></td>
				<td class="text-right" style="vertical-align: middle" width="10%"><?=number_format($mp['pagu_mp'], 0, ',', '.') ?></td>
				<td class="text-center" style="vertical-align: middle" width="5%">
					<a href="<?=base_url('rekapitulasi/mp/edit/'.$mp['id_mp']) ?>" class="btn btn-sm btn-flat btn-info" title="Ubah"><i class="fa fa-edit"></i></a>
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