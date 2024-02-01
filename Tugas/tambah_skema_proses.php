<?php
include "koneksi.php";

if(isset($_POST['id_skema']) && isset($_POST['Nm_skema']) && isset($_POST['jenis']) && isset($_POST['jml_unit']) && isset($_POST['Kd_skema'])) {
    $id_skema = mysqli_real_escape_string($conn, $_POST['id_skema']);
    $Nm_skema = mysqli_real_escape_string($conn, $_POST['Nm_skema']);
    $jenis = mysqli_real_escape_string($conn, $_POST['jenis']);
    $jml_unit = mysqli_real_escape_string($conn, $_POST['jml_unit']);
    $Kd_skema = mysqli_real_escape_string($conn, $_POST['Kd_skema']);

    $query = "INSERT INTO tabel_skema (id_skema, Nm_skema, jenis, jml_unit, Kd_skema) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "issss", $id_skema, $Nm_skema, $jenis, $jml_unit, $Kd_skema);
        if (mysqli_stmt_execute($stmt)) {
            echo "Data Skema Berhasil Ditambahkan";
            header("refresh:1; url=skema.php");
        } else {
            echo "Gagal menambahkan data skema.";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
