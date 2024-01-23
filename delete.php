<?php
include 'koneksi.php';
// menyimpan data ID_Buku kedalam variabel
$ID_Buku = $_GET['ID_Buku'];
// query SQL untuk insert data
$query="DELETE FROM tb_produk WHERE ID_Buku='$ID_Buku'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:admin.php");

?>