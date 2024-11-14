<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Surat Masuk</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-md-6">
            <h3>Halaman Riwayat Surat Masuk</h3>
            <p class="text-muted">Berikut ini adalah riwayat data surat masuk</p>
          </div>
          <div class="col-12 col-md-6 text-end">
            <a href="<?= base_url('home/t_sm') ?>" class="btn btn-success me-2">Tambah Data Surat Masuk</a>
            <a href="<?= base_url('home/print_sm') ?>" class="btn btn-danger">Print Data Surat Masuk</a>
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
            ?>
            <div class="list-group-item mb-3 p-3 border rounded shadow-sm">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Surat No: <?= $flora->nomor_surat ?></h5>
                <small class="text-muted">#<?= $no++ ?></small>
              </div>
              <p class="mb-1"><strong>Nomor Arsip:</strong> <?= $flora->nomor_arsip ?></p>
              <p class="mb-1"><strong>Tanggal Surat:</strong> <?= $flora->tanggal_surat ?></p>
              <p class="mb-1"><strong>Tanggal Terima:</strong> <?= $flora->tanggal_terima ?></p>
              <p class="mb-1"><strong>Pengirim:</strong> <?= $flora->pengirim ?></p>
              <p class="mb-1"><strong>Asal Surat:</strong> <?= $flora->asal_surat ?></p>
              <p class="mb-1"><strong>Perihal:</strong> <?= $flora->perihal ?></p>
              <p class="mb-1"><strong>Tujuan Surat:</strong> <?= $flora->tujuan_surat ?></p>
              <p class="mb-1"><strong>Nama Penerima:</strong> <?= $flora->nama_penerima ?></p>
              <p class="mb-1"><strong>Rak Surat:</strong> <?= $flora->rak_surat ?></p>
              <p class="mb-1"><strong>Status Disposisi:</strong> <?= $flora->status_disposisi ?></p>
              <p class="mb-1"><small class="text-muted">Dibuat pada: <?= $flora->created_at ?> | Diperbarui pada: <?= $flora->updated_at ?></small></p>
              <div class="mt-2">
                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#detailModal" data-id="<?= $flora->id ?>" onclick="showDetailModal(<?= $flora->id ?>)">Detail</button>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<!-- Detail Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Detail Surat Masuk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="detailForm">
          <input type="hidden" id="detail_id" name="id">
          <div class="form-group">
            <label for="nomor_surat">Nomor Surat</label>
            <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" readonly>
          </div>
          <div class="form-group">
            <label for="nomor_arsip">Nomor Arsip</label>
            <input type="text" class="form-control" id="nomor_arsip" name="nomor_arsip" readonly>
          </div>
          <!-- Add more fields as necessary -->
          <button type="submit" class="btn btn-primary mt-3">Simpan Perubahan</button>
          <a href="#" class="btn btn-danger mt-3">Hapus</a>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  function showDetailModal(id) {
    $('#detailModal').modal('show');
    // Populate the modal fields with data via AJAX (to be implemented as needed)
  }
</script>
</body>
</html>
