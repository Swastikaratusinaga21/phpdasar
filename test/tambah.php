<?php

require 'functions.php';

// Cek apakah tombol submit sudah pernah ditekan atau belum
if (isset($_POST["submit"])) {
    // cek apakah data berhasil atau gagal ditambahkan
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>

<body>

    <h2>Tambah Data Siswa</h2>

    <form action="" method="post">
        <table>
            <tr>
                <td><label for="nis">NIS :</label></td>
                <td><input type="text" name="nis" id="nis"></td>
            </tr>
            <tr>
                <td><label for="nama">Nama : </label></td>
                <td><input type="text" name="nama" id="nama"></td>

            </tr>
            <tr>
                <td><label for="tempat_lahir">Tempat Lahir : </label></td>
                <td><input type="text" name="tempat_lahir" id="tempat_lahir"></td>
            </tr>
            <tr>
                <td><label for="tanggal_lahir">Tanggal Lahir :</label></td>
                <td><input type="text" name="tanggal_lahir" id="tanggal_lahir"></td>
            </tr>
            <tr>
                <td><label for="email">Email : </label></td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
        </table>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>