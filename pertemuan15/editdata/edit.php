<?php
include '../koneksi.php';
// menyimpan data kedalam variabel
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$asal_sekolah = $_POST['asal_sekolah'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
// query SQL untuk insert data
$query="UPDATE mahasiswa_baru SET nisn='$nisn', nama='$nama',
asal_sekolah='$asal_sekolah', alamat='$alamat', no_hp='$no_hp' where nisn='$nisn'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:../index.php");
?>