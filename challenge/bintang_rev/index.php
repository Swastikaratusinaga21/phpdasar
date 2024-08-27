<?php

// Challenge bintang 1

// hasil :
// *
// **
// ***
// ****
// ***
// **
// *

$s = "";
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        $s .= "*";
    }
    $s .= "<br>";
}

for ($i = 3; $i > 0; $i--) {
    for ($k = 0; $k < $i; $k++) {
        $s .= "*";
    }
    $s .= "<br>";
}
echo ($s);


// hasil :

// ___*
// __***
// _*****
// *******
// _*****
// __***
// ___*

// // challenge bintang 2
//bintang segitiga bagian atas
// // // baris
for ($a = 0; $a < 9; $a++) {
    //$u=underscore
    //$b=bintang
    $u = "";
    $b = "";
    // Membuat kondisi agar bintang berjumlah ganjil, di mana bilangan dari $a (0-9) apabila dimodulud dan hasilnya 1, akan dipanggil ke console.
    if ($a % 2 != 0) {
        // Melakukan perulangan pada variabel c. di mana ditentukan bahwa kondisi c adalah 0. dan nilai c akan terus bertambah sampai nilai c lebih kecil dari 7-a/2.
        for ($c = 0; $c < (7 - $a) / 2; $c++) {
            $u = $u . '_';
        }
        for ($d = 0; $d < $a; $d++) {
            $b = $b . '*';
        }
        echo (" <br>");
        // Memanggil underscore dan bintang
        echo ($u . $b);
    }
}

//bintang segitiga terbalik untuk bagian bawah
for ($a = 0; $a < 7; $a++) {
    $u = "";
    $b = "";
    if ($a % 2 == 1) {
        for ($c = 3; $c > (5 - $a) / 2; $c--) {
            $u = $u . '_';
        }
        for ($d = 6; $d > $a; $d--) {
            $b = $b . '*';
        }
        echo (" <br>");
        // Memanggil underscore dan bintang
        echo ($u . $b);
    }
}
