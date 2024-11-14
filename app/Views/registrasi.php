<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi User Baru</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .main {
      max-width: 800px;
      margin: 50px auto;
      padding: 20px;
    }
    .form-container {
      background: #fff;
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
  </style>
</head>
<body>
  <main class="main">
    <div class="pagetitle text-center mb-4">
      <h1>Registrasi User Baru</h1>
     
    </div>

    <div class="form-container">
      <form action="<?= base_url('home/aksi_tu') ?>" method="POST">
        <div class="form-group row mb-3">
          <label for="username" class="col-sm-3 col-form-label">Nama User</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan nama" required>
          </div>
        </div>

        <div class="form-group row mb-3">
          <label for="password" class="col-sm-3 col-form-label">Password</label>
          <div class="col-sm-9">
            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
          </div>
        </div>

        <div class="form-group row mb-3">
          <label for="email" class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
          </div>
        </div>

        <div class="form-group row mb-3">
          <label for="namalengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukkan nama lengkap" required>
          </div>
        </div>

        <div class="form-group row mb-3">
          <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" required>
          </div>
        </div>

       <!--  <div class="form-group row mb-3">
          <label for="id_level" class="col-sm-3 col-form-label">Jabatan</label>
          <div class="col-sm-9">
            <input type="number" class="form-control" id="id_level" name="id_level" placeholder="Masukkan level jabatan" required>
          </div>
        </div>
 -->
        <div class="text-center">
         <form action="<?= base_url('home/aksi_registrasi') ?>" method="post">
    <!-- Field form lainnya -->
    <button type="submit">Daftar</button>

</form>

          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form>
    </div>
  </main>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
