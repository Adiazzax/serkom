<?php
include 'koneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM tabel_skema WHERE id_skema = $id";
    if(mysqli_query($conn, $sql)){
        header('Location: skema.php');
        exit;
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
