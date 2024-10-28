<?php


require 'functions.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('Registrasi Berhasil');

        </script>";
    } else {
        echo mysqli_error($conn);
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>

<body>
    <h2>Selamat Datang di Halaman Registrasi</h2>
    <p> Silahkan registrasi terlebih dahulu </p>

    <form action="" method="post">

        <table>
            <tr>
                <td><label for="username">Username : </label></td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="email">E-mail</label></td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td><label for="password">Password :</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td><label for="confirmPass">Konfirmasi Password : </label></td>
                <td><input type="password" name="confirmPass" id="confirmPass"></td>
            </tr>



        </table>
        <button type="submit" name="register">Register</button>





    </form>
</body>

</html>