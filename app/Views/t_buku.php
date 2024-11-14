<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Buku</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* CSS untuk mempercantik form */
    .form-container {
      max-width: 800px;
      margin: 40px auto;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .form-control {
      border-radius: 8px;
    }
    .btn-primary, .btn-secondary {
      border-radius: 20px;
      padding: 10px 30px;
    }
  </style>
</head>
<body>
  <main id="main" class="main">
    <div class="pagetitle text-center">
      <h1>Tambah Data Buku</h1>
      <nav>
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Tambah Data Buku</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="form-container">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Form Tambah Data Buku</h5>
          
          <!-- Form Tambah Data Buku -->
          <form action="<?= base_url('home/aksi_tbuku') ?>" method="POST">
            <div class="form-group row mb-4">
              <label for="judul" class="col-sm-3 col-form-label">Judul Buku</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul buku" required>
              </div>
            </div>

            <div class="form-group row mb-4">
              <label for="Penulis" class="col-sm-3 col-form-label">Penulis</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="Penulis" name="Penulis" placeholder="Masukkan nama penulis" required>
              </div>
            </div>

            <div class="form-group row mb-4">
              <label for="Penerbit" class="col-sm-3 col-form-label">Penerbit</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="Penerbit" name="Penerbit" placeholder="Masukkan penerbit" required>
              </div>
            </div>

            <div class="form-group row mb-4">
              <label for="tahun_terbit" class="col-sm-3 col-form-label">Tahun Terbit</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Masukkan tahun terbit" required>
              </div>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- End Form -->
        </div>
      </div>
    </div>
  </main><!-- End #main -->

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
