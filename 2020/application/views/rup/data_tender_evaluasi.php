<table class="table table-sm table-bordered table-striped small" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th rowspan="2" class="text-center" style="vertical-align: middle">NO</th>
      <th rowspan="2" class="text-center" style="vertical-align: middle">REKANAN</th>
      <th colspan="2" class="text-center" style="vertical-align: middle">KUALIFIKASI</th>
      <th rowspan="2" class="text-center" style="vertical-align: middle">ADMINISTRASI</th>
      <th colspan="2" class="text-center" style="vertical-align: middle">TEKNIS</th>
      <th colspan="2" class="text-center" style="vertical-align: middle">HARGA</th>
      <th colspan="2" class="text-center" style="vertical-align: middle">PENAWARAN</th>
      <th colspan="2" class="text-center" style="vertical-align: middle">PEMENANG</th>
      <th colspan="2" class="text-center" style="vertical-align: middle">PEMBUKTIAN</th>
      <th rowspan="2" class="text-center" style="vertical-align: middle">SKOR AKHIR</th>
    </tr>
    <tr>
      <th class="text-center" style="vertical-align: middle">CEK</th>
      <th class="text-center" style="vertical-align: middle">SKOR</th>
      <th class="text-center" style="vertical-align: middle">CEK</th>
      <th class="text-center" style="vertical-align: middle">SKOR</th>
      <th class="text-center" style="vertical-align: middle">CEK</th>
      <th class="text-center" style="vertical-align: middle">SKOR</th>
      <th class="text-center" style="vertical-align: middle">HARGA (Rp)</th>
      <th class="text-center" style="vertical-align: middle">TERKOREKSI (Rp)</th>
      <th class="text-center" style="vertical-align: middle">CEK</th>
      <th class="text-center" style="vertical-align: middle">VERIF</th>
      <th class="text-center" style="vertical-align: middle">CEK</th>
      <th class="text-center" style="vertical-align: middle">SKOR</th>
    </tr>
  </thead>
  <tbody>
    <?php $no_eva=1; foreach ($tender['evaluasi'] as $eva): ?>
      <tr>
        <td class="text-center" style="vertical-align: middle" width="3%"><?=$no_eva++ ?></td>
        <td class="text-center" style="vertical-align: middle">
          <?=$eva['rkn_id'] ?><br>
          <strong><?=strtoupper($eva['rkn_nama']) ?></strong><br>
          <?=$eva['rkn_alamat'] ?><br>
          <?=$eva['rkn_npwp'] ?>
        </td>
        <td class="text-center" style="vertical-align: middle" width="3%">
          <?php
            if(!isset($eva['kualifikasi'])){
              $icon_kualifikasi = "-";
            }else{
              if($eva['kualifikasi']==1){
                $icon_kualifikasi = '<i class="fa fa-check text-success"></i>';
              }else{
                $icon_kualifikasi = '<i class="fa fa-times text-danger"></i>';
              }
            }
            echo $icon_kualifikasi;
          ?>
        </td>
        <td class="text-center" style="vertical-align: middle" width="3%">
          <?php if(!isset($eva['skor_kualifikasi'])){echo "-";}else{echo $eva['skor_kualifikasi'];} ?>
        </td>
        <td class="text-center" style="vertical-align: middle" width="3%">
          <?php
            if(!isset($eva['administrasi'])){
              $icon_administrasi = "-";
            }else{
              if($eva['administrasi']==1){
                $icon_administrasi = '<i class="fa fa-check text-success"></i>';
              }else{
                $icon_administrasi = '<i class="fa fa-times text-danger"></i>';
              }
            }
            echo $icon_administrasi;
          ?>
        </td>
        <td class="text-center" style="vertical-align: middle" width="3%">
          <?php
            if(!isset($eva['teknis'])){
              $icon_teknis = "-";
            }else{
              if($eva['teknis']==1){
                $icon_teknis = '<i class="fa fa-check text-success"></i>';
              }else{
                $icon_teknis = '<i class="fa fa-times text-danger"></i>';
              }
            }
            echo $icon_teknis;
          ?>
        </td>
        <td class="text-center" style="vertical-align: middle" width="3%">
          <?php if(!isset($eva['skor_teknis'])){echo "-";}else{echo $eva['skor_teknis'];} ?>
        </td>
        <td class="text-center" style="vertical-align: middle" width="3%">
          <?php
            if(!isset($eva['harga'])){
              $icon_harga = "-";
            }else{
              if($eva['harga']==1){
                $icon_harga = '<i class="fa fa-check text-success"></i>';
              }else{
                $icon_harga = '<i class="fa fa-times text-danger"></i>';
              }
            }
            echo $icon_harga;
          ?>
        </td>
        <td class="text-center" style="vertical-align: middle" width="3%">
          <?php if(!isset($eva['skor_harga'])){echo "-";}else{echo $eva['skor_harga'];} ?>
        </td>
        <td class="text-right" style="vertical-align: middle">
          <?php if(!isset($eva['psr_harga'])){echo "-";}else{echo number_format($eva['psr_harga'], 0, ',', '.');} ?>
        </td>
        <td class="text-right" style="vertical-align: middle">
          <?php if(!isset($eva['psr_harga_terkoreksi'])){echo "-";}else{echo number_format($eva['psr_harga_terkoreksi'], 0, ',', '.');} ?>
        </td>
        <td class="text-center" style="vertical-align: middle" width="3%">
          <?php
            if(!isset($eva['pemenang'])){
              $icon_pemenang = "-";
            }else{
              if($eva['pemenang']==1){
                $icon_pemenang = '<i class="fa fa-check text-success"></i>';
              }else{
                $icon_pemenang = '<i class="fa fa-times text-danger"></i>';
              }
            }
            echo $icon_pemenang;
          ?>
        </td>
        <td class="text-center" style="vertical-align: middle" width="3%">
          <?php
            if(!isset($eva['pemenang_verif'])){
              $icon_pemenang_verif = "-";
            }else{
              if($eva['pemenang_verif']==1){
                $icon_pemenang_verif = '<i class="fa fa-check text-success"></i>';
              }else{
                $icon_pemenang_verif = '<i class="fa fa-times text-danger"></i>';
              }
            }
            echo $icon_pemenang_verif;
          ?>
        </td>
        <td class="text-center" style="vertical-align: middle" width="3%">
          <?php
            if(!isset($eva['pembuktian'])){
              $icon_pembuktian = "-";
            }else{
              if($eva['pembuktian']==1){
                $icon_pembuktian = '<i class="fa fa-check text-success"></i>';
              }else{
                $icon_pembuktian = '<i class="fa fa-times text-danger"></i>';
              }
            }
            echo $icon_pembuktian;
          ?>
        </td>
        <td class="text-center" style="vertical-align: middle" width="3%">
          <?php if(!isset($eva['skor_pembuktian'])){echo "-";}else{echo $eva['skor_pembuktian'];} ?>
        </td>
        <td class="text-center" style="vertical-align: middle" width="3%">
          <?php if(!isset($eva['skor_akhir'])){echo "-";}else{echo $eva['skor_akhir'];} ?>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>