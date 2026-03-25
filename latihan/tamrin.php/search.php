<?php

include 'connection.php';

$keyword = $_GET['keyword'];

$query =$db->query("SELECT * FROM pegawai where nama LIKE '%$keyword%' or alamat LIKE '%$keyword%'");
$result = $query->fetchAll();
?>


<html>
    <body>
        <h1>SEARCH PEGAWAI</h1>
        <form method="GET" action = "search.php">
            <input type="text" name= "keyword" placeholder = "Cari Pegawai...">
            <button type="submit">cari</button>
        </form>
        <a href="add.php">Tambah Pegawai</a> | <a href="list.php">Kembali ke List Pegawai</a>
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
