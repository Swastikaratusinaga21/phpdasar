<?php

$mahasiswa = [
    ["Abdillah", "112233", "Lima Puluh", "SMP"],
    ["Jubaedah", "122334", "Perdagangan", "MTs"],
    ["Norman", "132435", "Kisaran", "SMP"]
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

    <h1>
        Data Siswa
    </h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NISN : <?= $mhs[1]; ?></li>
            <li>Alamat : <?= $mhs[2]; ?></li>
            <li>Sekolah Sebelumnya : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>