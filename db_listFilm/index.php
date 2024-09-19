<!-- Mengambil data dari database listFilm -->

<?php

// Mengoneksikan database ke file php
$conn = mysqli_connect("localhost", "root", "", "listfilm");

// ambil data dari tabel data anime = query 
$result = mysqli_query($conn, "SELECT * FROM dataanime");

// Cara melihat sebuah koneksi sudah terkoneksi dengan baik atau belum
// if(!$result ){
//     echo mysqli_error($conn);
// }

// Mengambil data(fetch) dari object result ada 4 cara :
// 1. mysqli_fetch_row // Mengembalikan array numerik
// 2. mysqli_fetch_array  // Mengembalikan array numerik dan assosiative. kekurangannya, akan mengambalikan keddua nilai yang akan memperberat memori.
// 3. mysqli_fetch_assoc // Mengembalikan array assosiativ
// 4. mysqli_fetch_object // Mengambil object. contoh : var_dump($film ->nama);

// while ( $film = mysqli_fetch_assoc($result) ) {
//     var_dump($film);
// }

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
            <th>ID Film</th>
            <th>Gambar</th>
            <th>Nama Film</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Studio</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; // Inisialisasi variabel $i untuk nomor urutan ?>
        <?php
        while ($row = mysqli_fetch_assoc($result)) : ?>

            <tr>
                <td> <?= $i ?></td>
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
            <?php $i++ ?>
        <?php endwhile; ?>
    </table>
</body>

</html>