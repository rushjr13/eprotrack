<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><?=$penyedia['kode_rup'] ?> - <strong><?=$penyedia['nama_paket'] ?></strong></h3>
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
          <th><?=$penyedia['kldi'] ?></th>
        </tr>
        <tr>
          <td>OPD</td>
          <td class="text-center">:</td>
          <th><?=$penyedia['kode_satker_asli'] ?> - <?=$penyedia['nama_satker'] ?></th>
        </tr>
        <tr>
          <td>Program</td>
          <td class="text-center">:</td>
          <th><?=$penyedia['kode_string_program'] ?> - <?=$penyedia['program'] ?></th>
        </tr>
        <tr>
          <td>Kegiatan</td>
          <td class="text-center">:</td>
          <th><?=$penyedia['kode_string_kegiatan'] ?> - <?=$penyedia['kegiatan'] ?></th>
        </tr>
        <tr>
          <td>Paket</td>
          <td class="text-center">:</td>
          <td>
            <table class="table no-border" style="margin-bottom: 0px" width="100%" cellspacing="0">
              <tbody>
                <tr>
                  <td width="21%">MAK</td>
                  <td class="text-center" width="3%">:</td>
                  <th><?=$penyedia['mak'] ?></th>
                </tr>
                <tr>
                  <td>Nama Paket</td>
                  <td class="text-center">:</td>
                  <th><?=$penyedia['nama_paket'] ?></th>
                </tr>
                <tr>
                  <td>Volume</td>
                  <td class="text-center">:</td>
                  <th><?=$penyedia['volume'] ?></th>
                </tr>
                <tr>
                  <td>Pagu</td>
                  <td class="text-center">:</td>
                  <th>Rp. <?=number_format($penyedia['pagu_rup'], 0, ',', '.') ?>,-</th>
                </tr>
                <tr>
                  <td>Spesifikasi</td>
                  <td class="text-center">:</td>
                  <th><?=$penyedia['spesifikasi'] ?></th>
                </tr>
                <tr>
                  <td>Deskripsi</td>
                  <td class="text-center">:</td>
                  <th><?=$penyedia['deskripsi'] ?></th>
                </tr>
                <tr>
                  <td>Lokasi</td>
                  <td class="text-center">:</td>
                  <th><?=$penyedia['lokasi'] ?>, <?=$penyedia['detail_lokasi'] ?></th>
                </tr>
                <tr>
                  <td>Sumber Dana</td>
                  <td class="text-center">:</td>
                  <th><?=$penyedia['sumber_dana'] ?></th>
                </tr>
                <tr>
                  <td>Tahun Anggaran</td>
                  <td class="text-center">:</td>
                  <th>2020</th>
                </tr>
                <tr>
                  <td>Metode Pemilihan</td>
                  <td class="text-center">:</td>
                  <th><?=$penyedia['metode_pemilihan'] ?></th>
                </tr>
                <tr>
                  <td>Jenis Pengadaan</td>
                  <td class="text-center">:</td>
                  <th><?=$penyedia['jenis_pengadaan'] ?></th>
                </tr>
                <tr>
                  <td>Pagu Per Jenis Pengadaan</td>
                  <td class="text-center">:</td>
                  <th>Rp. <?=number_format($penyedia['pagu_perjenis_pengadaan'], 0, ',', '.') ?>,-</th>
                </tr>
                <tr>
                  <td>Swakelola</td>
                  <td class="text-center">:</td>
                  <th><?=$penyedia['id_swakelola']==null ? "-" : $penyedia['id_swakelola'] ?></th>
                </tr>
                <tr>
                  <td>Penyedia Dalam Swakelola</td>
                  <td class="text-center">:</td>
                  <th>
                    <div class="form-group" style="margin-bottom: 0px; margin-top: 0px;">
                      <label>
                        <input type="radio" name="penyedia_didalam_swakelola" class="flat-red" <?php if($penyedia['penyedia_didalam_swakelola']=='ya'){echo "checked";} ?>>
                        Ya
                      </label>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <label>
                        <input type="radio" name="penyedia_didalam_swakelola" class="flat-red" <?php if($penyedia['penyedia_didalam_swakelola']=='tidak'){echo "checked";} ?>>
                        Tidak
                      </label>
                    </div>
                  </th>
                </tr>
                <tr>
                  <td>Tanggal</td>
                  <td class="text-center">:</td>
                  <td>
                    <table class="table no-border" style="margin-bottom: 0px" width="100%" cellspacing="0">
                      <tbody>
                        <tr>
                          <td width="30%">Pemilihan Penyedia</td>
                          <td class="text-center" width="3%">:</td>
                          <th><?=tgl_indodatebulan($penyedia['awal_pengadaan']) ?> - <?=tgl_indodatebulan($penyedia['akhir_pengadaan']) ?></th>
                        </tr>
                        <tr>
                          <td>Pelaksanaan Kontrak</td>
                          <td class="text-center">:</td>
                          <th><?=tgl_indodatebulan($penyedia['awal_pekerjaan']) ?> - <?=tgl_indodatebulan($penyedia['akhir_pekerjaan']) ?></th>
                        </tr>
                        <tr>
                          <td>Pemanfaatan Barang/Jasa</td>
                          <td class="text-center">:</td>
                          <th><?=tgl_indodatebulan($penyedia['tanggal_kebutuhan']) ?></th>
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
          <th><?=$penyedia['nama_kpa'] ?><br><small class="text-muted">NIP : <?=$penyedia['nip_kpa'] ?></small></th>
        </tr>
        <tr>
          <td>PPK</td>
          <td class="text-center">:</td>
          <th><?=$penyedia['nama_ppk'] ?><br><small class="text-muted">NIP : <?=$penyedia['nip_ppk'] ?></small></th>
        </tr>
        <tr>
          <td>Aktif</td>
          <td class="text-center">:</td>
          <th>
            <div class="form-group" style="margin-bottom: 0px; margin-top: 0px;">
              <label>
                <input type="radio" name="status_aktif" class="flat-red" <?php if($penyedia['status_aktif']=='ya'){echo "checked";} ?>>
                Ya
              </label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                <input type="radio" name="status_aktif" class="flat-red" <?php if($penyedia['status_aktif']=='tidak'){echo "checked";} ?>>
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
                <input type="radio" name="status_umumkan" class="flat-red" <?php if($penyedia['status_umumkan']=='sudah'){echo "checked";} ?>>
                Sudah
              </label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                <input type="radio" name="status_umumkan" class="flat-red" <?php if($penyedia['status_umumkan']=='belum'){echo "checked";} ?>>
                Belum
              </label>
            </div>
          </th>
        </tr>
        <tr>
          <td>TKDN</td>
          <td class="text-center">:</td>
          <th>
            <div class="form-group" style="margin-bottom: 0px; margin-top: 0px;">
              <label>
                <input type="radio" name="tkdn" class="flat-red" <?php if($penyedia['tkdn']=='ya'){echo "checked";} ?>>
                Ya
              </label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                <input type="radio" name="tkdn" class="flat-red" <?php if($penyedia['tkdn']=='tidak'){echo "checked";} ?>>
                Tidak
              </label>
            </div>
          </th>
        </tr>
        <tr>
          <td>Pra DIPA / DPA</td>
          <td class="text-center">:</td>
          <th>
            <div class="form-group" style="margin-bottom: 0px; margin-top: 0px;">
              <label>
                <input type="radio" name="pradipa" class="flat-red" <?php if($penyedia['pradipa']=='ya'){echo "checked";} ?>>
                Ya
              </label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                <input type="radio" name="pradipa" class="flat-red" <?php if($penyedia['pradipa']=='tidak'){echo "checked";} ?>>
                Tidak
              </label>
            </div>
          </th>
        </tr>
        <tr>
          <td>UMKM</td>
          <td class="text-center">:</td>
          <th>
            <div class="form-group" style="margin-bottom: 0px; margin-top: 0px;">
              <label>
                <input type="radio" name="umkm" class="flat-red" <?php if($penyedia['umkm']=='ya'){echo "checked";} ?>>
                Ya
              </label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                <input type="radio" name="umkm" class="flat-red" <?php if($penyedia['umkm']=='tidak'){echo "checked";} ?>>
                Tidak
              </label>
            </div>
          </th>
        </tr>
        <tr>
          <td>Tanggal Pembaruan</td>
          <td class="text-center">:</td>
          <th><?=tgl_indodatewaktu($penyedia['tanggal_terakhir_di_update']) ?></th>
        </tr>
      </tbody>
    </table>
  </div>
</div>