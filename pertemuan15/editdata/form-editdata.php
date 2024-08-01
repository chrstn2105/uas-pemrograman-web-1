<?php
include '../koneksi.php';
$id = $_GET['nisn'];
$mahasiswa_baru = mysqli_query($koneksi, "select * from mahasiswa_baru where nisn='$nisn'");
$row = mysqli_fetch_array($mahasiswa_baru);
// membuat function untuk set aktif radio button
function active_radio_button($value, $input) {
// apabila value dari radio sama dengan yang di input $result = $value==$input?'checked':'';
return $result;
}
?>
<!DOCTYPE html>
<title>Mahasiswa Baru</title>
<form method="post" action="edit.php">
<html>
<head>
    <title>Pendaftaran Mahasiswa Baru</title>
</head>
<body>
    <form action="edit.php" method="POST">
<input type="hidden" value="<?php echo $row['nisn'];?>" name="nisn">
<table>
<tr><td>Nama</td><td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td></tr> 
<tr><td>Asal Sekolah</td><td><input type="text" value="<?php echo $row['asal_sekolah'];?>" name="asal_sekolah"></td></tr>
<tr><td>Alamat</td><td><input type="text" value="<?php echo $row['alamat'];?>" name="alamat"></td></tr>
<tr><td>No HP</td><td><input value="<?php echo $row['no_hp'];?>" type="text" name="no_hp"></td></tr>
<tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
<a href="../index.php">Kembali</a></td></tr>
</table>
</form>
</body>
</html>