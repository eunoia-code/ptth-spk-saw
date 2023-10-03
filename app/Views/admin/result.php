  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Hasil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Hasil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Hasil Perhitungan Data Calon Penerimaan PTTH</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>NIK</th>
                    <th>Nama Pegawai</th>
                    <th>Bobot</th>
                    <th>Skor</th>
                    <th>Keterangan</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; foreach($result as $r) { ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $r['id']; ?></td>
                        <td><?= $r['nama_pegawai']; ?></td>
                        <td><pre><?php echo htmlspecialchars(json_encode($r['bobot_kriteria'], JSON_PRETTY_PRINT), ENT_QUOTES, 'UTF-8'); ?></pre></td>
                        <td><?= round($r['skor'] * 100, 2); ?></td>
                        <td><?= round($r['skor'] * 100, 2) >=50 ? "Perpanjang Kontrak" : "" ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  