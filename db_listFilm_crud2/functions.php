<?php
// Mengoneksikan database ke file php
$conn = mysqli_connect("localhost", "root", "", "listfilm");

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
    $nama = htmlspecialchars($data["nama"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $studio = htmlspecialchars($data["studio"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO dataanime (nama, pengarang, penerbit, studio, gambar) VALUES ('$nama', '$pengarang', '$penerbit', '$studio', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function update($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $studio = htmlspecialchars($data["studio"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE dataanime SET 
            nama = '$nama', 
            pengarang = '$pengarang', 
            penerbit = '$penerbit', 
            studio = '$studio', 
            gambar = '$gambar' 
            WHERE dataanime.IdFilm = $data[id]";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM dataanime WHERE dataanime.IdFilm = $id");
    return mysqli_affected_rows($conn);
}