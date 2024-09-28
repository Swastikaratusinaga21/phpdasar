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
    $nisn = htmlspecialchars($data["nisn"]);
    $nama = htmlspecialchars($data["nama"]);
    $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $email = htmlspecialchars($data["email"]);

    $query = "INSERT INTO siswa (nisn, nama, tempat_lahir, tanggal_lahir, alamat, kelas, email) VALUES ('$nisn', '$nama', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$kelas', '$email')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function hapus($nisn){
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE siswa.nisn = $nisn");
    return mysqli_affected_rows($conn);
    
}

function update($data)
{
    global $conn;
    $nisn = htmlspecialchars($data["nisn"]);
    $nama = htmlspecialchars($data["nama"]);
    $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $email = htmlspecialchars($data["email"]);

    $query = "UPDATE siswa SET 
            nisn = $nisn, 
            nama = '$nama', 
            tempat_lahir = '$tempat_lahir', 
            tanggal_lahir = '$tanggal_lahir', 
            alamat = '$alamat', 
            kelas = '$kelas', 
            email = '$email' 
            WHERE siswa.nisn = $data[nisn]";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// SEARCH
function cari($keyword)
{
    $query = "SELECT * FROM siswa WHERE 
    nisn LIKE '%{$keyword}%' OR
    nama LIKE '%{$keyword}%' OR
    tempat_lahir LIKE '%{$keyword}%' OR
    tanggal_lahir LIKE '%{$keyword}%'OR
    alamat LIKE '%{$keyword}%'OR
    kelas LIKE '%{$keyword}%'OR
    email LIKE '%{$keyword}%'
    ";

    return query($query);
}