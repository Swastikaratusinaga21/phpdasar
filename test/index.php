<?php

/*

Tahapan membuat sebuah CRUD // Bagian mengambil data
1. buat koneksi dari databse (phpmyadmin) ke php kita menggunakan mysql_connect
2. Membuat Query untuk mengambil data dari table yang kita ingin ambil. untuk bagian ini ada 2 hal yang perlu dilakukan. 1 : membuat query select * from, 2. membuat function query yang akan mengambil satu persatu data dari database, kemudian disimpan di memori
3. Membuat tabel atau wadah tempat menyimpan data yang ada di memori, sehingga dapat dilihat oleh user.

*/

require 'functions.php';
$db = query("SELECT * FROM tb_siswa");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>
    <h1>Data Siswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No. </th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($db as $d) ?>
        <tr>
            <td> <?= $i ?> </td>
            <td><?= $d["nis"]; ?></td>
            <td><?= $d["nama"]; ?></td>
            <td><?= $d["tempat_lahir"]; ?></td>
            <td><?= $d["tanggal_lahir"]; ?></td>
            <td><?= $d["email"]; ?></td>
            <td> Update | Hapus
            </td>
        </tr>
        <?php $i++; ?>
    </table>
    <br><br><br><br><br>

    <button>
        <a href="tambah.php">Tambah Data</a>
    </button>
</body>

</html>