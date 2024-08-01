<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENDAFTARAN MAHASISWA BARU</title>
</head>
<body>
   <h2>List Nama-nama siswa</h2>
   <a href="tambahdata/input.php"><p>[+] Tambah Data</p></a>
   <table border="1">
    <tr>   
        <th>NISN</th>
        <th>Nama</th>
        <th>Asal Sekolah</th>
        <th>Alamat</th>
        <th>No HP</th>
    </tr>
    <?php
    include "koneksi.php";
    $mahasiswa_baru = mysqli_query($koneksi, "SELECT * from mahasiswa_baru");
    $no=1;
    foreach ($mahasiswa_baru as $row){
        echo "<tr>
            <td>" . $row['nisn'] . "</td>
            <td>" . $row['nama'] . "</td>
            <td>" . $row['asal_sekolah'] . "</td>
            <td>" . $row['alamat'] . "</td>
            <td>" . $row['no_hp'] . "</td>
          
        </tr>";
        $no++;
    }
?>
   </table> 
   <br>
   <p>Total Mahasiswa = <?php echo ($no - 1); ?></p>
</body>
</html>