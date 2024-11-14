<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
        }
        .checkbox-label {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }
        .checkbox-label input[type="checkbox"] {
            margin-right: 8px;
        }
        .card-description {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3><?=$title?></h3>
                        <h3>Persuratan</h3>
                        <p class="text-subtitle text-muted">Berikut ini adalah halaman manajemen disposisi <?=$title?></p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <!-- Breadcrumb jika diperlukan -->
                        </nav>
                    </div>
                </div>
                
                <!-- Card for Disposisi Management -->
                <div class="card">
                    <div class="card-header">Manajemen Disposisi</div>
                    <p class="card-description">Jika sudah dicentang, pengguna dengan jabatan tersebut dapat mengakses surat-surat tertentu.</p>
                    <div class="checkbox-label">
                        <input type="checkbox" id="manager" name="roles[]" value="manager">
                        <label for="manager">Manajer</label>
                    </div>
                    <div class="checkbox-label">
                        <input type="checkbox" id="supervisor" name="roles[]" value="supervisor">
                        <label for="supervisor">Supervisor</label>
                    </div>
                    <div class="checkbox-label">
                        <input type="checkbox" id="staff" name="roles[]" value="staff">
                        <label for="staff">Staff</label>
                    </div>
                </div>

                <!-- Card for Division Management -->
                <div class="card">
                    <div class="card-header">Manajemen Divisi</div>
                    <p class="card-description">Jika sudah dicentang, pengguna di divisi tersebut dapat mengakses dokumen-dokumen tertentu yang relevan dengan divisi mereka.</p>
                    <div class="checkbox-label">
                        <input type="checkbox" id="finance" name="divisions[]" value="finance">
                        <label for="finance">Divisi Keuangan</label>
                    </div>
                    <div class="checkbox-label">
                        <input type="checkbox" id="hr" name="divisions[]" value="hr">
                        <label for="hr">Divisi Sumber Daya Manusia</label>
                    </div>
                    <div class="checkbox-label">
                        <input type="checkbox" id="operations" name="divisions[]" value="operations">
                        <label for="operations">Divisi Operasional</label>
                    </div>
                    <div class="checkbox-label">
                        <input type="checkbox" id="it" name="divisions[]" value="it">
                        <label for="it">Divisi Teknologi Informasi</label>
                    </div>
                    <!-- Add more divisions as needed -->
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
