<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Peserta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Edit Data Peserta</h1>
        <?php
        include "koneksi.php";
        $id_peserta = $_GET['id'];

        $query = "SELECT * FROM tabel_peserta WHERE id_peserta = $id_peserta";
        $result = mysqli_query($conn, $query);
        $data_peserta = mysqli_fetch_assoc($result);
        ?>
        <form name="editPesertaForm" id="editPesertaForm" method="post" action="edit_peserta_proses.php">
            <input type="hidden" name="id_peserta" value="<?php echo $id_peserta; ?>">
            <div class="mb-3">
                <label class="form-label">Kode Skema</label>
                <input type="text" class="form-control" name="kd_skema" value="<?php echo $data_peserta['kd_skema']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Peserta</label>
                <input type="text" class="form-control" name="nm_peserta" value="<?php echo $data_peserta['nm_peserta']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" name="jekel" value="<?php echo $data_peserta['jekel']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $data_peserta['alamat']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor HP</label>
                <input type="text" class="form-control" name="no_hp" id="no_hp" value="<?php echo $data_peserta['no_hp']; ?>" required>
                <small id="nomorHpHelp" class="form-text text-danger"></small>
            </div>
            <button type="submit" name="edit_peserta" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>

    <script>
        document.getElementById("editPesertaForm").addEventListener("submit", function(event) {
            var nomorHp = document.getElementById("no_hp").value;
            if (nomorHp.length > 13) {
                document.getElementById("nomorHpHelp").innerText = "Nomor HP tidak boleh lebih dari 13 digit.";
                event.preventDefault();
            } else {
                document.getElementById("nomorHpHelp").innerText = "";
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
