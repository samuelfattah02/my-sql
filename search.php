<?php

include "connection.php";

$keyword = $_GET['keyword'];

$query = mysqli_query($connection, "SELECT * FROM pegawai WHERE nama LIKE '%$keyword%' or alamat LIKE '%$keyword%' ");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?><html> 
    <body>
        <h1>Search Results</h1>

        <form method="GET" action ="search.php">
            <input type="text" name="keyword" placeholder="Cari pegawai...">
            <button type="submit">Cari</button>
        </form>

         <a href="add.php">Tambah Pegawai</a> | <a href="list.php">Kembali ke Daftar Pegawai</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($result as $index => $karyawan) : ?>
            <tr>
                <td><?=  $index + 1; ?></td>
                <td><a href="profile.php?id=<?= $karyawan['id'] ?>"><?= $karyawan['nama'] ?></a></td>
                <td><?= $karyawan['jenis_kelamin'] ?></td>
                <td><?= $karyawan['alamat'] ?></td>
                <td><a href = "edit.php?id=<?= $karyawan['id'] ?>">Edit</a>
                <a href = "delete.php?id=<?= $karyawan['id'] ?>">Delete</a></td>
            </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>