<?php 

// Koneksi ke database 

$conn = mysqli_connect("loaclhost", "root", "", "db_sekolah");

//  Function untuk melakukan query, mengambil semua data dari database ke variabel $rows
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

?>