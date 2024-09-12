<?php
// Mengecek apakah tidak ada data di $_GET
if (!isset($_GET["nama"]) || !isset($_GET["pengarang"]) || !isset($_GET["penerbit"]) || !isset($_GET["studio"]) || !isset($_GET["gambar"])) {
    //redirect
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Anime</title>
</head>
<style>
    img {
        width: 150px;
        height: auto;
    }
</style>
<body>
    <h3>DETAIL </h3>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li>Nama : <?= $_GET["nama"]; ?></li>
        <li>Pengarang : <?= $_GET["pengarang"]; ?></li>
        <li>Penerbit : <?= $_GET["penerbit"]; ?></li>
        <li>Studio : <?= $_GET["studio"]; ?></li>
    </ul>
    <a href="index.php">Kembali ke halaman daftar film</a>
</body>
</html>