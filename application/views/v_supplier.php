  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
<div class="content">
  <div class="box box-danger">
    <div class="box-header bg-red with-border">
      <h1 class="box-title">Data Supplier</h1>
    </div>
</section>

    <!-- Main content -->
    <section class="content">
      <div class='box box-default'>
        <div class="box-header with-border">
          <h1 class="box-title">Form Supplier</h1>
        </div>
        <form class='form-horizontal' action='<?php echo base_url('Supplier/tambah'); ?>' method='post'>
          <div class='box-body'>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Nama supplier</label>
              <div class='col-md-4'>
                <input type='text' name='nama_supplier' id='nama_supplier' class='form-control' required='true' placeholder='Masukkan nama supplier'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Alamat</label>
              <div class='col-md-6'>
                <input type='text' name='alamat_supplier' id='alamat_supplier' class='form-control' required='true' placeholder='Masukkan alamat supplier'>
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
                    <th>ID Supplier</th>
                    <th>Nama supplier</th>
                    <th>Alamat</th>
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
                    <td><?php echo $r['IDSUPPLIER'] ?></td>
                    <td><?php echo $r['NAMASUPPLIER'] ?></td>
                    <td><?php echo $r['ALAMATSUPPLIER'] ?></td>
                    <td><a 
                          href="javascript:;"
                          data-id="<?php echo $r['IDSUPPLIER']; ?>"
                          data-nama="<?php echo $r['NAMASUPPLIER']; ?>"
                          data-alamat="<?php echo $r['ALAMATSUPPLIER']; ?>"
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
                <h4 class="modal-title">Ubah Data Supplier</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('Supplier/ubah') ?>" method="post" enctype="multipart/form-data" role="form">
              <div class="modal-body">
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Nama Supplier</label>
                          <div class="col-lg-10">
                              <input type="hidden" id="IDSUPPLIER" name="IDSUPPLIER">
                              <input type="text" class="form-control" required="" id="NAMASUPPLIER" name="NAMASUPPLIER" placeholder="Nama Supplier">
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Alamat Supplier</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" required="" id="ALAMATSUPPLIER" name="ALAMATSUPPLIER" placeholder="Alamat Supplier">
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
            modal.find('#IDSUPPLIER').attr("value",div.data('id'));
            modal.find('#NAMASUPPLIER').attr("value",div.data('nama'));
            modal.find('#ALAMATSUPPLIER').attr("value",div.data('alamat'));
        });
    });
</script>