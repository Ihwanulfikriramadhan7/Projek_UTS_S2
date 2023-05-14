<?php
include '../databases.php';
if (isset($_POST['tambah'])) {
    

        // var_dump($_POST);
        // die();
        $kode           = $_POST['kode'];
        $nama           = $_POST['nama_barang'];
        $hargajul       = $_POST['harga_jual'];
        $hargabel       = $_POST['harga_beli'];
        $stok           = $_POST['stok'];
        $min            = $_POST['min_stok'];
        $des            = $_POST['deskripsi'];
        $kategori       = $_POST['kategori_produk_id'];
        $query = "INSERT INTO produk VALUES (null,  '$kode', '$nama', '$hargajul', '$hargabel', '$stok', '$min', '$des', '$kategori')";
        $sql = mysqli_query($aksi, $query);
        if ($sql) {
            echo header("location:../halaman_belakang/produk.php");
        } else {
            echo $query;
        }


    }
?>