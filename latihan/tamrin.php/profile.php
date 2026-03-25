<?php

include "connection.php";
$query = $db->query("SELECT * FROM pegawai");
$result = $query->fetch();

?>
<html>
    <body>
        <h3>Profil Pegawai</h3>
        <label>Nama:</label>
        <label><?=  $result[1]  ?></label>
        <br>

        <label>Jenis Kelamin:</label>
        <label><?=  $result[2] ?></label>
        <br>

        
        <label>Alamat:</label>
        <label><?=  $result[3] ?></label>
        <br>
        
        <label>Tempat Lahir:</label>
        <label><?=  $result[4] ?></label>
        <br>
        
        <label>Tanggal Lahir:</label>
        <label><?= date('D-M-Y', strtotime($result[5])) ?></label>
        <br>
        
        <label>Nomor Telepon:</label>
        <label><?=  $result[6] ?></label>
        <br>
        
        <label>Status Perkawinan:</label>
        <label><?=  $result[7] ?></label>
        <br>
        <a href="list.php">Kembali Ke Daftar Pegawai</a>
    </body>
</html>