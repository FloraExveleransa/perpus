<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-md-6 order-md-1 order-last">
            <h3><?=$title?></h3>
            <h3>Halaman Data Users</h3>
            <p class="text-subtitle text-muted">Berikut ini adalah data users <?=$title?></p>
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
              
              <a href="<?=base_url('home/print_u')?>">
                <button class="btn btn-danger" id="printButton">Print Data users</button>
              </a>
            </div>
            <table class="table table-striped" id="table1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Nama Lengkap</th>
                    <th>Alamat</th>
                  <th>Aksi</th>  
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($manda as $flora) {
                  // Cari nama jabatan berdasarkan id_level
                  $jabatanNama = 'Tidak Diketahui';
                  foreach ($levels as $level) {
                    if ($level->id_level == $flora->id_level) {
                      $jabatanNama = $level->nama_level;
                      break;
                    }
                  }
                ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $flora->username ?></td>
                  
                  <td><?= $flora->email ?></td>
                  <td><?= $flora->namalengkap ?></td>
                  <td><?= $flora->alamat ?></td>
                  <td>
                    <!-- Detail Button -->
                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#detailModal" data-id="<?= $flora->id_users ?>">Detail</button>
                   
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


