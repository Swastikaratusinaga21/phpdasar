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
    <title>Tambah Film</title>
</head>
<style>
    body {
        padding-left: 20px;
    }

    form {
        width: 500px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    table {
        margin: 0 auto;
    }

    input[type="text"],
    input[type="submit"] {
        width: 300px;
        height: 10px;
        padding: 10px;
        margin-bottom: 10px;
    }

    button {
        background-color: yellow;
        color: black;
        padding: 14px 20px;
        margin: 8px 40px;
        border: none;
        cursor: pointer;
        width: 150px;
    }
</style>

<body>
    <h2>Tambah Data Film</h2>


    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="nama">Nama : </label></td>
                <td><input type="text" name="nama" id="nama" required></td>
            </tr>
            <tr>
                <td><label for="pengarang">Pengarang : </label></td>
                <td><input type="text" name="pengarang" id="pengarang" required></td>
            </tr>
            <tr>
                <td><label for="penerbit">Penerbit : </label></td>
                <td><input type="text" name="penerbit" id="penerbit" required></td>
            </tr>
            <tr>
                <td><label for="studio">Studio : </label></td>
                <td><input type="text" name="studio" id="studio" required></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar : </label></td>
                <td><input type="file" name="gambar" id="gambar"></td>
            </tr>
        </table>
        <button type="submit" name="submit">HIT ME!</button>
    </form>
</body>

</html>