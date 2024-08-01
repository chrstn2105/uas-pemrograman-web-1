<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENDAFTARAN MAHASISWA BARU</title>
</head>
<body>
    <h3><b>Pendaftaran Mahasiswa Baru Politeknik Kupang</b></h3>
    <p><h1>Mahasiswa Baru</h1>
    <p><h4>Menu</h4>
    <p>&emsp;  &bull; <a href="tambahdata/input.php">Daftar</a></p>
    <p>&emsp;  &bull; <a href="list.php">Lihat List Siswa</a></p>
    <?php
    if (isset($_GET['status']) && $_GET['status'] == 'success') {
        echo "<p>Siswa Telah Berhasil Di Daftar!</p>";
    }
    ?>
</body>
</html>