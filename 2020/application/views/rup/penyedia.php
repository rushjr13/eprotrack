<div class="table-responsive">
	<table class="table table-sm table-bordered table-striped table-hover" id="table2" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th style="vertical-align: middle" class="text-center" width="3%">NO</th>
				<th style="vertical-align: middle" class="text-center" width="38%">NAMA PAKET</th>
				<th style="vertical-align: middle" class="text-center" width="38%">NAMA SATKER</th>
        <th style="vertical-align: middle" class="text-center" width="15%">PAGU (Rp)</th>
				<th style="vertical-align: middle" class="text-center" width="6%">TENDER</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; $total=0; foreach ($penyedia as $py): ?>
      <?php
        $pagu = $py['pagu_rup'];
        $total = $total+$pagu;
      ?>
  			<tr>
  				<td style="vertical-align: middle" class="text-center"><?=$no++ ?></td>
  				<?php
  					if($py['metode_pemilihan']=='Pengadaan Langsung'){
  						$bg = 'aqua';
  					}else if($py['metode_pemilihan']=='Tender'){
              $bg = 'teal';
            }else if($py['metode_pemilihan']=='Penunjukan Langsung'){
              $bg = 'blue';
            }else{
              $bg = 'gray';
            }
  				?>
  				<td style="vertical-align: middle"><a href="<?=base_url('rup/penyedia/'.$py['kode_rup']) ?>"><?=$py['nama_paket'] ?></a><small class="label pull-right bg-<?=$bg ?>"><?=$py['metode_pemilihan'] ?></small></td>
  				<td style="vertical-align: middle"><?=$py['nama_satker'] ?></td>
          <td style="vertical-align: middle" class="text-right"><?=number_format($py['pagu_rup'], 0, ',', '.') ?></td>
  				<td style="vertical-align: middle" class="text-center">
            <?php $kode_rup = '['.$py['kode_rup'].']'; ?>
            <button class="btn btn-sm btn-flat btn-success"><i class="fa fa-check"></i></button>
          </td>
  			</tr>
			<?php endforeach ?>
		</tbody>
    <tfoot>
      <tr>
        <th style="vertical-align: middle" colspan="3" class="text-right">TOTAL (Rp)</th>
        <th style="vertical-align: middle" class="text-right"><?=number_format($total, 0, ',', '.') ?></th>
        <th style="vertical-align: middle" class="text-center">&nbsp;</th>
      </tr>
    </tfoot>
	</table>
</div>