<div class="table-responsive">
	<table class="table table-sm table-bordered table-striped table-hover" id="table3" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th style="vertical-align: middle" class="text-center">NO</th>
        <th style="vertical-align: middle" class="text-center">KODE RUP</th>
				<th style="vertical-align: middle" class="text-center">NAMA PAKET</th>
				<th style="vertical-align: middle" class="text-center">NAMA SATKER</th>
				<th style="vertical-align: middle" class="text-center">PAGU (Rp)</th>
        <th style="vertical-align: middle" class="text-center">AKTIF</th>
        <th style="vertical-align: middle" class="text-center">UMUMKAN</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; $total=0; foreach ($swakelola as $swk): ?>
      <?php
        $pagu = $swk['pagu_rup'];
        $total = $total+$pagu;
      ?>
  			<tr>
  				<td style="vertical-align: middle" class="text-center" width="2%"><?=$no++ ?></td>
  				<td style="vertical-align: middle" class="text-center" width="5%"><?=$swk['kode_rup'] ?></td>
  				<td style="vertical-align: middle" width="41%"><a href="#" id="tbldataswakelola" data-id="<?=$swk['kode_rup'] ?>"><?=$swk['nama_paket'] ?></a></td>
          <td style="vertical-align: middle" width="41%"><?=$swk['nama_satker'] ?></td>
  				<td style="vertical-align: middle" class="text-right" width="7%"><?=number_format($swk['pagu_rup'], 0, ',', '.') ?></td>
          <td style="vertical-align: middle" class="text-center" width="4%">
            <?php if($swk['status_aktif']=='ya'){ ?>
              <a class="text-success"><i class="fa fa-check"></i></a>
            <?php }else{ ?>
              <a class="text-danger"><i class="fa fa-times"></i></a>
            <?php } ?>
          </td>
          <td style="vertical-align: middle" class="text-center" width="4%">
            <?php if($swk['status_umumkan']=='sudah'){ ?>
              <a class="text-success"><i class="fa fa-check"></i></a>
            <?php }else{ ?>
              <a class="text-danger"><i class="fa fa-times"></i></a>
            <?php } ?>
          </td>
  			</tr>
			<?php endforeach ?>
		</tbody>
    <tfoot>
      <tr>
        <th style="vertical-align: middle" colspan="4" class="text-right">TOTAL (Rp)</th>
        <th style="vertical-align: middle" class="text-right"><?=number_format($total, 0, ',', '.') ?></th>
        <th colspan="2" style="vertical-align: middle" class="text-center">&nbsp;</th>
      </tr>
    </tfoot>
	</table>
</div>

<script src="<?php echo base_url() ?>assets/bower_components/jquery/jquery-1.10.2.js"></script>
<script>
  $(document).on("click", "#tbldataswakelola", function(){
    var id = $(this).data('id');
    window.open("<?=base_url('rup/swakelola/') ?>"+id, "_blank", "toolbar=yes,scrollbars=yes,resizable=no,top=auto,left=auto,width=1280,height=720");
  });
</script>