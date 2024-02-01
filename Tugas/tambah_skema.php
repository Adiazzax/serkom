<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Skema</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Data Skema</h1>
        <form name="tambahSkemaForm" method="post" action="tambah_skema_proses.php">
            <div class="mb-3">
                <label class="form-label">ID Skema</label>
                <input type="text" class="form-control" name="id_skema" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Kode Skema</label>
                <input type="text" class="form-control" name="Kd_skema" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Skema</label>
                <input type="text" class="form-control" name="Nm_skema" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis</label>
                <input type="text" class="form-control" name="jenis" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Unit</label>
                <input type="text" class="form-control" name="jml_unit" required>
            </div>
            <button type="submit" name="tambah_skema" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
</body>
</html>
