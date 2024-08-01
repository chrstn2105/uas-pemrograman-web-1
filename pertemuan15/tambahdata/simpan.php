<?php
include '../koneksi.php';
// menyimpan data kedalam variabel
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$asal_sekolah = $_POST['asal_sekolah'];
$alamat= $_POST['alamat'];
$no_hp = $_POST['no_hp'];
// query SQL untuk insert data
$query="INSERT INTO mahasiswa_baru SET nisn='$nisn', nama='$nama', asal_sekolah='$asal_sekolah' ,alamat='$alamat', no_hp='$no_hp'";
if ($koneksi->query($query) === TRUE) {
    // Redirect ke halaman index dengan pesan berhasil
    header("Location:../index.php?status=success");
    exit();
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}


?>