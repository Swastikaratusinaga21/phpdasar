<?php

// Menampilkan array ke user dengan pengulangan :

$angka = [1, 2, 3, 6, 9, 8, 99, 87, 68, 90];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            background-color: salmon;
            margin: 3px;
            float: left;
        }
    </style>
</head>

<body>


    <!-- Cara 1 -->
    <h3> Cara 1</h3>
    <?php
    for ($i = 0; $i < count($angka); $i++) {  ?>
        <div> <?= $angka[$i] ?> </div>
    <?php } ?>

    <br>
    <br>
    <br>
    <br>
    <!-- Cara 2 -->
    <h3>Cara 2</h3>
    <!-- Membuat perulangan foreach yang digunakan untuk array -->
    <!-- menetapkan setiap elemen dari $angka adalah $a -->
    <?php foreach ($angka as $a) { ?>
        <!-- Membuat sebuah div yang berisi kode php yang akan memanggil si $a, yang di mana si $a ini adalah sebuah elemen atau nilai dari si array -->
        <div> <?php echo $a; ?> </div>
    <?php } ?>

    <br>
    <br>
    <br>
    <br>

    <!-- Cara 3 -->
    <h3>Cara 3</h3>
    <!-- Membuat perulangan foreach yang digunakan untuk array -->
    <!-- menetapkan setiap elemen dari $angka adalah $a -->
    <?php foreach ($angka as $a) : ?>
        <!-- Membuat sebuah div yang berisi kode php yang akan memanggil si $a, yang di mana si $a ini adalah sebuah elemen atau nilai dari si array -->
        <div> <?= $a; ?> </div>
    <?php endforeach ?>


</body>

</html>