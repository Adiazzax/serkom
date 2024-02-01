<?php
include "koneksi.php";

if(isset($_POST['id_peserta']) && isset($_POST['Kd_skema']) && isset($_POST['Nm_peserta']) && isset($_POST['jekel']) && isset($_POST['alamat']) && isset($_POST['No_hp']) && isset($_POST['nik'])) {
    $id_peserta = mysqli_real_escape_string($conn, $_POST['id_peserta']);
    $Kd_skema = mysqli_real_escape_string($conn, $_POST['Kd_skema']);
    $Nm_peserta = mysqli_real_escape_string($conn, $_POST['Nm_peserta']);
    $jekel = mysqli_real_escape_string($conn, $_POST['jekel']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $No_hp = mysqli_real_escape_string($conn, $_POST['No_hp']);
    $nik = mysqli_real_escape_string($conn, $_POST['nik']);

    $query = "INSERT INTO tabel_peserta (id_peserta, Kd_skema, Nm_peserta, jekel, alamat, No_hp, nik) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssssss", $id_peserta, $Kd_skema, $Nm_peserta, $jekel, $alamat, $No_hp, $nik);
        if (mysqli_stmt_execute($stmt)) {
            echo "Data Peserta Berhasil Ditambahkan";
            header("refresh:1; url=skema.php");
}else{
            echo "Gagal menambahkan data peserta.";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
