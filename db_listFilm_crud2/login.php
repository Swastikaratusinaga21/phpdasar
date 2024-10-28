<?php
require 'functions.php';
session_start();

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id 
    $result = mysqli_query($conn, "SELECT username FROM registrasi WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username 
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit();
}


if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM registrasi WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;

            // cek remember me / checkbox
            if (isset($_POST['remember'])) {
                // buat cookie
                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username']) + 60);
            }
            header("Location:index.php");
            exit();
        }
    }

    $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Halaman Login</h2>

    <?php
    if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username / Password Salah</p>

    <?php endif; ?>

    <form action="" method="post">
        <table>
            <tr>
                <td><label for="username">Username : </label></td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="email">E-mail :</label></td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td><label for="password">Password :</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember Me</label>
                </td>

            </tr>

        </table>
        <button type="submit" name="login">Login</button>



    </form>
</body>

</html>