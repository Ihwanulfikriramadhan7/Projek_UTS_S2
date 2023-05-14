<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Tambah</title>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 mt-4">


                <div class="card">
                    <div class="card-header">
                        From Tambah data
                        <div class="card-body">
                            <form method="POST" action="../proses/proses_produkT.php">
                                <input type="hidden" value="<?= $id ?>" name="id">
                                <div class="form-group row">
                                    <label for="kode" class="col-4 col-form-label">Code</label>
                                    <div class="col-8">
                                        <input id="kode" value="" name="kode" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_barang" class="col-4 col-form-label">Barang</label>
                                    <div class="col-8">
                                        <input id="nama_barang" value="" name="nama_barang" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
                                    <div class="col-8">
                                        <input id="harga_jual" value="" name="harga_jual" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                                    <div class="col-8">
                                        <input id="harga_beli" value="" name="harga_beli" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="stok" class="col-4 col-form-label">Stok</label>
                                    <div class="col-8">
                                        <input id="stok" value="" name="stok" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="min_stok" class="col-4 col-form-label">Minstok</label>
                                    <div class="col-8">
                                        <input id="min_stok" value="" name="min_stok" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                                    <div class="col-8">
                                        <textarea id="deskripsi" value="" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kategori_produk_id" class="col-4 col-form-label">Kategori</label>
                                    <div class="col-8">
                                        <select id="kategori_produk_id" value="ri ?>" name="kategori_produk_id" class="custom-select">
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
                                        <button name="tambah" type="submit" class="btn btn-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-plus-fill" viewBox="0 0 16 16">
                                                <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z" />
                                                <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM8.5 6.5V8H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V9H6a.5.5 0 0 1 0-1h1.5V6.5a.5.5 0 0 1 1 0Z" />
                                            </svg>
                                            Tambah Data
                                        </button>
                                        <a href="../produk.php" type="submit" class="btn btn-danger">
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
                <div class="col-md-2">
                </div>
            </div>
        </div>


</body>

</html>