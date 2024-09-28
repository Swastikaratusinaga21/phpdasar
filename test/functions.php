<?php 

$koneksi = mysqli_connect('localhost', 'root', '', 'db_siswa');

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows =[];
    while($row = mysqli_fetch_assoc($result)){
        $rows = $row;
    }
    return $rows;
}


function tambah($data){
    global $koneksi;
    $nis = $data["nis"];
    $nama = $data["nama"];
    $tempat_lahir = $data["tempat_lahir"];
    $tanggal_lahir = $data["tanggal_lahir"];
    $email = $data["email"];

    $query = "INSERT INTO tb_siswa (nis, nama, tempat_lahir, tanggal_lahir, email) VALUES ($nis, '$nama', '$tempat_lahir', '$tanggal_lahir', '$email')";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

?>