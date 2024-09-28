<?php
require 'functions.php';

// ambil data di URL
$id = $_GET['nrp'];

// query mahasiswa berdasarkan nrp
$data = query("SELECT * FROM guru WHERE guru.nrp = $id")[0];

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
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
    input[type="email"],
    input[type="submit"] {
        width: 300px;
        height: 10px;
        padding: 10px;
        margin-bottom: 10px;
    }

    button {
        margin: 10px 25px;
    }
</style>

<body>
    <h2>Update Data Guru</h2>


    <form action="" method="post">
        <input type="hidden" name="nrp" value=" <?= $data["nrp"] ?> ">
        <table>
            <tr>
                <td><label for="nrp">NRP : </label></td>
                <td><input type="text" name="nrp" id="nrp" required value=" <?= $data["nrp"]   ?> "></td>
            </tr>
            <tr>
                <td><label for="nama">Nama : </label></td>
                <td><input type="text" name="nama" id="nama" required value=" <?= $data["nama"]   ?> "></td>
            </tr>
            <tr>
                <td><label for="tempat_lahir">Tempat lahir : </label></td>
                <td><input type="text" name="tempat_lahir" id="tempat_lahir" required value=" <?= $data["tempat_lahir"]   ?> "></td>
            </tr>
            <tr>
                <td><label for="tanggal_lahir">Tanggal_lahir : </label></td>
                <td><input type="text" name="tanggal_lahir" id="tanggal_lahir" required value=" <?= $data["tanggal_lahir"]   ?> "></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat : </label></td>
                <td><input type="text" name="alamat" id="alamat" required value=" <?= $data["alamat"]   ?> "></td>
            </tr>
            <tr>
                <td><label for="mapel">Mata ajar : </label></td>
                <td><input type="text" name="mapel" id="mapel" required value=" <?= $data["mapel"]   ?> "></td>
            </tr>
            <tr>
                <td><label for="email">Email : </label></td>
                <td><input type="email" name="email" id="email" required value=" <?= $data["email"]   ?> "></td>
            </tr>
        </table>
        <button type="submit" name="submit" class="btn btn-primary">HIT ME!</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>