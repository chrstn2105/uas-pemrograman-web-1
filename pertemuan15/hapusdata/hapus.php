<?php
include '../koneksi.php';
// menyimpan data id kedalam variabel
$nisn = $_GET['nisn'];
// query SQL untuk insert data
$query="DELETE from mahasiswa_baru where nisn='$nisn'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:../index.php");
?>