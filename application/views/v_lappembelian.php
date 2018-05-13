  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
<div class="content">
  <div class="box box-danger">
    <div class="box-header bg-red with-border">
      <h1 class="box-title">Laporan Suku Cadang</h1>
    </div>
</section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <form method="post">
              <div class="form-group" action="">
                <label class='col-sm-2 control-label'>Tanggal awal</label>
                <div class='col-md-2'>
                  <input type='date' name='tgl_awwal' id='tgl_awal' class='form-control' required='true'>
                </div>
              </div><br><br>
              <div class="form-group">
                <label class='col-sm-2 control-label'>Tanggal akhir</label>
                <div class='col-md-2'>
                  <input type='date' name='tgl_akhir' id='tgl_akhir' class='form-control' required='true'>
                </div>
              </div><br><br>
              <button type='button' class='btn btn-warning pull-center'><i class="glyphicon glyphicon-list-alt"></i> Tampilkan semua</button>   
              <button type='submit' class='btn btn-info pull-center'><i class="glyphicon glyphicon-filter"></i> Filter</button>
            </form>
          </div><br>
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
                  </tr>
                </thead>
                <tbody>
                  <tr>
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
          <div class='box-footer'>
            <button class='btn btn-primary'><i class="glyphicon glyphicon-print"></i> Cetak Laporan</button>
          </div>
        </div>
      </section>
    <!-- /.content -->
    </div>
  </div>
</div>
  <!-- /.content-wrapper -->