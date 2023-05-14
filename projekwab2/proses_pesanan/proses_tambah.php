<?php
include '../databases.php';
if (isset($_POST['tambah'])) {


    // var_dump($_POST);
    // die();
    $tanggal = $_POST['tanggal'];
    $nama = $_POST['nama_pemesan'];
    $alamat = $_POST['alamat_pemesan'];
    $nomor = $_POST['no_hp'];
    $email = $_POST['email'];
    $jumlah = $_POST['jumlah_pesanan'];
    $des = $_POST['deskripsi'];
    $produk  = $_POST['produk_id'];
    
    $query = "INSERT INTO pesanan VALUES (null,  '$tanggal   ', '$nama', '$alamat', '$nomor', '$email', '$jumlah ', '$des', '$produk ')";
    $sql = mysqli_query($aksi, $query);
    if ($sql) {
        echo header("location:../pesanan.php");
    } else {
        echo $query;
    }
}
