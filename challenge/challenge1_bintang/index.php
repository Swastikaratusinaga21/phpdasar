<?php

// buatlah sebuah * berbentuk bintang dengan panduan tiap baris memiliki jumlah bintang yang berbeda
// : for ->


for ($i = 0; $i < 7; $i++) {
    for ($j = 2; $j < $i; $j++) {
        echo "*";
    }

    echo "<br>";
}

for ($i = 0; $i < 7; $i++) {
    for ($k = 3; $k > $i; $k--) {
        echo "*";
    }
    echo "<br>";
}

// for ($j = 0; $j < $i; $j++) {
//     echo "*";
// }



echo "<br> <br> <br> <br>";

// Bintang dengan * dan _
for ($m = 0; $m < 7; $m++) {
    for ($n = 3; $n > $m; $n--) {
        echo "_";
    }
    echo "<br>";
}

for ($m = 0; $m < 7; $m++) {
    if ($m % 2 == 1) {
        for ($n = 0; $n < $m; $n++) {
            echo "*";
        }
        echo "<br>";
    }
}

for ($m = 0; $m < 7; $m++) {
    if ($m % 2 == 0) {
        for ($n = 7; $n > $m; $n--) {
            echo "*";
        }
        echo "<br>";
    }
}


// ___*
// __***
// _*****
// *******
// _*****
// __***
// ___*
