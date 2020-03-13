<div class="box box-primary">
  <div class="box-body table-responsive">
  	<table class="table table-hover table-striped table-bordered" id="table2" width="100%" cellspacing="0">
  		<thead>
  			<tr>
  				<th style="vertical-align: middle" class="text-center">NO</th>
	        <th style="vertical-align: middle" class="text-center">KODE RUP</th>
					<th style="vertical-align: middle" class="text-center">NAMA PAKET</th>
          <th style="vertical-align: middle" class="text-center">PAGU (Rp)</th>
	        <th style="vertical-align: middle" class="text-center">PPK</th>
  			</tr>
  		</thead>
  		<tbody>
  			<?php $no=1; $total=0; foreach ($metode_pemilihan as $mp): ?>
        <?php
          $pagu = $mp['pagu_rup'];
          $total = $total+$pagu;

        	if($paket=="penyedia"){
        		$idtbl = "tbldatapenyedia";
        	}else{
        		$idtbl = "tbldataswakelola";
        	}
      	?>
	  			<tr>
	  				<td style="vertical-align: middle" class="text-center"  width="2%"><?=$no++ ?></td>
            <td style="vertical-align: middle" class="text-center" width="8%"><?=$mp['kode_rup'] ?></td>
	  				<td style="vertical-align: middle" ><a style="cursor: pointer" id="<?=$idtbl ?>" data-id="<?=$mp['kode_rup'] ?>"><?=$mp['nama_paket'] ?></a></td>
	  				<td style="vertical-align: middle" class="text-right"><?=number_format($mp['pagu_rup'], 0, ',', '.') ?></td>
	  				<td style="vertical-align: middle" class="text-center"><?=$mp['nama_ppk'] ?></td>
	  			</tr>
  			<?php endforeach ?>
  		</tbody>
  		<tfoot>
  			<tr>
  				<th style="vertical-align: middle" colspan="3" class="text-right">TOTAL PAGU ANGGARAN (Rp)</th>
          <th style="vertical-align: middle" class="text-right"><?=number_format($total, 0, ',', '.') ?></th>
  				<th style="vertical-align: middle" class="text-center">&nbsp;</th>
  			</tr>
  		</tfoot>
  	</table>
  </div>
</div>

<script src="<?php echo base_url() ?>assets/bower_components/jquery/jquery-1.10.2.js"></script>
<script>
  $(document).on("click", "#tbldatapenyedia", function(){
    var id = $(this).data('id');
    window.open("<?=base_url('rup/penyedia/') ?>"+id, "_blank", "toolbar=yes,scrollbars=yes,resizable=no,top=auto,left=auto,width=1280,height=720");
  });

  $(document).on("click", "#tbldataswakelola", function(){
    var id = $(this).data('id');
    window.open("<?=base_url('rup/swakelola/') ?>"+id, "_blank", "toolbar=yes,scrollbars=yes,resizable=no,top=auto,left=auto,width=1280,height=720");
  });
</script>