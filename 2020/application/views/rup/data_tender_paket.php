<table class="table table-borderless" width="100%">
  <tbody>
    <tr>
      <td width="12%">RUP</td>
      <td width="3%" class="text-center">:</td>
      <td>
        <table class="table table-sm table-bordered table-striped" style="margin-bottom: 0px" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="10%" class="text-center">Kode RUP</th>
              <th>Nama Paket</th>
              <th width="15%" class="text-center">Sumber Dana</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center"><?php if(!isset($tender['id_rup'])){echo "-";}else{echo $tender['id_rup'];} ?></td>
              <td><?=$tender['nama_paket'] ?></td>
              <td class="text-center">APBD</td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td>Anggaran</td>
      <td class="text-center">:</td>
      <td>
        <table class="table table-sm table-bordered table-striped" style="margin-bottom: 0px" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th class="text-center" width="8%">Tahun</th>
              <th class="text-center" width="15%">Sumber Dana</th>
              <th class="text-center">Kode Anggaran</th>
              <th class="text-center" width="15%">Nilai (Rp)</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($tender['anggaran'] as $angg): ?>
              <tr>
                <td class="text-center"><?=$angg['ang_tahun'] ?></td>
                <td class="text-center"><?=$angg['sbd_id'] ?></td>
                <td class="text-center"><?=$angg['ang_koderekening'] ?></td>
                <td class="text-right"><?=number_format($angg['ang_nilai'], 0, ',', '.') ?></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td>Nama Paket</td>
      <td class="text-center">:</td>
      <th><?=$tender['nama_paket'] ?></th>
    </tr>
    <tr>
      <td>Pagu (Rp)</td>
      <td class="text-center">:</td>
      <th>Rp. <?=number_format($tender['nilai_pagu'], 0, ',', '.') ?>,-</th>
    </tr>
    <tr>
      <td>Lokasi Pekerjaan</td>
      <td class="text-center">:</td>
      <th><?=$tender['lokasi_pekerjaan'][0]['pkt_lokasi'] ?></th>
    </tr>
  </tbody>
</table>