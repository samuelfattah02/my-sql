<?php
include "connection.php";

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM pegawai WHERE id = $id");
$pegawai = mysqli_fetch_assoc($query);

?>
<html>
    <body>
        <h3>Profil Pegawai</h3>
        <label>Nama:</label> 
        <label><?= $pegawai['nama'] ?></label>
        <br>
        <label>Jenis Kelamin:</label>
        <label><?= $pegawai['jenis_kelamin'] ?></label>
        <br>
        <label>Alamat:</label>
        <label><?= $pegawai['alamat'] ?></label>
        <br>
        <label>Tempat Lahir:</label>
        <label><?= $pegawai['tempat_lahir'] ?></label>
        <br>
        <label>Tanggal Lahir:</label>
        <label><?= date('D-M-Y', strtotime($pegawai['tanggal_lahir'])) ?></label>
        <br>
        <label>Nomor Telepon:</label>
        <label><?= $pegawai['nomor_seluler'] ?></label>
        <br>
        <label>Status Perkawinan:</label>
        <label><?= $pegawai['status_perkawinan'] ?></label>
        <br>
        <a href="list.php">Kembali ke Daftar Pegawai</a>
    </body>
</html> 