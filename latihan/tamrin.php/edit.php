<?php

include 'connection.php';

$id = $_GET['id'];
$query = $db->query("SELECT * FROM pegawai WHERE id = $id");
$pegawai = $query->fetchAll();
?>

<html>
    <body>
        <h1>Edit Pegawai</h1>
        <form action="edit_procces.php" method="POST">
            <input type="text" name="id" value="<?= &pegawai["id"] ?>" hidden />
            
        </form>
    </body>
</html>