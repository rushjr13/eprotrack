<table class="table table-borderless" width="100%">
  <tbody>
    <tr>
      <td width="15%">Jumlah Peserta</td>
      <td width="3%" class="text-center">:</td>
      <th><?=$tender['jumlah_peserta'] ?><th>
    </tr>
    <tr>
      <td>Jadwal</td>
      <td class="text-center">:</td>
      <td>
        <table class="table table-sm table-bordered table-striped" style="margin-bottom: 0px" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Jenis</th>
              <th class="text-center">Tanggal Awal</th>
              <th class="text-center">Tanggal Akhir</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($tender['jadwal'] as $jdw): ?>
              <?php switch ($jdw['akt_jenis']) {
                case 'UMUM_PRAKUALIFIKASI':
                  $jenis = "Prakualifikasi";
                  break;

                case 'PENGUMUMAN_LELANG':
                  $jenis = "Pengumuman Lelang";
                  break;

                case 'AMBIL_DOKUMEN':
                  $jenis = "Ambil Dokumen";
                  break;

                case 'AMBIL_DOK_PRA':
                  $jenis = "Ambil Dokumen Prakualifikasi";
                  break;

                case 'PENJELASAN_PRA':
                  $jenis = "Penjelasan Prakualifikasi";
                  break;

                case 'PEMASUKAN_DOK_PRA':
                  $jenis = "Pemasukan Dokumen Prakualifikasi";
                  break;

                case 'EVALUASI_DOK_PRA':
                  $jenis = "Evaluasi Dokumen Prakualifikasi";
                  break;

                case 'VERIFIKASI_KUALIFIKASI':
                  $jenis = "Verifikasi Kualifikasi";
                  break;

                case 'PENETAPAN_HASIL_PRA':
                  $jenis = "Penetapan Hasil Prakualifikasi";
                  break;

                case 'PENGUMUMAN_HASIL_PRA':
                  $jenis = "Pengumuman Hasil Prakualifikasi";
                  break;

                case 'SANGGAH_PRA':
                  $jenis = "Sanggah Prakualifikasi";
                  break;

                case 'AMBIL_DOKUMEN_PEMILIHAN':
                  $jenis = "Ambil Dokumen Pemilihan";
                  break;

                case 'PENJELASAN':
                  $jenis = "Penjelasan";
                  break;

                case 'PEMASUKAN_PENAWARAN':
                  $jenis = "Pemasukan Penawaran";
                  break;

                case 'PEMBUKAAN_PENAWARAN':
                  $jenis = "Pembukaan Penawaran";
                  break;

                case 'EVALUASI_PENAWARAN_KUALIFIKASI':
                  $jenis = "Evaluasi Penawaran Kualifikasi";
                  break;

                case 'PEMBUKAAN_DAN_EVALUASI_PENAWARAN_ADM_TEKNIS':
                  $jenis = "Pembukaan dan Evaluasi Penawaran Administrasi Teknis";
                  break;

                case 'PENGUMUMAN_PEMENANG_ADM_TEKNIS':
                  $jenis = "Pengumuman Pemenang Administrasi Teknis";
                  break;

                case 'PEMBUKAAN_DAN_EVALUASI_PENAWARAN_BIAYA':
                  $jenis = "Pembukaan dan Evaluasi Penawaran Biaya";
                  break;

                case 'PENETAPAN_PEMENANG_AKHIR':
                  $jenis = "Penetapan Pemenang Akhir";
                  break;

                case 'PENGUMUMAN_PEMENANG_AKHIR':
                  $jenis = "Pengumuman Pemenang Akhir";
                  break;

                case 'SANGGAH':
                  $jenis = "Sanggah";
                  break;

                case 'KLARIFIKASI_TEKNIS_BIAYA':
                  $jenis = "Klarifikasi Teknis Biaya";
                  break;

                case 'PENUNJUKAN_PEMENANG':
                  $jenis = "Penunjukan Pemenang";
                  break;

                case 'TANDATANGAN_KONTRAK':
                  $jenis = "Tanda Tangan Kontrak";
                  break;
                
                default:
                  $jenis = $jdw['akt_jenis'];
                  break;
              } ?>
              <tr>
                <td><?=$jenis ?></td>
                <td class="text-center"><?=tgl_indodatewaktu($jdw['dtj_tglawal']) ?></td>
                <td class="text-center"><?=tgl_indodatewaktu($jdw['dtj_tglakhir']) ?></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td>Metode Pemilihan</td>
      <td class="text-center">:</td>
      <th><?=ucfirst($tender['mtd_pemilihan']) ?><th>
    </tr>
    <tr>
      <td>Metode Evaluasi</td>
      <td class="text-center">:</td>
      <th><?=ucfirst($tender['mtd_evaluasi']) ?><th>
    </tr>
    <tr>
      <td>Metode Pembayaran</td>
      <td class="text-center">:</td>
      <?php switch ($tender['lls_kontrak_pembayaran']) {
        case 'LUMP_SUM':
          $metode_bayar = "Lump Sum";
          break;

        case 'HARGA_SATUAN':
          $metode_bayar = "Harga Satuan";
          break;
        
        default:
          $metode_bayar = $tender['lls_kontrak_pembayaran'];
          break;
      } ?>
      <th><?=$metode_bayar ?><th>
    </tr>
  </tbody>
</table>