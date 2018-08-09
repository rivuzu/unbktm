<div class="row">
  <div class="col-md-10">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-success">
          <div class="panel-heading">Data Siswa
            <div class="tombol-kanan" style="float:right; margin-top:-5px;">
              <a class="btn btn-success btn-sm tombol-kanan" href="#" onclick="return m_siswa_e(0);"><i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Tambah</a>
              <a class="btn btn-warning btn-sm tombol-kanan" href="<?php echo base_url(); ?>upload/format_import_siswa.xlsx" ><i class="glyphicon glyphicon-download"></i> &nbsp;&nbsp;Download Format Import</a>
              <a class="btn btn-info btn-sm tombol-kanan" href="<?php echo base_url(); ?>adm/m_siswa/import" ><i class="glyphicon glyphicon-upload"></i> &nbsp;&nbsp;Import</a>
            </div>
          </div>
          <div class="panel-body">
            <table class="table table-bordered" id="datatabel">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th width="20%">Nama</th>
                  <th width="15%">NIM / Username</th>
                  <th width="20%">Kelas / Jurusan</th>
                  <th width="20%">Aksi</th>
                </tr>
              </thead>

              <tbody></tbody>
            </table>

            </div>
          </div>
  </div>
</div>
</div>
</div>
<div class="modal fade" id="m_siswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="myModalLabel">Data Siswa</h4>
      </div>
      <div class="modal-body">
          <form name="f_siswa" id="f_siswa" onsubmit="return m_siswa_s();">
            <input type="hidden" name="id" id="id" value="0">
              <table class="table table-form">

                <tr><td style="width: 25%">Nama</td><td style="width: 75%"><input type="text" class="form-control" name="nama" id="nama" required></td></tr>
                <tr><td style="width: 25%">NIS</td><td style="width: 75%"><input type="text" class="form-control" name="nim" id="nim" required></td></tr>
                <tr><td style="width: 25%">Jurusan</td><td style="width: 75%"><div class="col-md-10"><?php echo form_dropdown('jurusan', $p_jurusan, '', 'class="form-control" id="nama" required'); ?></div></td></tr>
              </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="fa fa-minus-circle"></i> Tutup</button>
      </div>
        </form>
    </div>
  </div>
</div>
