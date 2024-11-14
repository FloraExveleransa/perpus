<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Surat Keluar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Halaman Data Surat Keluar</h3>
            <p class="text-muted">Berikut ini adalah data surat keluar</p>
          </div>
        </div>
      </div>
    </div>

    <section class="section">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <div class="form-group">
              <a href="<?=base_url('home/t_sk')?>">
                <button class="btn btn-success">Tambah Data Surat Keluar</button>
              </a>
              <a href="<?= base_url('home/print_sk') ?>">
                <button class="btn btn-danger" id="printButton">Print Data Surat Keluar</button>
              </a>
            </div>

            <table class="table table-striped" id="table1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nomor Surat</th>
                  <th>Nomor Arsip</th>
                  <th>Tanggal Surat</th>
                  <th>Tanggal Terima</th>
                  <th>Pengirim</th>
                  <th>Asal Surat</th>
                  <th>Perihal</th>
                  <th>Tujuan Surat</th>
                  <th>Nama Penerima</th>
                  <th>Rak Surat</th>
                  <th>Dokumen Surat</th>
                  <th>Status Disposisi</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Detail</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($manda as $flora) {
                ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $flora->nomor_surat ?></td>
                  <td><?= $flora->nomor_arsip ?></td>
                  <td><?= $flora->tanggal_surat ?></td>
                  <td><?= $flora->tanggal_terima ?></td>
                  <td><?= $flora->pengirim ?></td>
                  <td><?= $flora->asal_surat ?></td>
                  <td><?= $flora->perihal ?></td>
                  <td><?= $flora->tujuan_surat ?></td>
                  <td><?= $flora->nama_penerima ?></td>
                  <td><?= $flora->rak_surat ?></td>
                  <td><?= $flora->file_surat ?></td>
                  <td><?= $flora->status_disposisi ?></td>
                  <td><?= $flora->created_at ?></td>
                  <td><?= $flora->updated_at ?></td>
                  <td>
                    <button class="btn btn-info btn-detail" data-id="<?= $flora->id ?>" onclick="showDetailModal(<?= $flora->id ?>)">!</button>
                  </td>
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>

            <!-- Detail Modal -->
            <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel">Detail Surat Keluar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="detailForm">
                      <input type="hidden" id="detail_id" name="id">
                      <!-- Populated by AJAX -->
                      <div class="form-group">
                        <label for="nomor_surat">Nomor Surat</label>
                        <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" readonly>
                      </div>
                      <div class="form-group">
                        <label for="nomor_arsip">Nomor Arsip</label>
                        <input type="text" class="form-control" id="nomor_arsip" name="nomor_arsip" readonly>
                      </div>
                      <!-- Additional form fields -->
                      <button type="button" class="btn btn-primary mt-3">Simpan Perubahan</button>
                      <button type="button" class="btn btn-danger mt-3">Hapus</button>
                      <button type="button" class="btn btn-secondary mt-3" id="printButtonModal">Print</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  function showDetailModal(id) {
    $('#detailModal').modal('show');
    // AJAX request to fetch data
    $.ajax({
      url: '<?= base_url("home/get_surat_keluar_detail") ?>/' + id,
      method: 'GET',
      dataType: 'json',
      success: function(data) {
        $('#detail_id').val(data.id);
        $('#nomor_surat').val(data.nomor_surat);
        $('#nomor_arsip').val(data.nomor_arsip);
        // Populate additional fields
      }
    });
  }
</script>
</body>
</html>
