<table class="table table-sm table-bordered table-striped table-hover small" style="margin-bottom: 0px" id="table2" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th class="text-center" style="vertical-align: middle" width="4%">NO</th>
			<th class="text-center" style="vertical-align: middle">UNIT KERJA / SKPD</th>
			<th class="text-center" style="vertical-align: middle">NAMA PERUSAHAAN</th>
			<th class="text-center" style="vertical-align: middle">PAKET</th>
			<th class="text-center" style="vertical-align: middle" width="12%">NILAI KONTRAK<br>(Rp)</th>
			<th class="text-center" style="vertical-align: middle" width="12%">OPSI</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach ($pkr as $pkr): ?>
			<tr>
				<td class="text-center" style="vertical-align: middle"><?=$no++ ?></td>
				<td style="vertical-align: middle"><?=$pkr['nama_skpd'] ?></td>
				<td style="vertical-align: middle"><?=$pkr['nama_perusahaan'] ?></td>
				<td style="vertical-align: middle"><?=$pkr['nama_pekerjaan'] ?></td>
				<td class="text-right" style="vertical-align: middle"><?=number_format($pkr['nilai_pekerjaan'], 0, ',', '.') ?></td>
				<td class="text-center" style="vertical-align: middle">
					<button class="btn btn-sm btn-flat btn-default" title="Nilai"><i class="fa fa-pencil"></i></button>
					<button class="btn btn-sm btn-flat btn-info" title="Ubah"><i class="fa fa-edit"></i></button>
					<button class="btn btn-sm btn-flat btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>