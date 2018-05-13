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
                    <th>Tanggal service</th>
                    <th>Nama pelanggan</th>
                    <th>Nopol</th>
                    <th>Keluhan</th>
                    <th>Analisa SA</th>
                    <th>Biaya Total</th>
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
                    <td><a data-toggle="modal" data-target="#detail-layanan"><button class='btn btn-info'><i class="glyphicon glyphicon-th-list"></i> Detail</button></a></td>
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

<!-- modal detail layanan -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="detail-layanan" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">   
      <div class="modal-header bg-red">
        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times</button>
        <h4 class="modal-title">Detail layanan</h4>
      </div>
      <div class='box box-default'>
        <div class="box-header">
          <h1 class="box-title">Data Pelanggan</h1>
        </div>
        <div class='box-body'>
          <label class='col-sm-4'>Nama pelanggan</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>Alamat</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>Daerah</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>No. telp</label>
          <div class='col-md-5'> </div>
        </div>
      </div>
      <div class='box box-default'>
        <div class="box-header">
          <h1 class="box-title">Data Kendaraan</h1>
        </div>
        <div class='box-body'>
          <label class='col-sm-4'>No mesin</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>No kerangka</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>Nopol</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>Tipe</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>Tahun</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>KM</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>Kondisi awal</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>Kondisi bensin</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>Catatan lain</label>
          <div class='col-md-5'> </div>
        </div>
      </div>
      <div class='box box-default'>
        <div class="box-header">
          <h1 class="box-title">Data Layanan</h1>
        </div>
        <div class='box-body'>
          <label class='col-sm-4'>Tanggal service</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>Pegawai</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>Keluhan konsumen</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>Analisa SA</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>Waktu datang</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>Waktu mulai service</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>Waktu selesai service</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>Waktu pengecekan</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>Jenis pengecekan</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>Biaya kerja</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>Biaya suku cadang</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>Biaya total</label>
          <div class='col-md-5'> </div><br><br>
          <label class='col-sm-4'>No. urut</label>
          <div class='col-md-5'> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END modal detail layanan -->