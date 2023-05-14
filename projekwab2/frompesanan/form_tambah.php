<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <div class="container-fluid">
            <div class="card-header">
                <form method="POST" action="../proses_pesanan/proses_tambah.php">
                    <input type="hidden" value="<?= $id ?>" name="id">
                    <div class="form-group row">
                        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                        <div class="col-8">
                            <input id="tanggal" name="tanggal" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_pemesan" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat_pemesan" class="col-4 col-form-label">Alamat</label>
                        <div class="col-8">
                            <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_hp" class="col-4 col-form-label">Nomor</label>
                        <div class="col-8">
                            <input id="no_hp" name="no_hp" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Email</label>
                        <div class="col-8">
                            <input id="email" name="email" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
                        <div class="col-8">
                            <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                        <div class="col-8">
                            <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="produk_id" class="col-4 col-form-label">ID Produk</label>
                        <div class="col-8">
                            <input id="produk_id" name="produk_id" type="text" class="form-control">
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
</body>

</html>