<div class="nav-tabs-custom" style="margin-bottom: 3px">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#rennis" data-toggle="tab">Perencana Teknis</a></li>
    <li><a href="#renstu" data-toggle="tab">Perencana Studi</a></li>
    <li><a href="#tanwas" data-toggle="tab">Pengawas</a></li>
  </ul>
  <div class="tab-content">
    <div class="active tab-pane table-responsive" id="rennis">
      <?php include('rennis/index.php') ?>
    </div>
    <div class="tab-pane table-responsive" id="renstu">
      <?php include('renstu/index.php') ?>
    </div>
    <div class="tab-pane table-responsive" id="tanwas">
      <?php include('tanwas/index.php') ?>
    </div>
  </div>
</div>