<?php
include "connection.php";

$id = $_GET['id'];
$query = $db->query("SELECT * FROM pegawai WHERE id = $id");
$pegawai = $query->fetch();

?>
<html>
    <body>
        <h3>Profil Pegawai</h3>
        <label>Nama:</label> 
        <label><?= $pegawai[1] ?></label>
        <br>
        <label>Jenis Kelamin:</label>
        <label><?= $pegawai[2] ?></label>
        <br>
        <label>Alamat:</label>
        <label><?= $pegawai[3] ?></label>
        <br>
        <label>Tempat Lahir:</label>
        <label><?= $pegawai[4] ?></label>
        <br>
        <label>Tanggal Lahir:</label>
        <label><?= date('D-M-Y', strtotime($pegawai[5])) ?></label>
        <br>
        <label>Nomor Telepon:</label>
        <label><?= $pegawai[6] ?></label>
        <br>
        <label>Status Perkawinan:</label>
        <label><?= $pegawai[7] ?></label>
        <br>
        <a href="list.php">Kembali ke Daftar Pegawai</a>
    </body>
</html> 