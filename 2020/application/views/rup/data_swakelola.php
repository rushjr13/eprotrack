<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><?=$swakelola['kode_rup'] ?> - <strong><?=$swakelola['nama_paket'] ?></strong></h3>
    <div class="box-tools pull-right">
      <a href="<?=base_url('rup') ?>" class="btn btn-box-tool" data-toggle="tooltip" title="Kembali"><i class="fa fa-times"></i></a>
    </div>
  </div>
  <div class="box-body table-responsive">
    <table class="table no-border" width="100%">
      <tbody>
        <tr>
          <td width="15%">Satker</td>
          <td class="text-center" width="3%">:</td>
          <th><?=$swakelola['kldi'] ?></th>
        </tr>
        <tr>
          <td>OPD</td>
          <td class="text-center">:</td>
          <th><?=$swakelola['kode_satker_asli'] ?> - <?=$swakelola['nama_satker'] ?></th>
        </tr>
        <tr>
          <td>Program</td>
          <td class="text-center">:</td>
          <th><?=$swakelola['kode_string_program'] ?> - <?=$swakelola['program'] ?></th>
        </tr>
        <tr>
          <td>Kegiatan</td>
          <td class="text-center">:</td>
          <th><?=$swakelola['kode_string_kegiatan'] ?> - <?=$swakelola['kegiatan'] ?></th>
        </tr>
        <tr>
          <td>Tipe Swakelola</td>
          <td class="text-center">:</td>
          <th><?=$swakelola['tipe_swakelola'] ?></th>
        </tr>
        <tr>
          <td>Paket</td>
          <td class="text-center">:</td>
          <td>
            <table class="table no-border" style="margin-bottom: 0px" width="100%" cellspacing="0">
              <tbody>
                <tr>
                  <td width="13%">MAK</td>
                  <td class="text-center" width="3%">:</td>
                  <th><?=$swakelola['mak'] ?></th>
                </tr>
                <tr>
                  <td>Nama Paket</td>
                  <td class="text-center">:</td>
                  <th><?=$swakelola['nama_paket'] ?></th>
                </tr>
                <tr>
                  <td>Pagu</td>
                  <td class="text-center">:</td>
                  <th>Rp. <?=number_format($swakelola['pagu_rup'], 0, ',', '.') ?>,-</th>
                </tr>
                <tr>
                  <td>Deskripsi</td>
                  <td class="text-center">:</td>
                  <th><?=$swakelola['deskripsi'] ?></th>
                </tr>
                <tr>
                  <td>Lokasi</td>
                  <td class="text-center">:</td>
                  <th><?=$swakelola['lokasi'] ?>, <?=$swakelola['detail_lokasi'] ?></th>
                </tr>
                <tr>
                  <td>Sumber Dana</td>
                  <td class="text-center">:</td>
                  <th><?=$swakelola['sumber_dana'] ?></th>
                </tr>
                <tr>
                  <td>Tahun Anggaran</td>
                  <td class="text-center">:</td>
                  <th>2020</th>
                </tr>
                <tr>
                  <td>Tanggal</td>
                  <td class="text-center">:</td>
                  <td>
                    <table class="table no-border" style="margin-bottom: 0px" width="100%" cellspacing="0">
                      <tbody>
                        <tr>
                          <td width="16%">Awal Pekerjaan</td>
                          <td class="text-center" width="3%">:</td>
                          <th><?=tgl_indodatebulan($swakelola['awal_pekerjaan']) ?></th>
                        </tr>
                        <tr>
                          <td>Akhir Pekerjaan</td>
                          <td class="text-center">:</td>
                          <th><?=tgl_indodatebulan($swakelola['akhir_pekerjaan']) ?></th>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td>KPA</td>
          <td class="text-center">:</td>
          <th><?=$swakelola['nama_kpa'] ?><br><small class="text-muted">NIP : <?=$swakelola['nip_kpa'] ?></small></th>
        </tr>
        <tr>
          <td>PPK</td>
          <td class="text-center">:</td>
          <th><?=$swakelola['nama_ppk'] ?><br><small class="text-muted">NIP : <?=$swakelola['nip_ppk'] ?></small></th>
        </tr>
        <tr>
          <td>Aktif</td>
          <td class="text-center">:</td>
          <th>
            <div class="form-group" style="margin-bottom: 0px; margin-top: 0px;">
              <label>
                <input type="radio" name="status_aktif" class="flat-red" <?php if($swakelola['status_aktif']=='ya'){echo "checked";} ?>>
                Ya
              </label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                <input type="radio" name="status_aktif" class="flat-red" <?php if($swakelola['status_aktif']=='tidak'){echo "checked";} ?>>
                Tidak
              </label>
            </div>
          </th>
        </tr>
        <tr>
          <td>Umumkan</td>
          <td class="text-center">:</td>
          <th>
            <div class="form-group" style="margin-bottom: 0px; margin-top: 0px;">
              <label>
                <input type="radio" name="status_umumkan" class="flat-red" <?php if($swakelola['status_umumkan']=='sudah'){echo "checked";} ?>>
                Sudah
              </label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                <input type="radio" name="status_umumkan" class="flat-red" <?php if($swakelola['status_umumkan']=='belum'){echo "checked";} ?>>
                Belum
              </label>
            </div>
          </th>
        </tr>
        <tr>
          <td>Tanggal Pembaruan</td>
          <td class="text-center">:</td>
          <th><?=tgl_indodatewaktu($swakelola['tanggal_terakhir_di_update']) ?></th>
        </tr>
      </tbody>
    </table>
  </div>
</div>