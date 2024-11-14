<!-- resources/views/cuti.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css'); ?>">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4"><?php echo $title; ?></h2>

        <!-- Cuti Request Form -->
        <form action="<?php echo site_url('cuti/store'); ?>" method="POST">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="tanggal_mulai">Tanggal Mulai Cuti</label>
                <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
            </div>

            <div class="form-group">
                <label for="tanggal_selesai">Tanggal Selesai Cuti</label>
                <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
            </div>

            <div class="form-group">
                <label for="alasan">Alasan Cuti</label>
                <textarea class="form-control" id="alasan" name="alasan" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Ajukan Cuti</button>
            </div>
        </form>
    </div>

    <script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
</body>
</html>
