<?php

include "connection.php";
$query = $db->query("SELECT * FROM pegawai");
$result = $query->fetchALL();
?>
<html>
    <body>
        <h1>LIST PEGAWAI</h1>
        <form method="GET" action = "search.php">
            <input type="text" name= "keyword" placeholder = "Cari Pegawai...">
            <button type="submit">cari</button>
        </form>
        <a href="add.php">Tambah Pegawai</a>
        <table border =1> 
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($result as $index => $karyawan) : ?>
            <td><?php echo $index + 1; ?> </td>
            <td><a href="profile.php?id=<?=  $karyawan['id'] ?>"><?= $karyawan['nama'] ?></a></td>
            <td><?= $karyawan['jenis_kelamin'] ?></td>
            <td><?= $karyawan['alamat'] ?></td>
            <td><a href="edit.php?id=<?=  $karyawan['id'] ?>">Edit</a>
            <a href="delete.php?id=<?=  $karyawan['id'] ?>">Delete</a></td>
        </tr>
        <?php endforeach; ?>
            </table>
    </body>
</html>