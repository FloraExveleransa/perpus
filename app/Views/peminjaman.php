<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-md-6 order-md-1 order-last">
            <h3><?= $title ?></h3>
            <h3>Halaman Data Peminjaman Buku</h3>
            <p class="text-subtitle text-muted">Berikut ini adalah data peminjaman buku</p>
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
            <table class="table table-striped" id="table1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>User ID</th>
                  <th>Buku ID</th>
                  <th>Tanggal Peminjaman</th>
                  <th>Tanggal Pengembalian</th>
                  <th>Status Peminjaman</th>
                </tr>
              </thead>
        <tbody>
<?php
$no = 1;
if (!empty($manda)) {
    foreach ($manda as $data) {
?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $data->username ?></td> <!-- Menampilkan username dari tabel user -->
    <td><?= $data->bukuID ?></td>
    <td><?= $data->tanggal_peminjaman ?></td>
    <td><?= $data->tanggal_pengembalian ?></td>
    <td><?= $data->status_peminjaman ?></td>
</tr>
<?php
    }
} else {
    echo "<tr><td colspan='6' class='text-center'>Tidak ada data yang ditemukan</td></tr>";
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
