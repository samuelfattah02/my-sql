<?php
include 'connection.php';

$id = $_GET['id'];
$query = $db->query("SELECT * FROM pegawai WHERE id = $id");
$pegawai = $query->fetch(PDO::FETCH_ASSOC);
?>

<html>
    <body>
        <h1>Edit Pegawai</h1>
        <form action="edit_process.php" method="POST">
            <input type="text" name="id" value="<?= $pegawai["id"] ?>" hidden />
            <label>Nama:</label>
            <input type="text" name="nama" value="<?= $pegawai["nama"] ?>" />
            <br></br>

            <label>Jenis Kelamin:</label>
            <select name="jenis_kelamin" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki" <?php if ($pegawai['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                <option value="Perempuan" <?php if ($pegawai['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
            </select>
            <br></br>

            <label>Alamat:</label>
            <textarea name="alamat" ><?= $pegawai["alamat"] ?></textarea>
            <br></br>

            <label>Tempat Lahir:</label>
            <input type="text" name="tempat_lahir" value="<?= $pegawai["tempat_lahir"] ?>" />
            <br></br>

            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" value="<?= $pegawai["tanggal_lahir"] ?>" />
            <br></br>
            
            <label>Nomor Telepon:</label>
            <input type="text" name="nomor_seluler" value="<?= $pegawai["nomor_seluler"] ?>" />
            <br></br>

            <label>Status Perkawinan:</label>
            <select name="status_perkawinan" required>
                <option value="">Pilih Status Perkawinan</option>
                <option value="Belum Menikah" <?php if ($pegawai['status_perkawinan'] == 'Belum Menikah') echo 'selected'; ?>>Belum Menikah</option>
                <option value="Menikah" <?php if ($pegawai['status_perkawinan'] == 'Menikah') echo 'selected'; ?>>Menikah</option>
            </select>
            <br> </br>         

            <button type="submit">Simpan</button>
        </form>
        <br></br>

        <a href="list.php">Kembali ke Daftar Pegawai</a>
    </body>
</html>
