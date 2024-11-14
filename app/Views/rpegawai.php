<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-md-6 order-md-1 order-last">
            <h3><?= $title ?></h3>
            <h4 class="text-muted">Halaman Riwayat Pengguna</h4>
            <p>Berikut ini adalah riwayat data pengguna yang tersedia dalam sistem.</p>
          </div>
          <div class="col-12 col-md-6 order-md-2 order-first text-end">
            <a href="<?= base_url('home/t_u') ?>" class="btn btn-success me-2">Tambah Data Pengguna</a>
            <a href="<?= base_url('home/print_u') ?>" class="btn btn-danger">Print Data Pengguna</a>
          </div>
        </div>
      </div>
    </div>

    <section class="section">
      <div class="card">
        <div class="card-body">
          <div class="list-group">
            <?php
            $no = 1;
            foreach ($manda as $flora) {
              // Find position name based on id_level
              $jabatanNama = 'Tidak Diketahui';
              foreach ($levels as $level) {
                if ($level->id_level == $flora->id_level) {
                  $jabatanNama = $level->nama_level;
                  break;
                }
              }
            ?>
            <div class="list-group-item mb-3 p-3 border rounded">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="mb-0"><?= $flora->nama_users ?></h5>
                <small class="text-muted">#<?= $no++ ?></small>
              </div>
              <p class="mb-1"><strong>Email:</strong> <?= $flora->email ?></p>
              <p class="mb-1"><strong>Nomor Telepon:</strong> <?= $flora->no_telp ?></p>
              <p class="mb-1"><strong>Jabatan:</strong> <?= $jabatanNama ?></p>
              <div class="mt-2">
                <button class="btn btn-info btn-sm me-1" data-toggle="modal" data-target="#detailModal" data-id="<?= $flora->id_users ?>">Detail</button>
                
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<!-- Modal for Detail View -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Detail Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="userDetailForm" action="<?= base_url('home/update_users') ?>" method="POST">
          <input type="hidden" id="user_id" name="user_id">
          <div class="form-group">
            <label for="nama_users">Nama</label>
            <input type="text" class="form-control" id="nama_users" name="nama_users" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="no_telp">Nomor Telepon</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" required>
          </div>
          <div class="form-group">
            <label for="id_level">Jabatan</label>
            <select class="form-control" id="id_level" name="id_level">
              <?php foreach ($levels as $level): ?>
                <option value="<?= $level->id_level ?>"><?= $level->nama_level ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mt-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('home/delete_users/'.$flora->id_users) ?>" class="btn btn-danger">Hapus</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('#detailModal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget);
      var userId = button.data('id');
      
      $.ajax({
        url: '<?= base_url('home/get_user') ?>',
        method: 'POST',
        data: { id: userId },
        dataType: 'json',
        success: function(data) {
          $('#user_id').val(data.id_users);
          $('#nama_users').val(data.nama_users);
          $('#email').val(data.email);
          $('#no_telp').val(data.no_telp);
          $('#id_level').val(data.id_level);
        }
      });
    });
  });
</script>
