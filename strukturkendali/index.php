<?php 

// pengulangan

// for
// while
// do... while...


/* contoh for : 
    for ( inisialisasi, kondisi terminasi, increment/decrement)
    penjelasan : 
    inisialisasi : menentukan variabel awal untuk pengulangan
    kondisi terminasi : menentukan batas pengulangan
    increment/decrement : agar hitungan perulangannya mau maju atau mundur
    */

for( $i = 0; $i < 5; $i++ ){
    echo "Hello World! <br>";
}

// while
$i = 0;
while( $i < 10 ){
    echo "Hello World! <br>";
    $i++;
}

// do.. while

$i = 0;
do{
    echo "Hello World! <br>";
    $i++;

}while( $i < 10 );

 ?>