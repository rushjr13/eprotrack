<div class="table-responsive">
	<table class="table table-sm table-bordered table-striped table-hover" id="table4" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th style="vertical-align: middle" class="text-center" width="3%">NO</th>
        <th style="vertical-align: middle" class="text-center">KODE RUP</th>
        <th style="vertical-align: middle" class="text-center">ID LELANG</th>
				<th style="vertical-align: middle" class="text-center">NAMA PAKET</th>
        <th style="vertical-align: middle" class="text-center" width="15%">HPS (Rp)</th>
        <th style="vertical-align: middle" class="text-center" width="15%">PAGU (Rp)</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; $total_pagu=0; $total_hps=0; foreach ($tender as $tdr): ?>
      <?php
        $pagu = $tdr['nilai_pagu'];
        $hps = $tdr['nilai_hps'];
        $total_pagu = $total_pagu+$pagu;
        $total_hps = $total_hps+$hps;
      ?>
  			<tr>
  				<td style="vertical-align: middle" class="text-center"><?=$no++ ?></td>
  				<td style="vertical-align: middle" class="text-center" width="5%">
            <?php
              if(!isset($tdr['id_rup'][0])){
                echo "-";
              }else{
                echo $tdr['id_rup'][0];
              }
            ?>
          </td>
          <td style="vertical-align: middle" class="text-center" width="5%"><?=$tdr['id_lelang'] ?></td>
          <td style="vertical-align: middle"><a href="#" id="tbldatatender" data-id="<?=$tdr['id_lelang'] ?>"><?=$tdr['nama_paket'] ?></a></td>
          <td style="vertical-align: middle" class="text-right"><?=number_format($hps, 0, ',', '.') ?></td>
          <td style="vertical-align: middle" class="text-right"><?=number_format($pagu, 0, ',', '.') ?></td>
  			</tr>
			<?php endforeach ?>
		</tbody>
    <tfoot>
      <tr>
        <th style="vertical-align: middle" colspan="4" class="text-right">TOTAL (Rp)</th>
        <th style="vertical-align: middle" class="text-right"><?=number_format($total_hps, 0, ',', '.') ?></th>
        <th style="vertical-align: middle" class="text-right"><?=number_format($total_pagu, 0, ',', '.') ?></th>
      </tr>
    </tfoot>
	</table>
</div>

<script src="<?php echo base_url() ?>assets/bower_components/jquery/jquery-1.10.2.js"></script>
<script>
  $(document).on("click", "#tbldatatender", function(){
    var id = $(this).data('id');
    window.open("<?=base_url('rup/tender/') ?>"+id, "_blank", "toolbar=yes,scrollbars=yes,resizable=no,top=auto,left=auto,width=1280,height=720");
  });
</script>