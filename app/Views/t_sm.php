<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Surat Masuk</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f2f5;
      font-family: Arial, sans-serif;
    }
    .main {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }
    .card {
      background: #ffffff;
      border: none;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      padding: 20px;
      max-width: 800px;
      width: 100%;
    }
    .pagetitle h1 {
      font-size: 2rem;
      color: #333;
      font-weight: bold;
      text-align: center;
    }
    .breadcrumb {
      background-color: #ffffff;
      border-radius: 8px;
      padding: 8px;
      font-size: 0.9rem;
    }
    .form-section {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 20px;
      border: 1px solid #e3e6ea;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s;
    }
    .form-section:hover {
      transform: scale(1.02);
    }
    .form-section h5 {
      font-size: 1.25rem;
      font-weight: bold;
      color: #007bff;
      margin-bottom: 15px;
      border-bottom: 2px solid #007bff;
      padding-bottom: 8px;
    }
    .form-control {
      border-radius: 8px;
      transition: border-color 0.2s;
    }
    .form-control:focus {
      border-color: #007bff;
      box-shadow: 0px 0px 4px rgba(0, 123, 255, 0.2);
    }
    .btn-primary {
      width: 120px;
      font-weight: bold;
      border-radius: 8px;
      transition: background-color 0.3s;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
 

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Surat Masuk</h5>

              <!-- Form Start -->
              <form action="<?= base_url('home/aksi_tsbm') ?>" method="POST">
                <!-- Section: Informasi Dasar -->
                <div class="form-section">
                  <h5>Informasi Dasar</h5>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="id">ID</label>
                      <input type="text" class="form-control" id="id" name="id" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="nomor_surat">Nomor Surat</label>
                      <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="nomor_arsip">Nomor Arsip</label>
                      <input type="text" class="form-control" id="nomor_arsip" name="nomor_arsip" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="tanggal_surat">Tanggal Surat</label>
                      <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" required>
                    </div>
                  </div>
                </div>

                <!-- Section: Detail Surat -->
                <div class="form-section">
                  <h5>Detail Surat</h5>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="tanggal_terima">Tanggal Terima</label>
                      <input type="date" class="form-control" id="tanggal_terima" name="tanggal_terima" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="pengirim">Pengirim</label>
                      <input type="text" class="form-control" id="pengirim" name="pengirim" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="asal_surat">Asal Surat</label>
                      <input type="text" class="form-control" id="asal_surat" name="asal_surat" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="perihal">Perihal</label>
                      <input type="text" class="form-control" id="perihal" name="perihal" required>
                    </div>
                  </div>
                </div>

                <!-- Section: Tujuan dan Penyimpanan -->
                <div class="form-section">
                  <h5>Tujuan dan Penyimpanan</h5>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="tujuan_surat">Tujuan Surat</label>
                      <input type="text" class="form-control" id="tujuan_surat" name="tujuan_surat" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="nama_penerima">Penerima</label>
                      <input type="text" class="form-control" id="nama_penerima" name="nama_penerima" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="rak_surat">Rak Surat</label>
                      <input type="text" class="form-control" id="rak_surat" name="rak_surat" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="file_surat">Dokumen</label>
                      <input type="file" class="form-control" id="file_surat" name="file_surat" required>
                    </div>
                  </div>
                </div>

                <!-- Section: Disposisi -->
                <div class="form-section">
                  <h5>Disposisi</h5>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="status_disposisi">Status Disposisi</label>
                      <input type="text" class="form-control" id="status_disposisi" name="status_disposisi" required>
                    </div>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
