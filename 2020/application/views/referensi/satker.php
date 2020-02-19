<table class="table table-sm table-bordered table-striped table-hover" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th class="text-center" style="vertical-align: middle">NO</th>
          <th class="text-center" style="vertical-align: middle">OPD</th>
          <th class="text-center" style="vertical-align: middle">SIMDA Keuangan (Rp)<br><small>(Belanja Langsung)</small></th>
          <th class="text-center" style="vertical-align: middle">SIRUP LKPP (Rp)<br><small>(Tayang RUP)</small></th>
          <th class="text-center" style="vertical-align: middle">SELISIH (Rp)</th>
          <th class="text-center" style="vertical-align: middle">OPSI</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($satker->result_array() as $sk): ?>
          <tr>
            <td width="3%" style="vertical-align: middle" class="text-center"><?=$no++ ?></td>
            <td style="vertical-align: middle"><?=$sk['nama_satker'] ?></td>
            <td width="15%" style="vertical-align: middle" class="text-right"><?=number_format($sk['pagu_simda'], 0, ',', '.') ?></td>
            <?php
              // PENYEDIA
              $paket_penyedia_satker = $this->db->get_where('penyedia', ['kode_satker_asli'=>$sk['kode_satker_asli']]);
              $jlh_paket_penyedia_satker = $paket_penyedia_satker->num_rows();
              $data_paket_penyedia_satker = $paket_penyedia_satker->result_array();
              $jlh_pagu_penyedia_satker=0;
              foreach ($data_paket_penyedia_satker as $dppk) {
                $pagu_penyedia_satker = $dppk['pagu_rup'];
                $jlh_pagu_penyedia_satker = $jlh_pagu_penyedia_satker+$pagu_penyedia_satker;
              }

              // SWAKELOLA
              $paket_swakelola_satker = $this->db->get_where('swakelola', ['kode_satker_asli'=>$sk['kode_satker_asli']]);
              $jlh_paket_swakelola_satker = $paket_swakelola_satker->num_rows();
              $data_paket_swakelola_satker = $paket_swakelola_satker->result_array();
              $jlh_pagu_swakelola_satker=0;
              foreach ($data_paket_swakelola_satker as $dpsk) {
                $pagu_swakelola_satker = $dpsk['pagu_rup'];
                $jlh_pagu_swakelola_satker = $jlh_pagu_swakelola_satker+$pagu_swakelola_satker;
              }

              $jlh_paket_satker = $jlh_paket_penyedia_satker+$jlh_paket_swakelola_satker;
              $jlh_pagu_satker = $jlh_pagu_penyedia_satker+$jlh_pagu_swakelola_satker;
            ?>
            <td width="15%" style="vertical-align: middle" class="text-right"><?=number_format($jlh_pagu_satker, 0, ',', '.') ?></td>
            <td width="15%" style="vertical-align: middle" class="text-right"><?=number_format(($sk['pagu_simda']-$jlh_pagu_satker), 0, ',', '.') ?></td>
            <td style="vertical-align: middle" class="text-center">
              <a href="<?=base_url('referensi/edit/satker/'.$sk['kode_satker_asli']) ?>" class="btn btn-sm btn-flat btn-info" data-toggle="tooltip" title="Ubah Anggaran SIMDA"><i class="fa fa-edit"></i></a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>