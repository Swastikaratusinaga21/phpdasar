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
                document.location.href = 'index.php';
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
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    body {
        padding-left: 20px;
        margin: 20px 0;
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
        margin: 5px;
    }

    button {
        margin: 10px 25px;
    }
</style>

<body>


    <h2>Tambah Ruang Kelas</h2>


    <form action="" method="post">
        <table>
            <tr>
                <td><label for="idKelas">Id Kelas :</label></td>
                <td><input type="text" name="idKelas" id="idKelas" required></td>
            </tr>
            <tr>
                <td><label for="kelas">Kelas : </label></td>
                <td><input type="text" name="kelas" id="kelas" required></td>
            </tr>
            <tr>
                <td><label for="ruangKelas">Ruang Kelas : </label></td>
                <td><input type="text" name="ruangKelas" id="ruangKelas" required></td>
            </tr>
            <tr>
                <td><label for="nama_wali_kelas">Nama Wali Kelas : </label></td>
                <td><input type="text" name="nama_wali_kelas" id="nama_wali_kelas" required></td>
            </tr>
            <tr>
                <td><label for="jlh_siswa">Jumlah Siswa : </label></td>
                <td><input type="text" name="jlh_siswa" id="jlh_siswa" required></td>
            </tr>
        </table>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>