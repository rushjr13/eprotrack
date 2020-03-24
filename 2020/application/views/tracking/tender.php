<div class="row">
  <!-- DRAFT OPD -->
  <div class="col-sm-2">
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?=$draft ?></h3>
        <p>Draft OPD</p>
      </div>
      <div class="icon">
        <i class="fa fa-edit"></i>
      </div>
      <a href="#" class="small-box-footer">
        Lihat Paket <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>

  <!-- UKPBJ -->
  <div class="col-sm-2">
    <div class="small-box bg-blue">
      <div class="inner">
        <h3><?=$ukpbj ?></h3>
        <p>Terkirim ke UKPBJ</p>
      </div>
      <div class="icon">
        <i class="fa fa-send"></i>
      </div>
      <a href="#" class="small-box-footer">
        Lihat Paket <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>

  <!-- REVIEW POKJA -->
  <div class="col-sm-2">
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?=$review ?></h3>
        <p>Review POKJA</p>
      </div>
      <div class="icon">
        <i class="fa fa-search"></i>
      </div>
      <a href="#" class="small-box-footer">
        Lihat Paket <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>

  <!-- PROSES TENDER -->
  <div class="col-sm-2">
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?=$spse ?></h3>
        <p>Proses Tender (SPSE)</p>
      </div>
      <div class="icon">
        <i class="fa fa-retweet"></i>
      </div>
      <a href="#" class="small-box-footer">
        Lihat Paket <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>

  <!-- STATUS AKHIR -->
  <div class="col-sm-2">
    <div class="small-box bg-green">
      <div class="inner">
        <h3><?=$status_akhir ?></h3>
        <p>Status Akhir</p>
      </div>
      <div class="icon">
        <i class="fa fa-check-square-o"></i>
      </div>
      <a href="#" class="small-box-footer">
        Lihat Paket <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>

  <!-- BELUM PROSES -->
  <div class="col-sm-2">
    <div class="small-box bg-gray">
      <div class="inner">
        <h3><?=$paket_tender-$ukpbj ?>/<?=$paket_tender ?></h3>
        <?php
          if($paket_tender==0){
            $persentase=0;
          }else{
            $persentase=round((($paket_tender-$ukpbj)/$paket_tender)*100, 2);
          }
        ?>
        <p>Belum Proses <strong><small>(<?=$persentase ?>%)</small></strong></p>
      </div>
      <div class="icon">
        <i class="fa fa-exclamation-circle"></i>
      </div>
      <a href="#" class="small-box-footer">
        Lihat Paket <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
</div>