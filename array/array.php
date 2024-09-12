<?php
// array : sebuah variabel dengan banyak nilai

// 1. Membuat array  : 
$hari = ["Senin", "Selasa", "Rabu"];

// 2. Menampilkan array : 
// menggunakan echo, dengan index dari si array
echo $hari[0];
// hasil : senin
echo "<br>";
// Menghasilkan semua array
var_dump($hari);
echo "<br>";
print_r($hari);
echo "<br>";
// hasil : semua array terlihat di browser dengan indexnya, dan length si nilai

//  3. Menambahkan array
$hari[] = "Kamis";
$hari[] = "Jum'at";
var_dump($hari);
