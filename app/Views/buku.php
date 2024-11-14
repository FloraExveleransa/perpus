<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-md-6 order-md-1 order-last">
            <h3><?=$title?></h3>
            <h3>Halaman Data Buku</h3>
            <p class="text-subtitle text-muted">Berikut ini adalah data buku <?=$title?></p>
          </div>
          <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
              <!-- Breadcrumb jika diperlukan -->
            </nav>
          </div>
        </div>
      </div>
    </div>

    <section class="section">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <div class="form-group">
              <a href="<?=base_url('home/t_buku')?>">
                <button class="btn btn-success">Tambah Data Buku</button>
              </a>
              <a href="<?=base_url('home/print_buku')?>">
                <button class="btn btn-danger" id="printButton">Print Data Buku</button>
              </a>
            </div>
            <table class="table table-striped" id="table1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul Buku</th>
                  <th>Penulis</th>
                  <th>Penerbit</th>
                  <th>Tahun Terbit</th>
                  <th>Aksi</th>  
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($manda as $flora) {
                
                  
                ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $flora->judul ?></td>
                  <td><?= $flora->penulis ?></td>
                  <td><?= $flora->penerbit ?></td>
                   <td><?= $flora->tahun_terbit ?></td>
                  <td>
                    <!-- Detail Button -->
                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#detailModal" data-id="<?= $flora->bukuID ?>">Detail</button>
                   
                  </td>
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Detail Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="userDetailForm" action="<?= base_url('home/update_buku') ?>" method="POST">
          <input type="hidden" id="userID" name="userID">
          <div class="form-group">
            <label for="judul">Judul Buku</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?= $flora->judul?>" required>
          </div>
          <div class="form-group">
            <label for="Penulis">Penulis</label>
            <input type="text" class="form-control" id="Penulis" name="Penulis" value="<?= $flora->Penulis?>" required>
          </div>
          <div class="form-group">
            <label for="Penerbit">Penerbit</label>
           <input type="text" class="form-control" id="Penerbit" name="Penerbit" value="<?= $flora->Penerbit?>" required>
          </div>
          <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <select class="form-control" id="tahun_terbit" name="tahun_terbit">
              
            </select>
          </div>
          <div class="form-group d-inline-block">
            <button type="submit" class="btn btn-danger">Simpan</button>
            <a href="<?= base_url('home/delete_buku/'.$flora->userID) ?>" class="btn btn-danger">Hapus</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script>
  $(document).ready(function() {
    $('#detailModal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget);
      var userId = button.data('id');

      $.ajax({
        url: '<?= base_url('home/get_buku') ?>', // Update URL jika perlu
        method: 'POST',
        data: { id: userId },
        dataType: 'json',
        success: function(data) {
          $('#user_id').val(data.userID);
          $('#judul').val(data.judul);
          $('#penulis').val(data.penulis);
          $('#penerbit').val(data.penerbit);
          $('#tahunterbit').val(data.tahun_terbit);
        }
      });
    });
  });
</script>
