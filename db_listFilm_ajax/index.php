<!-- REVISI db_listFilm -->
<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';


// Paginations
// Konfigurasi

$jumlahDataPerHal = 4;
$jumlahData = count(query("SELECT * FROM dataanime"));
$jumlahHal = ceil($jumlahData / $jumlahDataPerHal);
// if(isset($_GET["halaman"])){
//     $halAktif = $_GET["halaman"];
// }else{
//     $halAktif = 1;
// }

$halAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHal * $halAktif) - $jumlahDataPerHal; 

$listfilm = query("SELECT * FROM dataanime LIMIT $awalData, $jumlahDataPerHal");


// SEARCH
// Apabila tombol cari ditekan :

if (isset($_POST["cari"])) {
    // Ambil data keyword yang dicari
    $listfilm = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Film</title>
</head>

<style>
    body {
        margin: 20px 50px;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        width: 200px;
    }

    input[type="search"] {
        margin: 20px auto;
        height: 40px;
    }
</style>

<body>

    <a href="logout.php">Logout</a>

    <h1>Daftar Film</h1>
    <!-- Tombol cari -->
    <!-- SEARCH -->
    <form action="" method="post">
        <input type="search" name="keyword" autofocus size="35" autocomplete="off" placeholder="Search" aria-label="Search">
        <button type="submit" name="cari">Search</button>
    </form>

    <!-- pagination -->
    <!-- naavigasi -->

    <?php if ($halAktif > 1): ?>
        <a href="?halaman= <?php $halAktif - 1; ?>">&lt;</a>
    <?php endif; ?>


    <?php for ($i = 1; $i <= $jumlahHal; $i++) : ?>
        <?php if ($i == $halAktif) : ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight : bold; color : red"><?= $i; ?> </a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?> </a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($halAktif < $jumlahHal) : ?>
        <a href="?halaman= <?php $halAktif + 1; ?>">&gt;</a>
    <?php endif; ?>

    <br> <br>
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
                <td> <?= $i + $awalData; ?></td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="100px"></td>
                <td> <?= $row["nama"]; ?></td>
                <td> <?= $row["pengarang"]; ?> </td>
                <td> <?= $row["penerbit"] ?></td>
                <td> <?= $row["studio"]; ?></td>
                <td>
                    <a href="update.php?id=<?= $row["IdFilm"]; ?>">Update</a> |
                    <a href="hapus.php?id=<?= $row["IdFilm"]; ?>" onclick="return confirm ('yakin?');">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>

    <br><br><br>
    <a href="tambah.php"><button>Tambah Film</button></a>
    <br><br><br><br><br><br><br><br><br><br>
</body>

</html>