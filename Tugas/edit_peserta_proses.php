<?php
include "koneksi.php";

if(isset($_POST['kd_skema']) && isset($_POST['nm_peserta']) && isset($_POST['jekel']) && isset($_POST['alamat']) && isset($_POST['no_hp']) && isset($_POST['id_peserta'])) {
    $kd_skema = mysqli_real_escape_string($conn, $_POST['kd_skema']);
    $nm_peserta = mysqli_real_escape_string($conn, $_POST['nm_peserta']);
    $jekel = mysqli_real_escape_string($conn, $_POST['jekel']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);
    $id_peserta = mysqli_real_escape_string($conn, $_POST['id_peserta']);

    $query = "UPDATE tabel_peserta SET kd_skema = ?, nm_peserta = ?, jekel = ?, alamat = ?, no_hp = ? WHERE id_peserta = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssssss", $kd_skema, $nm_peserta, $jekel, $alamat, $no_hp, $id_peserta);
        if (mysqli_stmt_execute($stmt)) {
            echo "Data berhasil diubah";
            header("refresh:1; url=skema.php");
        } else {
            echo "Gagal mengubah data.";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
