<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#umum" data-toggle="tab">Umum</a></li>
    <li><a href="#sosmed" data-toggle="tab">Sosial Media</a></li>
    <li><a href="#jaringan" data-toggle="tab">Jaringan</a></li>
  </ul>
  <div class="tab-content">
    <div class="active tab-pane" id="umum">
      Pengaturan Umum
    </div>
    <div class="tab-pane" id="sosmed">
      Pengaturan Sosial Media
    </div>
    <div class="tab-pane" id="jaringan">
      <div class="row">
        <div class="col-sm-3"></div> 
        <div class="col-sm-6">
          <form class="form-horizontal" action="<?=base_url('pengaturan/proses/') ?>" method="post">
            <div class="box-body">
              <div class="form-group">
                <label for="jaringan" class="col-sm-2 control-label">Jaringan</label>
                <div class="col-sm-10">
                  <select class="form-control" name="jaringan" id="jaringan" required>
                    <option value="online" <?php if($pengaturan['jaringan']=='online'){echo 'selected';} ?>>Online</option>
                    <option value="offline" <?php if($pengaturan['jaringan']=='offline'){echo 'selected';} ?>>Offline</option>
                  </select>
                </div>
              </div>
              <button type="submit" name="simpanjaringan" class="btn btn-sm btn-flat btn-primary pull-right">Simpan</button>
            </div>
          </form>
        </div> 
      </div>
    </div>
  </div>
</div>