<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Skema</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Edit Data Skema</h1>
        <?php
        include "koneksi.php";
        $id_skema = $_GET['id'];
        $query = "SELECT * FROM tabel_skema WHERE id_skema = $id_skema";
        $result = mysqli_query($conn, $query);
        $data_skema = mysqli_fetch_assoc($result);
        ?>
        <form name="editSkemaForm" method="post" action="edit_skema_proses.php">
            <input type="hidden" name="id_skema" value="<?php echo $id_skema; ?>">
            <div class="mb-3">
                <label class="form-label">Kode Skema</label>
                <input type="text" class="form-control" name="kd_skema" value="<?php echo $data_skema['kd_skema']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Skema</label>
                <input type="text" class="form-control" name="nm_skema" value="<?php echo $data_skema['nm_skema']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis</label>
                <input type="text" class="form-control" name="jenis" value="<?php echo $data_skema['jenis']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Unit</label>
                <input type="number" class="form-control" name="jml_unit" value="<?php echo $data_skema['jml_unit']; ?>" required>
            </div>
            <button type="submit" name="edit_skema" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>
