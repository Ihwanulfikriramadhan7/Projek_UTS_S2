<?php
include '../databases.php';

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $sql = mysqli_query($aksi, "SELECT * FROM produk WHERE id = '$id';");

    $har = mysqli_fetch_assoc($sql);


    $kode = $har['kode'];
    $nama = $har['nama_barang'];
    $hargajul = $har['harga_jual'];
    $hargabel = $har['harga_beli'];
    $stok = $har['stok'];
    $min = $har['min_stok'];
    $des = $har['deskripsi'];
    $kategori = $har['kategori_produk_id'];
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Edit</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand text-white" href="#">
            <img src="../img/logo.png " width="30" height="30" class="d-inline-block align-top bg-white" alt="">
            Corona Shop
        </a>
    </nav>
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 mt-4">
                    <div class="card">
                        <div class="card-header">
                            Tambah Barang
                        </div>
                        <div class="card-body">
                            <form method="POST" action="../proses/proses_edit.php">
                                <input type="hidden" value="<?= $id ?>" name="id">
                                <div class="form-group row">
                                    <label for="kode" class="col-4 col-form-label">Code</label>
                                    <div class="col-8">
                                        <input id="kode" value="<?= $kode ?>" name="kode" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_barang" class="col-4 col-form-label">Barang</label>
                                    <div class="col-8">
                                        <input id="nama_barang" value="<?= $nama ?>" name="nama_barang" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
                                    <div class="col-8">
                                        <input id="harga_jual" value="<?= $hargajul ?>" name="harga_jual" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                                    <div class="col-8">
                                        <input id="harga_beli" value="<?= $hargabel ?>" name="harga_beli" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="stok" class="col-4 col-form-label">Stok</label>
                                    <div class="col-8">
                                        <input id="stok" value="<?= $stok ?>" name="stok" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="min_stok" class="col-4 col-form-label">Minstok</label>
                                    <div class="col-8">
                                        <input id="min_stok" value="<?= $min ?>" name="min_stok" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                                    <div class="col-8">
                                        <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"><?= $des ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kategori_produk_id" class="col-4 col-form-label">Kategori</label>
                                    <div class="col-8">
                                        <select id="kategori_produk_id" value="<?= $kategori ?>" name="kategori_produk_id" class="custom-select">
                                            <option value="1">1.Audio,kamera</audio></option>
                                            <option value="2">2.Buku</option>
                                            <option value="3">3.Elektronik</option>
                                            <option value="4">4.Gaming</option>
                                            <option value="5">5.Dapur</option>
                                            <option value="6">6.Fashion Muslim</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="edit" value="edit" type="submit" class="btn btn-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save-fill" viewBox="0 0 16 16">
                                                <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v7.793L4.854 6.646a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l3.5-3.5a.5.5 0 0 0-.708-.708L8.5 9.293V1.5z" />
                                            </svg>
                                            Simpan Data
                                        </button>
                                        <a href="../halaman_belakang/produk.php" type="submit" class="btn btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                                                <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                                            </svg>
                                            Reset
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>

</body>

</html>