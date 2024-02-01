<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Home</h2>
        <!-- Tombol untuk menuju ke halaman skema.php -->
        <a href="skema.php"><button type="button" class="btn btn-secondary">Pendaftaran Sertifikasi</button></a>
        <br><br>
        <form action="peserta.php" method="get">
            <label>Cari :</label>
            <input type="text" name="cari_peserta" class="form-control" placeholder="Masukkan Nama Peserta">
            <input type="submit" value="Cari" class="btn btn-success mt-2">
        </form>
        <!-- Letak Form Pencarian Peserta -->
        <?php
include 'koneksi.php';

if (isset($_GET['cari_peserta'])) {
    $cari_peserta = $_GET['cari_peserta'];
    $cari_nama_peserta = isset($_GET['cari_nama_peserta']) ? $_GET['cari_nama_peserta'] : '';
    $sql_peserta = mysqli_query($conn, "SELECT * FROM tabel_peserta WHERE alamat LIKE '%$cari_peserta%' AND nm_peserta LIKE '%$cari_nama_peserta%'");
} else {
    $sql_peserta = mysqli_query($conn, "SELECT * FROM tabel_peserta");
}
?>

            <table class="table mt-3 table-success">
                <thead class="table-danger">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Peserta</th>
                    <th scope="col">Kode Skema</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor HP</th>
                    <th scope="col">NIK</th>
                </tr>
            </thead>
            <!-- Letak Proses Pencarian Peserta -->
            <?php 
            $no = 1;
            while($data_peserta = mysqli_fetch_array($sql_peserta)){
            ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $data_peserta['nm_peserta']; ?></td>
                    <td><?php echo $data_peserta['kd_skema']; ?></td>
                    <td><?php echo $data_peserta['jekel']; ?></td>
                    <td><?php echo $data_peserta['alamat']; ?></td>
                    <td><?php echo $data_peserta['no_hp']; ?></td>
                    <td><?php echo $data_peserta['nik']; ?></td>
                </tr>
                <?php 
                $no++;
                }
                ?> 
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
