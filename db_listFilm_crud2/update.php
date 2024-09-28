<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query mahasiswa berdasarkan id
$listfilm = query("SELECT * FROM dataanime WHERE IdFilm = $id")[0];


// Fungsi update data film

// Cek apakah tombol submit sudah pernah ditekan atau belum
if (isset($_POST["submit"])) {
    // cek apakah data berhasil atau gagal diupdate
    if (update($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diupdate!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diupdate!');
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
    <title>Update Film</title>
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
    <h2>Update Data Film</h2>


    <form action="" method="post">
        <input type="hidden" name="id" value=" <?= $listfilm["IdFilm"] ?> ">
        <table>
            <tr>
                <td><label for="nama">Nama : </label></td>
                <td><input type="text" name="nama" id="nama" required value=" <?= $listfilm["nama"]   ?> "></td>
            </tr>
            <tr>
                <td><label for="pengarang">Pengarang : </label></td>
                <td><input type="text" name="pengarang" id="pengarang" required value=" <?= $listfilm["pengarang"]   ?> "></td>
            </tr>
            <tr>
                <td><label for="penerbit">Penerbit : </label></td>
                <td><input type="text" name="penerbit" id="penerbit" required value=" <?= $listfilm["penerbit"]   ?> "></td>
            </tr>
            <tr>
                <td><label for="studio">Studio : </label></td>
                <td><input type="text" name="studio" id="studio" required value=" <?= $listfilm["studio"]   ?> "></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar : </label></td>
                <td><input type="text" name="gambar" id="gambar" required value=" <?= $listfilm["gambar"]   ?> "></td>
            </tr>
        </table>
        <button type="submit" name="submit">HIT ME!</button>
    </form>
</body>

</html>