<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_sekolah';

$koneksi = new mysqli($host, $username, $password, $database);
if ($koneksi) {
    echo 'Koneksi Berhasil';
} else {
    echo 'Koneksi Gagal: ';
}

?>