  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
<div class="content">
  <div class="box box-danger">
    <div class="box-header bg-red with-border">
      <h1 class="box-title">Data Pegawai</h1>
    </div>
</section>

    <!-- Main content -->
    <section class="content">
      <div class='box box-default'>
        <div class="box-header with-border">
          <h1 class="box-title">Form Pegawai</h1>
        </div>
        <form class='form-horizontal' action='<?php echo base_url('Pegawai/tambah'); ?>' method='post'>
          <div class='box-body'>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>ID Pegawai</label>
              <div class='col-md-2'>
                <input type='text' name='id_peg' id='id_peg' class='form-control' required='true' placeholder='Masukkan ID pegawai'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Nama</label>
              <div class='col-md-4'>
                <input type='text' name='nama_peg' id='nama_peg' class='form-control' required='true' placeholder='Masukkan nama pegawai'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Alamat</label>
              <div class='col-md-6'>
                <input type='text' name='alamat_peg' id='alamat_peg' class='form-control' required='true' placeholder='Masukkan alamat pegawai'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>No Telp</label>
              <div class='col-md-2'>
                <input type='text' name='no_telp' id='no_telp' class='form-control' required='true' placeholder='Masukkan no. telp'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>E-mail</label>
              <div class='col-md-4'>
                <input type='text' name='email' id='email' class='form-control' placeholder='Masukkan alamat e-mail pegawai'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Jabatan</label>
                <div class='col-md-3'>
                  <select class='form-control' required="" name='jabatan'>
                    <option value="jabatan1">Jabatan 1</option>
                    <option value="jabatan2">Jabatan 2</option>
                    <option value="jabatan3">Jabatan 3</option>
                  </select>
                </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Sub-jabatan</label>
              <div class='col-md-3'>
                <select class='form-control' required="" name='subjabatan'>
                  <option value="subjabatan1">Sub-jabatan 1</option>
                  <option value="subjabatan2">Sub-jabatan 2</option>
                  <option value="subjabatan3">Sub-jabatan 3</option>
                </select>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Dokumen pegawai</label>
              <div class='col-md-3'>
                <input type='text' name='dokumen_peg' id='dokumen_peg' class='form-control' placeholder='Masukkan dokumen pegawai'>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class='box-footer'>
            <button type='reset' class='btn btn-default'><i class="glyphicon glyphicon-remove"></i> Reset</button>
            <button type='submit' class='btn btn-success' name='tambahData'><i class="glyphicon glyphicon-save"></i> Simpan</button>
          </div>
          <!-- /.box-footer -->
          </form>
        </div>

        <div class="box box-default">
          <div class='box-header with-border'>
             <h3 class='box-title'>Tabel Data Pegawai</h3>
          </div>
          <div class='box-body'>
            <div class="table-responsive">
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No telp</th>
                    <th>E-mail</th>
                    <th>Jabatan</th>
                    <th>Sub-jabatan</th>
                    <th>Dokumen</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                <?php 
                  $i = 1;
                  foreach ($data as $r) {
                ?>

                  <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $r['IDPEG'] ?></td>
                  <td><?php echo $r['NAMAPEG'] ?></td>
                  <td><?php echo $r['ALAMATPEG'] ?></td>
                  <td><?php echo $r['NOTLP'] ?></td>
                  <td><?php echo $r['EMAIL'] ?></td>
                  <td><?php echo $r['JABATANPEG'] ?></td>
                  <td><?php echo $r['SUBJABATANPEG'] ?></td>
                  <td><?php echo $r['DOKUMENPEG'] ?></td>
                  <td><a 
                          href="javascript:;"
                          data-id="<?php echo $r['IDPEG']; ?>"
                          data-nama="<?php echo $r['NAMAPEG']; ?>"
                          data-alamat="<?php echo $r['ALAMATPEG']; ?>"
                          data-notlp="<?php echo $r['NOTLP']; ?>"
                          data-email="<?php echo $r['EMAIL']; ?>"
                          data-jabatan="<?php echo $r['JABATANPEG']; ?>"
                          data-subjabatan="<?php echo $r['SUBJABATANPEG']; ?>"
                          data-dokumen="<?php echo $r['DOKUMENPEG']; ?>"
                          data-toggle="modal" data-target="#edit-data">
                          <button  data-toggle="modal" data-target="#ubah-data" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i> Ubah</button>
                      </a></td>
                  </tr>

                  <?php $i++; } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
    <!-- /.content -->
  </div>
</div>
</div>
  <!-- /.content-wrapper -->

    <!-- Modal Ubah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Data Pegawai</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('Pegawai/ubah') ?>" method="post" enctype="multipart/form-data" role="form">
              <div class="modal-body">
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Nama Pegawai</label>
                          <div class="col-lg-10">
                              <input type="hidden" id="IDPEG" name="IDPEG">
                              <input type="text" class="form-control" required="" id="NAMAPEG" name="NAMAPEG" placeholder="Nama Suku Cadang">
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Alamat Pegawai</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" required="" id="ALAMATPEG" name="ALAMATPEG" placeholder="Nama Suku Cadang">
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">No Telpon</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" required="" id="NOTLP" name="NOTLP" placeholder="Nama Suku Cadang">
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Email</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" required="" id="EMAIL" name="EMAIL" placeholder="Nama Suku Cadang">
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Dokumen</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" required="" id="DOKUMENPEG" name="DOKUMENPEG" placeholder="Nama Suku Cadang">
                          </div>
                      </div>
                      
                  </div>
                  <div class="modal-footer">
                      <button class="btn btn-info" type="submit"><i class="glyphicon glyphicon-pencil"></i> Ubah&nbsp;</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Batal</button>
                  </div>
                </form>
            </div>
        </div>
    </div>

<!-- END Modal Ubah -->

<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal  = $(this)

            // Isi nilai pada field
            modal.find('#IDPEG').attr("value",div.data('id'));
            modal.find('#NAMAPEG').attr("value",div.data('nama'));
            modal.find('#ALAMATPEG').attr("value",div.data('alamat'));
            modal.find('#NOTLP').attr("value",div.data('notlp'));
            modal.find('#EMAIL').attr("value",div.data('email'));
            modal.find('#JABATANPEG').attr("value",div.data('jabatan'));
            modal.find('#SUBJABATANPEG').attr("value",div.data('subjabatan'));
            modal.find('#DOKUMENPEG').attr("value",div.data('dokumen'));
        });
    });
</script>