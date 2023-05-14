<?php
include '../databases.php';

if (isset($_GET['view'])) {
    $id = $_GET['view'];

    $sql = mysqli_query($aksi, "SELECT * FROM produk WHERE id = '$id';");

    $tab = mysqli_fetch_assoc($sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>

<body>

    <div class="continuer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 bg-secondary text-white">
                    <!-- Image and text -->
                    <nav class="navbar navbar-light bg-secondary">
                        <a class="navbar-brand text-white" href="#">
                            <img src="../img/logo.png " width="30" height="30" class="d-inline-block align-top bg-white" alt="">
                            Corona Shop
                        </a>
                    </nav>
                </div>
            </div><br>
            <div class="row mt-4">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <table class="table table-border">
                              
                                <tr>
                                    <td class="bg-dark text-white">Nama Type Produk</td>
                                    <td><?= $tab['kode'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td><?= $tab['nama_barang'] ?></td>
                                </tr>
                                <tr>
                                    <td>Harga Jual</td>
                                    <td><?= $tab['harga_jual'] ?></td>
                                </tr>
                                <tr>
                                    <td>Harga Beli</td>
                                    <td><?= $tab['harga_beli'] ?></td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td><?= $tab['stok'] ?></td>
                                </tr>
                                <tr>
                                    <td>Minstok</td>
                                    <td><?= $tab['min_stok'] ?></td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td><?= $tab['deskripsi'] ?></td>
                                </tr>
                                <tr>
                                    <td>Kategori</td>
                                    <td><?= $tab['kategori_produk_id'] ?></td>
                                </tr>

                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-4"></div>
       
    </div>
    </div><br><br>
    <div class="row">
            <div class="col-12 bg-secondary mt-4">
                <h6 class="text-white"><b>@ihwanulfikriramadhan</b></h6>
            </div>
        </div>
</body>

</html>