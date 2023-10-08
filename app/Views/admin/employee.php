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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah" style="float: right;">
                  <i class="fa fa-fw fa-plus"></i> Tambah Data
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php if(isset($validation)) { ?>
                  <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $validation->listErrors() ?>
                  </div>
                <?php } ?>
                <?php if(session()->getFlashdata('message')) { ?>
                  <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo session()->getFlashdata('message'); ?>
                  </div>
                <?php } ?>
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
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; foreach($pegawai as $p) { ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $p['id']; ?></td>
                        <td><?= $p['nama_pegawai']; ?></td>
                        <td><?= $p['usia']; ?></td>
                        <td><?= $p['pendidikan']; ?></td>
                        <td><?= $p['keahlian']; ?></td>
                        <td><?= $p['masa_kerja']; ?></td>
                        <td><?= $p['kehadiran']; ?></td>
                        <td><?= $p['tanggung_jawab']; ?></td>
                        <td><?= $p['kejujuran']; ?></td>
                        <td><?= $p['prestasi_kerja']; ?></td>
                        <td class="text-center">
                          <button type="button" class="btn btn-warning m-1 select_button" data-toggle="modal" data-target=".modal-edit" data-id="<?= $p['id']; ?>">
                            <i class="fa fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-danger m-1 remove_button" data-id="<?= $p['id']; ?>">
                            <i class="fa fa-trash"></i>
                          </button>
                        </td>
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
  

  <div class="modal fade" id="modal-tambah">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h4 class="modal-title">Tambah Data</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url('admin/employee/create'); ?>" method="POST" id="create_form">
        <div class="modal-body">
          <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" required>
          </div>
          <div class="form-group">
            <label for="nama_pegawai">Nama Pegawai</label>
            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Masukkan Nama Pegawai" required>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="usia">Bobot Pegawai</label>
                <input type="number" class="form-control" id="usia" name="usia" placeholder="Masukkan Bobot Usia" required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="pendidikan">Bobot Pegawai</label>
                <input type="number" class="form-control" id="pendidikan" name="pendidikan" placeholder="Masukkan Bobot Pendidikan" required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="keahlian">Bobot Pegawai</label>
                <input type="number" class="form-control" id="keahlian" name="keahlian" placeholder="Masukkan Bobot Keahlian" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="masa_kerja">Bobot Masa Kerja</label>
                <input type="number" class="form-control" id="masa_kerja" name="masa_kerja" placeholder="Masukkan Bobot Masa Kerja" required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="kehadiran">Bobot Kehadiran</label>
                <input type="number" class="form-control" id="kehadiran" name="kehadiran" placeholder="Masukkan Bobot Kehadiran" required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="tanggung_jawab">Bobot Tanggung Jawab</label>
                <input type="number" class="form-control" id="tanggung_jawab" name="tanggung_jawab" placeholder="Masukkan Bobot Tanggung Jawab" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="kejujuran">Bobot Kejujuran</label>
                <input type="number" class="form-control" id="kejujuran" name="kejujuran" placeholder="Masukkan Bobot Kejujuran" required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="prestasi_kerja">Bobot Prestasi Kerja</label>
                <input type="number" class="form-control" id="prestasi_kerja" name="prestasi_kerja" placeholder="Masukkan Bobot Prestasi Kerja" required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <div class="modal fade modal-edit">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h4 class="modal-title">Edit Data</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url('admin/employee/update'); ?>" method="POST" id="update_form">
        <div class="modal-body">
          <div class="form-group">
            <label for="xnik">NIK</label>
            <input type="text" class="form-control" id="xnik" name="xnik" placeholder="Masukkan NIK" required>
          </div>
          <div class="form-group">
            <label for="nama_pegawai">Nama Pegawai</label>
            <input type="text" class="form-control" id="xnama_pegawai" name="xnama_pegawai" placeholder="Masukkan Nama Pegawai" required>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="usia">Bobot Pegawai</label>
                <input type="number" class="form-control" id="xusia" name="xusia" placeholder="Masukkan Bobot Usia" required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="pendidikan">Bobot Pegawai</label>
                <input type="number" class="form-control" id="xpendidikan" name="xpendidikan" placeholder="Masukkan Bobot Pendidikan" required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="keahlian">Bobot Pegawai</label>
                <input type="number" class="form-control" id="xkeahlian" name="xkeahlian" placeholder="Masukkan Bobot Keahlian" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="masa_kerja">Bobot Masa Kerja</label>
                <input type="number" class="form-control" id="xmasa_kerja" name="xmasa_kerja" placeholder="Masukkan Bobot Masa Kerja" required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="kehadiran">Bobot Kehadiran</label>
                <input type="number" class="form-control" id="xkehadiran" name="xkehadiran" placeholder="Masukkan Bobot Kehadiran" required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="tanggung_jawab">Bobot Tanggung Jawab</label>
                <input type="number" class="form-control" id="xtanggung_jawab" name="xtanggung_jawab" placeholder="Masukkan Bobot Tanggung Jawab" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="kejujuran">Bobot Kejujuran</label>
                <input type="number" class="form-control" id="xkejujuran" name="xkejujuran" placeholder="Masukkan Bobot Kejujuran" required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="prestasi_kerja">Bobot Prestasi Kerja</label>
                <input type="number" class="form-control" id="xprestasi_kerja" name="xprestasi_kerja" placeholder="Masukkan Bobot Prestasi Kerja" required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <div class="row">
    <form action="" method="GET" id="delete_form">
      <input type="hidden" id="delete_id" name="delete_id">
    </form>
  </div>
  
<?= $this->section('extraFooter') ?>
<script>
  $('.select_button').click(function(){
    let id = $(this).attr('data-id')
    let update_url = '<?= base_url('/admin/employee/update') ?>'
    $('#update_form').attr('action', update_url+'/'+id)

    fetch('/admin/employee/read/'+id, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
        },
    })
    .then(response => response.json())
    .then(data => {
      $('#xnik').val(data['id'])
      $('#xnama_pegawai').val(data['nama_pegawai'])
      $('#xusia').val(data['usia'])
      $('#xpendidikan').val(data['pendidikan'])
      $('#xkeahlian').val(data['keahlian'])
      $('#xmasa_kerja').val(data['masa_kerja'])
      $('#xkehadiran').val(data['kehadiran'])
      $('#xtanggung_jawab').val(data['tanggung_jawab'])
      $('#xkejujuran').val(data['kejujuran'])
      $('#xprestasi_kerja').val(data['prestasi_kerja'])
    })
    .catch(error => {
        console.error('Error:', error);
    });
  })

  $('.remove_button').click(function(){
      let id = $(this).attr('data-id')

      let conf = confirm("Apakah Anda Yakin Ingin Menghapus Data Ini?")
      if(conf){
        let delete_url = '<?= base_url('/admin/employee/delete') ?>'
        $('#delete_form').attr('action', delete_url+'/'+id)
        $('#delete_id').val(id)
        $('#delete_form').submit()
      }
    })
</script>
<?= $this->endSection() ?>
