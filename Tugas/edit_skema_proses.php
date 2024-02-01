<?php
include "koneksi.php";

if(isset($_POST['kd_skema']) && isset($_POST['nm_skema']) && isset($_POST['jenis']) && isset($_POST['jml_unit']) && isset($_POST['id_skema'])) {
    $kd_skema = mysqli_real_escape_string($conn, $_POST['kd_skema']);
    $nm_skema = mysqli_real_escape_string($conn, $_POST['nm_skema']);
    $jenis = mysqli_real_escape_string($conn, $_POST['jenis']);
    $jml_unit = mysqli_real_escape_string($conn, $_POST['jml_unit']);
    $id_skema = mysqli_real_escape_string($conn, $_POST['id_skema']);

    $query = "UPDATE tabel_skema SET kd_skema = ?, nm_skema = ?, jenis = ?, jml_unit = ? WHERE id_skema = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssisi", $kd_skema, $nm_skema, $jenis, $jml_unit, $id_skema);
        if (mysqli_stmt_execute($stmt)) {
            echo "Data Skema Berhasil Diubah";
            header("refresh:1; url=skema.php");
        } else {
            echo "Gagal mengedit data skema.";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
