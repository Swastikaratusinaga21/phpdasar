

<?php
// Mengecek apakah ada data di $_POST
if (isset($_GET["nama"]) || isset($_GET["email"]) || isset($_GET["instagram"]) || isset($_GET["alamat"]) || isset($_GET["password"])) {
    //redirect
    header("Location:post.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <h1>Informasi Anda : </h1>
    <p> Nama : <?= $_POST["nama"] ?> </p>
    <p> E-mail : <?= $_POST["email"] ?> </p>
    <p> Instagram : <?= $_POST["instagram"] ?> </p>
    <p> Alamat : <?= $_POST["alamat"] ?> </p>
</body>

</html>