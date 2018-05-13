  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
<div class="content">
  <div class="box box-danger">
    <div class="box-header bg-red with-border">
      <h1 class="box-title">Data Pembelian</h1>
    </div>
</section>

    <!-- Main content -->
    <section class="content">
      <div class='box box-default'>
        <div class="box-header with-border">
          <h1 class="box-title">Form Pembelian Suku Cadang</h1>
        </div>
        <form class='form-horizontal' action='' method='post'>
          <div class='box-body'>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Nama suku cadang</label>
              <div class='col-md-4'>
                <select class='form-control' required="" name='nama_sc'>
                    <option value=""></option>
                  </select>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Nama supplier</label>
              <div class='col-md-4'>
                <select class='form-control' required="" name='nama_supplier'>
                    <option value=""></option>
                  </select>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Jumlah beli</label>
              <div class='col-md-2'>
                <input type='text' name='jumlah_beli' id='jumlah_beli' class='form-control' required='true' placeholder='jumlah pembelian'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Tanggal Pembelian</label>
              <div class='col-md-2'>
                <input type='date' name='tgl_beli' id='tgl_beli' class='form-control' required='true'>
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
             <h3 class='box-title'>Tabel Data Pembelian Suku Cadang</h3>
          </div>
          <div class='box-body'>
            <div class="table-responsive">
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama barang</th>
                    <th>Nama supplier</th>
                    <th>Jumlah beli</th>
                    <th>Tanggal pembelian</th>
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