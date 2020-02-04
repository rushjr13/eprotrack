<div class="table-responsive">
	<table class="table table-sm table-bordered table-striped table-hover" id="table3" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th style="vertical-align: middle" class="text-center" width="3%">NO</th>
				<th style="vertical-align: middle" class="text-center" width="40%">NAMA PAKET</th>
				<th style="vertical-align: middle" class="text-center" width="40%">NAMA SATKER</th>
				<th style="vertical-align: middle" class="text-center" width="17%">PAGU (Rp)</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; $total=0; foreach ($swakelola as $swk): ?>
      <?php
        $pagu = $swk['pagu_rup'];
        $total = $total+$pagu;
      ?>
  			<tr>
  				<td style="vertical-align: middle" class="text-center"><?=$no++ ?></td>
  				<td style="vertical-align: middle"><a href="<?=base_url('rup/swakelola/'.$swk['kode_rup']) ?>"><?=$swk['nama_paket'] ?></a></td>
  				<td style="vertical-align: middle"><?=$swk['nama_satker'] ?></td>
  				<td style="vertical-align: middle" class="text-right"><?=number_format($swk['pagu_rup'], 0, ',', '.') ?></td>
  			</tr>
			<?php endforeach ?>
		</tbody>
    <tfoot>
      <tr>
        <th style="vertical-align: middle" colspan="3" class="text-right">TOTAL (Rp)</th>
        <th style="vertical-align: middle" class="text-right"><?=number_format($total, 0, ',', '.') ?></th>
      </tr>
    </tfoot>
	</table>
</div>