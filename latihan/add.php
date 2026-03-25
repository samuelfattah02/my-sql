<html>
    <body>
        <h1>Tambah Pegawai</h1>
        <form action="add_process.php" method="POST">
            <label>Nama:</label>
            <input type="text" name="nama" required>
            <br></br>
            <label>Jenis Kelamin:</label>
            <select name="jenis_kelamin" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <br></br>
            <label>Alamat:</label>
            <textarea name="alamat" required></textarea>
            <br></br>
            <label>Tempat Lahir:</label>
            <input type="text" name="tempat_lahir" required>
            <br>
            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" required>
            <br></br></br>
            <label>Nomor Telepon:</label>
            <input type="text" name="nomor_seluler" required>
            <br></br>
            <label>Status Perkawinan:</label>
            <select name="status_perkawinan" required>
                <option value="">Pilih Status Perkawinan</option>
                <option value="Belum Menikah">Belum Menikah</option>
                <option value="Menikah">Menikah</option>
                <option value="Cerai">Cerai</option>
            </select>
            <br> </br>            
            <button type="submit">Simpan</button>
        </form>
        <br>
        <a href="list.php">Kembali ke Daftar Pegawai</a>
    </body>
</html>
