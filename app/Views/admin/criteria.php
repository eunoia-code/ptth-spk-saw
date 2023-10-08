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
              <li class="breadcrumb-item active">Data Kriteria</li>
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
                <h3 class="card-title">Daftar Kriteria</h3>
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
                    <th>Nama Kriteria</th>
                    <th>Jenis</th>
                    <th>Bobot</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; foreach($criteria as $c) { ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $c['nama_kriteria']; ?></td>
                        <td><?= $c['jenis']; ?></td>
                        <td><?= $c['bobot']; ?></td>
                        <td class="text-center">
                          <button type="button" class="btn btn-warning m-1 select_button" data-toggle="modal" data-target=".modal-edit" data-id="<?= $c['id']; ?>">
                            <i class="fa fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-danger m-1 remove_button" data-id="<?= $c['id']; ?>">
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
        <form action="<?= base_url('admin/criteria/create'); ?>" method="POST" id="create_form">
        <div class="modal-body">
          <div class="form-group">
            <label for="nama_kriteria">Nama Kriteria</label>
            <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" placeholder="Masukkan Nama Kriteria" required>
          </div>
          <div class="form-group">
            <label>Jenis</label>
            <select class="form-control select2" style="width: 100%;" name="jenis" required>
              <option disabled selected>-- Pilih Level --</option>
              <option value="cost">Cost</option>
              <option value="benefit">Benefit</option>
            </select>
          </div>
          <div class="form-group">
            <label for="bobot">Bobot</label>
            <input type="number" class="form-control" id="bobot" name="bobot" placeholder="Masukkan Bobot" required>
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
        <form action="<?= base_url('admin/citeria/update'); ?>" method="POST" id="update_form">
        <div class="modal-body">
          <div class="form-group">
            <label for="xnama_kriteria">Nama Kriteria</label>
            <input type="text" class="form-control" id="xnama_kriteria" name="xnama_kriteria" placeholder="Masukkan Nama Kriteria" required>
          </div>
          <div class="form-group">
            <label>Jenis</label>
            <select class="form-control select2" style="width: 100%;" id="xjenis" name="xjenis" required>
              <option disabled selected>-- Pilih Level --</option>
              <option value="cost">Cost</option>
              <option value="benefit">Benefit</option>
            </select>
          </div>
          <div class="form-group">
            <label for="bobot">Bobot</label>
            <input type="number" class="form-control" id="xbobot" name="xbobot" placeholder="Masukkan Bobot" required>
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
    let update_url = '<?= base_url('/admin/criteria/update') ?>'
    $('#update_form').attr('action', update_url+'/'+id)

    fetch('/admin/criteria/read/'+id, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
        },
    })
    .then(response => response.json())
    .then(data => {
      $('#xnama_kriteria').val(data['nama_kriteria'])
      $('#xjenis').val(data['jenis']).change()
      $('#xbobot').val(data['bobot'])
    })
    .catch(error => {
        console.error('Error:', error);
    });
  })

  $('.remove_button').click(function(){
      let id = $(this).attr('data-id')

      let conf = confirm("Apakah Anda Yakin Ingin Menghapus Data Ini?")
      if(conf){
        let delete_url = '<?= base_url('/admin/criteria/delete') ?>'
        $('#delete_form').attr('action', delete_url+'/'+id)
        $('#delete_id').val(id)
        $('#delete_form').submit()
      }
    })
</script>
<?= $this->endSection() ?>
