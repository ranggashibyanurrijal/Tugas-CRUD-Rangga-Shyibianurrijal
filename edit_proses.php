<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$ID_Buku = $_POST['ID_Buku'];
$Kategori = $_POST['Kategori'];
$Nama_Produk = $_POST['Nama_Produk'];
$Harga = $_POST['Harga'];
$Stok = $_POST['Stok'];
$Penerbit = $_POST['Penerbit'];

// update data ke database
mysqli_query($koneksi,"update tb_produk set Kategori='$Kategori',
Nama_Produk='$Nama_Produk', Harga='$Harga', Stok='$Stok', Penerbit='$Penerbit'  where ID_Buku='$ID_Buku'");
// mengalihkan halaman kembali ke index.php
header("location:admin.php");

?>