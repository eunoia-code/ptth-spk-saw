  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data PTTH</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pegawai</li>
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
                <h3 class="card-title">Daftar Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>NIK</th>
                    <th>Nama Pegawai</th>
                    <th>Umur</th>
                    <th>Pendidikan</th>
                    <th>Keahlian</th>
                    <th>Masa Kerja</th>
                    <th>Kehadiran</th>
                    <th>Tanggung Jawab</th>
                    <th>Kejujuran</th>
                    <th>Prestasi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; foreach($pegawai as $p) { ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $p['id']; ?></td>
                        <td><?= $p['nama_pegawai']; ?></td>
                        <td><?= $p['umur']; ?></td>
                        <td><?= $p['pendidikan']; ?></td>
                        <td><?= $p['keahlian']; ?></td>
                        <td><?= $p['masa_kerja']; ?></td>
                        <td><?= $p['kehadiran']; ?></td>
                        <td><?= $p['tanggung_jawab']; ?></td>
                        <td><?= $p['kejujuran']; ?></td>
                        <td><?= $p['prestasi']; ?></td>
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
  