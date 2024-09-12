<?php

// Array assosiative adalah sebuah array dengan key string. tidak menggunakan angka seperti array numeric, namun menggunakan string yang dapat kita buat sendiri.

$siswa = [
    [
        "nama" => "Abdillah",
        "nisn" =>  "112233",
        "alamat" => "Lima Puluh",
        "alumni" => "SMP"
    ],

    [
        "nama" => "Jubaedah",
        "nisn" =>  "122334",
        "alamat" => "Perdagangan",
        "alumni" => "MTs"
    ],

    [
        "nama" => "Norman",
        "nisn" => "132435",
        "alamat" => "Kisaran",
        "alumni" => "SMP"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensi</title>
</head>
<body>
    <h1> Data Siswa </h1>
    <?php foreach ($siswa as $s) : ?>
        <ul>
            <li>Nama : <?= $s["nama"]; ?></li>
            <li>NISN : <?= $s["nisn"]; ?></li>
            <li>Alamat : <?= $s["alamat"]; ?></li>
            <li>Sekolah Sebelumnya : <?= $s["alumni"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>