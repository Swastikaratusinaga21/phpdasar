<?php
// Mengoneksikan database ke file php
$conn = mysqli_connect("localhost", "root", "", "db_sekolah");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    global $conn;
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $mapel = htmlspecialchars($data["mapel"]);
    $email = htmlspecialchars($data["email"]);

    $query = "INSERT INTO guru (nrp, nama, tempat_lahir, tanggal_lahir, alamat, mapel, email) VALUES ('$nrp', '$nama', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$mapel', '$email')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function hapus($nrp){
    global $conn;
    mysqli_query($conn, "DELETE FROM guru WHERE guru.nrp = $nrp");
    return mysqli_affected_rows($conn);
    
}

function update($data)
{
    global $conn;
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $mapel = htmlspecialchars($data["mapel"]);
    $email = htmlspecialchars($data["email"]);

    $query = "UPDATE guru SET 
            nrp = $nrp, 
            nama = '$nama', 
            tempat_lahir = '$tempat_lahir', 
            tanggal_lahir = '$tanggal_lahir', 
            alamat = '$alamat', 
            mapel = '$mapel', 
            email = '$email' 
            WHERE guru.nrp = $data[nrp]";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// SEARCH
function cari($keyword)
{
    $query = "SELECT * FROM guru WHERE 
    nrp LIKE '%{$keyword}%' OR
    nama LIKE '%{$keyword}%' OR
    tempat_lahir LIKE '%{$keyword}%' OR
    tanggal_lahir LIKE '%{$keyword}%'OR
    alamat LIKE '%{$keyword}%'OR
    mapel LIKE '%{$keyword}%'OR
    email LIKE '%{$keyword}%'
    ";


    return query($query);
}