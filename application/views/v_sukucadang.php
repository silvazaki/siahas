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
        <form class='form-horizontal' action='' method='post'>
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
                    <th>Nama suku cadang</th>
                    <th>Harga</th>
                    <th>Jenis</th>
                    <th>Tipe kendaraan</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
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