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
    $idKelas = htmlspecialchars($data["idKelas"]);
    $ruangKelas = htmlspecialchars($data["ruangKelas"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $nama_wali_kelas = htmlspecialchars($data["nama_wali_kelas"]);
    $jlh_siswa = htmlspecialchars($data["jlh_siswa"]);

    $query = "INSERT INTO kelas (idKelas, ruangKelas, kelas, nama_wali_kelas, jlh_siswa) VALUES ('$idKelas', '$ruangKelas', '$kelas', '$nama_wali_kelas', '$jlh_siswa')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function hapus($idKelas){
    global $conn;
    mysqli_query($conn, "DELETE FROM kelas WHERE kelas.idKelas = $idKelas");
    return mysqli_affected_rows($conn);
    
}

function update($data)
{
    global $conn;
    $idKelas = htmlspecialchars($data["idKelas"]);
    $ruangKelas = htmlspecialchars($data["ruangKelas"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $nama_wali_kelas = htmlspecialchars($data["nama_wali_kelas"]);
    $jlh_siswa = htmlspecialchars($data["jlh_siswa"]);

    $query = "UPDATE kelas SET 
            idKelas = $idKelas, 
            ruangKelas = '$ruangKelas',
            kelas = '$kelas', 
            nama_wali_kelas = '$nama_wali_kelas', 
            jlh_siswa = $jlh_siswa
            WHERE kelas.idKelas = $data[idKelas]";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// SEARCH
function cari($keyword){
    $query = "SELECT * FROM kelas WHERE 
    idKelas LIKE '%{$keyword}%' OR
    ruangKelas LIKE '%{$keyword}%' OR
    kelas LIKE '%{$keyword}%' OR
    nama_wali_kelas LIKE '%{$keyword}%'OR
    jlh_siswa LIKE '%{$keyword}%'
    ";

    return query($query);
}