<?php
include "koneksi.php";
// menangkap data yang di kirim dari form
$ID_Buku = $_POST["ID_Buku"];
$Nama_Produk = $_POST["Nama_Produk"];
$Kategori = $_POST["Kategori"];
$Harga = $_POST["Harga"];
$Stok = $_POST["Stok"];
$Penerbit = $_POST["Penerbit"];


// menginput data ke database
$sql = "INSERT INTO tb_produk (ID_Buku,Nama_Produk,Kategori ,Harga,Stok,Penerbit)
VALUES('$ID_Buku','$Nama_Produk','$Kategori','$Harga','$Stok','$Penerbit')";
$query = mysqli_query($koneksi, $sql);
// mengalihkan halaman kembali ke Beranda
header("location:admin.php");