
<?php
include '../databases.php';

if ($_POST['pesanan']) {
    $id = $_POST['id'];
    $tanggal = $_POST['tanggal'];
    $nama = $_POST['nama_pemesan'];
    $alamat = $_POST['alamat_pemesan'];
    $nomor = $_POST['no_hp'];
    $email = $_POST['email'];
    $jumlah = $_POST['jumlah_pesanan'];
    $des = $_POST['deskripsi'];
    $produk  = $_POST['produk_id'];

    $hubung = "UPDATE pesanan SET tanggal='$tanggal', nama_pemesan='$nama', alamat_pemesan='$alamat', no_hp='$nomor', email=' $email ', jumlah_pesanan='$jumlah', deskripsi='$des', produk_id='$produk' WHERE id='$id';";
    $sql = mysqli_query($aksi, $hubung);
    if ($sql) {
        header("location:../pesanan.php");
    } else {
        echo $hubung;
    }
}

?>