<?php
include '../databases.php';

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $hubung = "DELETE FROM produk WHERE id = '$id'";
    $sql = mysqli_query($aksi, $hubung);

    if ($sql) {
        header("location:../produk.php");
    } else {
        echo $hubung;
    }
}
