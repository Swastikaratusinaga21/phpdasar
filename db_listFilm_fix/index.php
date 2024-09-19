<!-- REVISI db_listFilm -->

<?php

require 'functions.php';
$listfilm = query("SELECT * FROM dataanime");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Film</title>
</head>

<body>
    <h1>Daftar Film</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No. </th>
            <th>Gambar</th>
            <th>Nama Film</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Studio</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; // Inisialisasi variabel $i untuk nomor urutan 
        ?>
        <?php foreach ($listfilm as $row) : ?>
            <tr>
                <td> <?= $i; ?></td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="100px"></td>
                <td> <?= $row["nama"]; ?></td>
                <td> <?= $row["pengarang"]; ?> </td>
                <td> <?= $row["penerbit"] ?></td>
                <td> <?= $row["studio"]; ?></td>
                <td>
                    <a href="editFilm.php?id=1">Edit</a> |
                    <a href="hapusFilm.php?id=1">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>