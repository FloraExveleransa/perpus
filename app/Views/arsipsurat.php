<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Surat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="main-panel">
  <div class="content-wrapper">
    <h3>Arsip Surat</h3>
    <p class="text-subtitle text-muted">Data Surat Masuk dan Surat Keluar</p>

    <!-- Table for Surat Masuk -->
    <section class="section">
      <div class="card">
        <div class="card-body">
          <h4>Data Surat Masuk</h4>
          <table class="table table-striped" id="tableSuratMasuk">
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
                <th>Status Disposisi</th>
                <th>Created at</th>
                <th>Updated at</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($suratMasuk as $masuk) {
              ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $masuk->nomor_surat ?></td>
                <td><?= $masuk->nomor_arsip ?></td>
                <td><?= $masuk->tanggal_surat ?></td>
                <td><?= $masuk->tanggal_terima ?></td>
                <td><?= $masuk->pengirim ?></td>
                <td><?= $masuk->asal_surat ?></td>
                <td><?= $masuk->perihal ?></td>
                <td><?= $masuk->tujuan_surat ?></td>
                <td><?= $masuk->nama_penerima ?></td>
                <td><?= $masuk->rak_surat ?></td>
                <td><?= $masuk->status_disposisi ?></td>
                <td><?= $masuk->created_at ?></td>
                <td><?= $masuk->updated_at ?></td>
              </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- Table for Surat Keluar -->
    <section class="section">
      <div class="card">
        <div class="card-body">
          <h4>Data Surat Keluar</h4>
          <table class="table table-striped" id="tableSuratKeluar">
            <thead>
              <tr>
                <th>No</th>
                <th>Nomor Surat</th>
                <th>Nomor Arsip</th>
                <th>Tanggal Surat</th>
                <th>Pengirim</th>
                <th>Asal Surat</th>
                <th>Perihal</th>
                <th>Tujuan Surat</th>
                <th>Nama Penerima</th>
                <th>Rak Surat</th>
                <th>Status Disposisi</th>
                <th>Created at</th>
                <th>Updated at</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($suratKeluar as $keluar) {
              ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $keluar->nomor_surat ?></td>
                <td><?= $keluar->nomor_arsip ?></td>
                <td><?= $keluar->tanggal_surat ?></td>
                <td><?= $keluar->pengirim ?></td>
                <td><?= $keluar->asal_surat ?></td>
                <td><?= $keluar->perihal ?></td>
                <td><?= $keluar->tujuan_surat ?></td>
                <td><?= $keluar->nama_penerima ?></td>
                <td><?= $keluar->rak_surat ?></td>
                <td><?= $keluar->status_disposisi ?></td>
                <td><?= $keluar->created_at ?></td>
                <td><?= $keluar->updated_at ?></td>
              </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
