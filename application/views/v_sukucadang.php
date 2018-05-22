  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
<div class="content">
  <div class="box box-danger">
    <div class="box-header bg-red with-border">
      <h1 class="box-title">Data Suku Cadang</h1>
    </div>
</section>

    <!-- Main content -->
    <section class="content">
      <div class='box box-default'>
        <div class="box-header with-border">
          <h1 class="box-title">Form Suku Cadang</h1>
        </div>
        <form class='form-horizontal' action='<?php echo base_url('Sukucadang/tambah'); ?>' method='post'>
          <div class='box-body'>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Nama suku cadang</label>
              <div class='col-md-4'>
                <input type='text' name='nama_sc' id='nama_sc' class='form-control' required='true' placeholder='Masukkan nama suku cadang'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Harga</label>
              <div class='col-md-2'>
                <input type='text' name='harga_sc' id='harga_sc' class='form-control' required='true' placeholder='Masukkan harga'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Jenis suku cadang</label>
              <div class='col-md-3'>
                <input type='text' name='jenis_sc' id='jenis_sc' class='form-control' required='true' placeholder='Masukkan jenis suku cadang'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Tipe kendaraan</label>
              <div class='col-md-3'>
                <input type='text' name='tipe_kendaraan' id='tipe_kendaraan' class='form-control' required='true' placeholder='Masukkan tipe kendaraan'>
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
             <h3 class='box-title'>Tabel Data Suku Cadang</h3>
          </div>
          <div class='box-body'>
            <div class="table-responsive">
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID SC</th>
                    <th>Nama suku cadang</th>
                    <th>Harga</th>
                    <th>Jenis</th>
                    <th>Tipe kendaraan</th>
                    <th>Stok</th>
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
                  <td><?php echo $r['IDSC'] ?></td>
                  <td><?php echo $r['NAMASC'] ?></td>
                  <td><?php echo $r['HARGASC'] ?></td>
                  <td><?php echo $r['JENISSC'] ?></td>
                  <td><?php echo $r['TIPEKENDARAAN'] ?></td>
                  <td><?php echo $r['STOCKSC'] ?></td>
                  <td><a 
                          href="javascript:;"
                          data-id="<?php echo $r['IDSC']; ?>"
                          data-nama="<?php echo $r['NAMASC']; ?>"
                          data-harga="<?php echo $r['HARGASC']; ?>"
                          data-jenis="<?php echo $r['JENISSC']; ?>"
                          data-tipe="<?php echo $r['TIPEKENDARAAN']; ?>"
                          data-stok="<?php echo $r['STOCKSC']; ?>"
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
                <h4 class="modal-title">Ubah Data Suku Cadang</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('Sukucadang/ubah') ?>" method="post" enctype="multipart/form-data" role="form">
              <div class="modal-body">
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Nama Suku Cadang</label>
                          <div class="col-lg-10">
                              <input type="hidden" id="IDSC" name="IDSC">
                              <input type="text" class="form-control" required="" id="NAMASC" name="NAMASC" placeholder="Nama Suku Cadang">
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Harga Suku Cadang</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" required="" id="HARGASC" name="HARGASC" placeholder="Nama Suku Cadang">
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Jenis Suku Cadang</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" required="" id="JENISSC" name="JENISSC" placeholder="Nama Suku Cadang">
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Tipe Kendaraan</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" required="" id="TIPEKENDARAAN" name="TIPEKENDARAAN" placeholder="Nama Suku Cadang">
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
            modal.find('#IDSC').attr("value",div.data('id'));
            modal.find('#NAMASC').attr("value",div.data('nama'));
            modal.find('#HARGASC').attr("value",div.data('harga'));
            modal.find('#JENISSC').attr("value",div.data('jenis'));
            modal.find('#TIPEKENDARAAN').attr("value",div.data('tipe'));
        });
    });
</script>