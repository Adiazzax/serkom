<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Peserta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Data Peserta</h1>
        <form name="tambahPesertaForm" id="tambahPesertaForm" method="post" action="tambah_peserta_proses.php">
            <div class="mb-3">
                <label class="form-label">ID Peserta</label>
                <input type="text" class="form-control" name="id_peserta" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Kode Skema</label>
                <input type="text" class="form-control" name="Kd_skema" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Peserta</label>
                <input type="text" class="form-control" name="Nm_peserta" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" name="jekel" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor HP</label>
                <input type="text" class="form-control" name="No_hp" id="No_hp" required>
                <small id="nomorHpHelp" class="form-text text-danger"></small>
            </div>
            <div class="mb-3">
                <label class="form-label">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik" required>
            </div>
            <button type="submit" name="tambah_peserta" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>

    <script>
        document.getElementById("tambahPesertaForm").addEventListener("submit", function(event) {
            var nomorHp = document.getElementById("No_hp").value;
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
