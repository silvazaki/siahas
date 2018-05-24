  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
<div class="content">
  <div class="box box-danger">
    <div class="box-header bg-red with-border">
      <h1 class="box-title">Data Penjualan</h1>
    </div>
</section>

    <!-- Main content -->
    <section class="content">
      <div class='box box-default'>
        <div class="box-header with-border">
          <h1 class="box-title">Form Penjualan Suku Cadang</h1>
        </div>
        <form class='form-horizontal' action='<?php echo base_url('Penjualan/tambah'); ?>' method='post'>
          <div class='box-body'>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Jenis Kendaraan</label>
              <div class='col-md-2'>
                <input type='text' name='jenis_kendaraan' id='jenis_kendaraan' class='form-control' required='true' placeholder='Jenis Kendaraan'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Tanggal Penjualan</label>
              <div class='col-md-2'>
                <input type='date' name='tgl_jual' id='tgl_jual' class='form-control' required='true'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Jumlah jual</label>
              <div class='col-md-2'>
                <input type='text' name='jumlah_jual' id='jumlah_jual' class='form-control' required='true' placeholder='jumlah penjualan'>
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
             <h3 class='box-title'>Tabel Data Penjualan Suku Cadang</h3>
          </div>
          <div class='box-body'>
            <div class="table-responsive">
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Kendaraan</th>
                    <th>Jumlah jual</th>
                    <th>Tanggal penjualan</th>
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
                    <td><?php echo $r['JENIS_TIPEKENDARAAN'] ?></td>
                    <td><?php echo $r['STOKJUAL'] ?></td>
                    <td><?php echo $r['TGLPENJUALAN'] ?></td>
                    <td> 
                    <a 
                            href="javascript:;"
                            data-id="<?php echo $r['IDPENJUALAN']; ?>"
                            data-nama="<?php echo $r['JENIS_TIPEKENDARAAN']; ?>"
                            data-tgl="<?php echo $r['TGLPENJUALAN']; ?>"   
                            data-stok="<?php echo $r['STOKJUAL']; ?>"
                            data-toggle="modal" data-target="#edit-data">
                            <button  data-toggle="modal" data-target="#ubah-data" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i> Ubah</button>
                        </a>
                      </td> 
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


  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Data Penjualan</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('Penjualan/ubah') ?>" method="post" enctype="multipart/form-data" role="form">
              <div class="modal-body">
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Jenis Kendaraan</label>
                          <div class="col-lg-10">
                              <input type="hidden" id="IDPENJUALAN" name="">
                              <input type="text" class="form-control" required="" id="JENIS_TIPEKENDARAAN" name="JENIS_TIPEKENDARAAN" placeholder="Nama Suku Cadang">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Tanggal Penjualan</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" required="" id="TGLPENJUALAN" name="TGLPENJUALAN" placeholder="Nama Suku Cadang">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Jumlah Jual</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" required="" id="STOKJUAL" name="STOKJUAL" placeholder="Nama Suku Cadang">
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
            modal.find('#IDPENJUALAN').attr("value",div.data('id'));
            modal.find('#JENIS_TIPEKENDARAAN').attr("value",div.data('nama'));
            modal.find('#TGLPENJUALAN').attr("value",div.data('tgl'));
            modal.find('#STOKJUAL').attr("value",div.data('stok'));
        });
    });
</script>