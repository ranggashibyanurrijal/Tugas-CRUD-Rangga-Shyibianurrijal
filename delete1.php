<?php
include 'koneksi.php';
// menyimpan data ID_Penerbit kedalam variabel
$ID_Penerbit = $_GET['ID_Penerbit'];
// query SQL untuk insert data
$query="DELETE FROM tb_penerbit WHERE ID_Penerbit='$ID_Penerbit'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:pengadaan.php");

?>