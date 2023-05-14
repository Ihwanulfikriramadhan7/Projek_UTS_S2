<?php

include '../databases.php';


if ($_POST['edit']) {

    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama_barang'];
    $hargajul = $_POST['harga_jual'];
    $hargabel = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $min = $_POST['min_stok'];
    $des = $_POST['deskripsi'];
    $kategori = $_POST['kategori_produk_id'];

    $query = "UPDATE produk SET kode='$kode', nama_barang='$nama', harga_jual='$hargajul', harga_beli='$hargabel', stok='$stok', min_stok='$min', deskripsi='$des', kategori_produk_id='$kategori' WHERE id='$id';";
    $sql = mysqli_query($aksi, $query);
    // var_dump($_POST);
    // die();
    if ($sql) {
        echo header("location:../halaman_belakang/produk.php");
    } else {
        echo $query;
    }
}
