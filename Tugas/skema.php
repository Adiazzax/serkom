<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Skema</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<style>
/* .container {
     background-color: gray;
 } */
 /* label {
    font-weight: bold;
 } */
</style>
</head>
<body>
    <div class="container">
        <div class="container">
        <h2>Pendaftaran Sertifikasi</h2>
        <!-- Tombol untuk menuju ke halaman peserta.php -->
        <a href="peserta.php"><button type="button" class="btn btn-secondary">Lihat Data Peserta</button></a>
        <br><br>
            <!-- Data Peserta -->
            <h2>Data Peserta</h2>
            <a href="tambah_peserta.php"><button type="button" class="btn btn-primary">Tambah Data Peserta</button></a>
            <br><br>
            <form action="skema.php" method="get">
                <label>Cari :</label>
                <input type="text" name="cari_peserta" class="form-control" placeholder="Masukkan Nama Peserta">
                <input type="submit" value="Cari" class="btn btn-success mt-2">
            </form>
            <!-- Letak Form Pencarian Peserta -->
            <?php 
            if(isset($_GET['cari_peserta'])){
                $cari_peserta = $_GET['cari_peserta'];
                echo "<b>Hasil pencarian : ".$cari_peserta."</b>";
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
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <!-- Letak Proses Pencarian Peserta -->
                <?php 
                include 'koneksi.php';
                $no = 1;
                if(isset($_GET['cari_peserta'])){
                    $cari_peserta = $_GET['cari_peserta'];
                    $sql_peserta = mysqli_query($conn, "SELECT * FROM tabel_peserta WHERE nm_peserta LIKE '%$cari_peserta%'");
                } else {
                    $sql_peserta = mysqli_query($conn, "SELECT * FROM tabel_peserta");
                }
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
                        <td>
                            <a href="edit_peserta.php?id=<?php echo $data_peserta['id_peserta']; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                            <a href="hapus_peserta.php?id=<?php echo $data_peserta['id_peserta']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                    <?php 
                    $no++;
                    }
                    ?> 
                </tbody>
            </table>
        </div>

        <div class="container">
            <!-- Data Skema -->
            <h2>Data Skema</h2>
            <a href="tambah_skema.php"><button type="button" class="btn btn-primary">Tambah Data Skema</button></a>
            <br><br>
            <form action="skema.php" method="get">
                <label>Cari :</label>
                <input type="text" name="cari_skema" class="form-control" placeholder="Masukkan Nama Skema">
                <input type="submit" value="Cari" class="btn btn-success mt-2">
            </form>
            <!-- Letak Form Pencarian Skema -->
            <?php 
            if(isset($_GET['cari_skema'])){
                $cari_skema = $_GET['cari_skema'];
                echo "<b>Hasil pencarian : ".$cari_skema."</b>";
            }
            ?>
            <table class="table mt-3 table-success">
                <thead class="table-danger">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Skema</th>
                        <th scope="col">Nama Skema</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Jumlah Unit</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <!-- Letak Proses Pencarian Skema -->
                <?php 
                $no = 1;
                if(isset($_GET['cari_skema'])){
                    $cari_skema = $_GET['cari_skema'];
                    $sql_skema = mysqli_query($conn, "SELECT * FROM tabel_skema WHERE nm_skema LIKE '%$cari_skema%'");
                } else {
                    $sql_skema = mysqli_query($conn, "SELECT * FROM tabel_skema");
                }
                while($data_skema = mysqli_fetch_array($sql_skema)){
                ?>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $no; ?></th>
                        <td><?php echo $data_skema['kd_skema']; ?></td>
                        <td><?php echo $data_skema['nm_skema']; ?></td>
                        <td><?php echo $data_skema['jenis']; ?></td>
                        <td><?php echo $data_skema['jml_unit']; ?></td>
                        <td>
                            <a href="edit_skema.php?id=<?php echo $data_skema['id_skema']; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                            <a href="hapus_skema.php?id=<?php echo $data_skema['id_skema']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                    <?php 
                    $no++;
                    }
                    ?> 
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
