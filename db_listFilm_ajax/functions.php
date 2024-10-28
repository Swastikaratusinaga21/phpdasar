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
    // Upload Gambar 
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO dataanime (nama, pengarang, penerbit, studio, gambar) VALUES ('$nama', '$pengarang', '$penerbit', '$studio', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload /work.

    if ($error === 4) {
        echo "<script>
        alert('Upload gambar terlebih dahulu!');
        </script>";
        return false;
    }

    // cek apakah data yang diupload adalah gambar //work
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
            alert('Mohon perhatikan jenis file!. Pastikan yang anda upload adalah gambar');
            </script>";
        return false;
    }

    // cek ukuran file /work
    if ($ukuranFile > 9000000) {
        echo "<script>
        alert('Gambar terlalu besar! Maksimal 9000000 KB');
        </script>";
        return false;
    }

    // lolos pengecekan, maka file siap diupload
    // generate nama file baru 
    $namaFileBaru = uniqid();
    $namaFileBaru .= ".";
    $namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}

function update($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $studio = htmlspecialchars($data["studio"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // Mengecek user pilih gambar atau tidak
    if ($_FILES["gambar"]["error"] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


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

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM dataanime WHERE dataanime.IdFilm = $id");
    return mysqli_affected_rows($conn);
}


// SEARCH
function cari($keyword)
{
    $query = "SELECT * FROM dataanime WHERE 
    nama LIKE '%{$keyword}%' OR
    pengarang LIKE '%{$keyword}%' OR
    penerbit LIKE '%{$keyword}%'OR
    studio LIKE '%{$keyword}%'OR
    gambar LIKE '%{$keyword}%'
    ";

    return query($query);
}

function registrasi($data)
{
    global $conn;
    $username = strtolower(stripslashes($data['username']));
    $email = strtolower(stripslashes($data['email']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $confirmPass = mysqli_real_escape_string($conn, $data['confirmPass']);


    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM registrasi WHERE username = '$username' ");

    if (mysqli_fetch_assoc($result)){
        echo "<script> 
        alert(' Yah.. Username ini udah ga tersedia, pilih username lain aja yaa ^^~');
        </script>";
        return false;
    }

    // Cek konfirmasi Password
    if ($password !== $confirmPass) {
        echo "<script>
            alert('Password dan Konfirmasi Password harus sama!');
            </script>";
        return false;
    }

    // enskripsi password
    // var baru = password_hash(variabel yang perlu dienskripsi, jenis enskripsi);
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tabahkan user ke database

    mysqli_query($conn, "INSERT INTO registrasi (email, username, password) VALUES ('$email', '$username', '$password')");

    return mysqli_affected_rows($conn);
}
