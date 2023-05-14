<?php
include '../databases.php';

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $hubung = "DELETE FROM pesanan WHERE id = '$id'";
    $sql = mysqli_query($aksi, $hubung);

    if ($sql) {
        header("location:../pesanan.php");
    } else {
        echo $hubung;
    }
}
