<?php 
// Ini Komentar

echo "Ini adalah sesi sintaks PHP <br>";


// Variabel dan tipe Data

// Pemanggilan variabel normal
$nama = "Ratu Sinaga <br>";
echo $nama;
// hasil : Ratu Sinaga

// Pemanggilan variabel dengan string kutip dua
$nama1 = "Ratu Sinaga";
echo "Nama Saya $nama1 <br>";
// hasil : Nama Saya Ratu Sinaga

// Pemanggilan variabel dengan string kutip satu.
$nama = "Ratu Sinaga";
echo 'Nama Saya $nama';
// hasil : Nama Saya $nama

echo "<br>
<br>";


// Operator

// Aritmatika

$a = 10;
$b = 5;

echo "Penjumlahan: ". ($a + $b). "<br>";
echo "Pengurangan: ". ($a - $b). "<br>";
echo "<br>";

/* hasil : Penjumlahan: 15
Pengurangan: 5*/

// Concat
$nama1 = "Swastika";
$nama2 = "Ratu";
echo $nama1 . $nama2;
// hasil : SwastikaRatu

echo "<br>";  

$nama1 = "Swastika";
$nama2 = "Ratu";
echo $nama1 . " " . $nama2;
// hasil : Swastika Ratu
echo "<br> <br>";

//Assignment 
$x = 10;
$x -=  5;
echo $x;
echo "<br>";
// hasil : 5
$x = 10;
$x +=  5;
echo $x;
echo "<br>";
// hasil : 15
$x = 10;
$x *=  5;
echo $x;
echo "<br>";
// hasil : 50
$x = 10;
$x /=  5;
echo $x;
echo "<br>";
// hasil : 2
$x = 10;
$x %=  5;
echo $x;
echo "<br>";
// hasil : 0

echo "<br> <br>";

// Perbandingan 
var_dump(1<5);
echo "<br>";
var_dump(1>5);
echo "<br>";

var_dump(1<=5);
echo "<br>";
var_dump(1>=5);
echo "<br>";

var_dump(1==5);
echo "<br>";

echo "<br> <br>";

// identitas
var_dump(1 === 5);
echo "<br>";
var_dump(1 === "1");
echo "<br>";
var_dump(1 === 1);
echo "<br>";

echo "<br> <br>";

// logika // && || ! 

$m = 10;
$n = 19;
var_dump($m < 20 && $m % 2 === 0);
var_dump($n < 20 || $m % 2 === 0);















?>