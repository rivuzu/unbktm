
  <div class="col-lg-7 col-md-9 col-sm-9" style="margin-top:30px; ">
    <div class="panel panel-success" >
      <div class="panel-heading">Daftar Ujian / Tes</div>
      <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th width="5%">No</th>
                <th width="30%">Nama Tes</th>
                <th width="20%">Mapel</th>
                <th width="11%">Jml Soal</th>
                <th width="10%">Waktu</th>
                <th width="15%">Status</th>
                <th width="15%">Aksi</th>
              </tr>
            </thead>

            <tbody>
              <?php
                if (!empty($data)) {
                  $no = 1;
                  foreach ($data as $d) {

                    echo '<tr>
                          <td class="ctr">'.$no.'</td>
                          <td>'.$d->nama_ujian.'</td>
                          <td>'.$d->nmmapel .'</td>
                          <td class="ctr">'.$d->jumlah_soal.'</td>
                          <td class="ctr">'.$d->waktu.' menit</td>
                          <td class="ctr">'.$d->status.'</td>
                          <td class="ctr">';

                    if ($d->status == "Belum Ikut") {
                     echo '<a href="'.base_url().'adm/ikut_ujian/token/'.$d->id.'" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Mulai Ujian</a>';
                    } else if ($d->status == "Sedang Tes") {
                      echo '<a href="'.base_url().'adm/ikut_ujian/token/'.$d->id.'" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp; <blink>Ujian Sdg Aktif</blink></a>';
                    } else if ($d->status == "Waktu Habis") {
                      echo '<a href="'.base_url().'adm/ikut_ujian/token/'.$d->id.'" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp; <blink>Waktu Habis</blink></a>';
                    } else {
                      echo '<a href="'.base_url().'adm/sudah_selesai_ujian/'.$d->id.'" class="btn btn-danger btn-xs disabled"><i class="glyphicon glyphicon-ok" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Ujian Selesai</a>';
                    }

                    echo '</td></tr>';
                  $no++;
                  }
                } else {
                  echo '<tr><td colspan="7">Belum ada data</td></tr>';
                }
              ?>
            </tbody>
          </table>

         </div>
      </div>
    </div>
  </div>
