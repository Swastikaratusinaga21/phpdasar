<!-- CONTOH GET -->

<?php

// Superglobal || variables milik PHP
// 1. $_GET
// 2. $_POST
// 3. $_REQUEST
// 4. $_SESSION
// 5. $_COOKIE
// 6. $_SERVER
// 7. $_ENV

// Metode Request berbeda dengan variabel Superglobal
// $_GET

// Array assosiative adalah sebuah array dengan key string. tidak menggunakan angka seperti array numeric, namun menggunakan string yang dapat kita buat sendiri.

$anime = [
    [
        "nama" => "Jujutsu Kaisen",
        "pengarang" =>  "Gege Akutami",
        "penerbit" => "Shueisha",
        "studio" => "MAPPA",
        "gambar" => "jjk.jpg",
    ],
    [
        "nama" => "Kimetsu no Yaiba",
        "pengarang" =>  "Koyoharu Gotōge",
        "penerbit" => "Shueisha",
        "studio" => "Ufotable",
        "gambar" => "kny.jpg",
    ],
    [
        "nama" => "Attack on Titan",
        "pengarang" =>  "Hajime Isayama",
        "penerbit" => "Kodansha",
        "studio" => "MAPPA",
        "gambar" => "aot.jpg",
    ],
    [
        "nama" => "Naruto",
        "pengarang" =>  "Masashi Kishimoto",
        "penerbit" => "Kodansha",
        "studio" => "Shueisha",
        "gambar" => "naruto.jpg",
    ],
    [
        "nama" => "Kimi No Na wa",
        "pengarang" =>  "Makoto Shinkai",
        "penerbit" => "Kadokawa",
        "studio" => "Comix Wave Films",
        "gambar" => "kiminonawa.jpg",
    ],
    [
        "nama" => "One Piece",
        "pengarang" =>  "Eiichiro Oda",
        "penerbit" => "Shueisha",
        "studio" => "Production I.G",
        "gambar" => "one-piece.jpg",
    ],
    [
        "nama" => "Blue Lock",
        "pengarang" =>  "Muneyuki Kaneshiro",
        "penerbit" => "Kodansha",
        "studio" => "Eight Bit",
        "gambar" => "bluelock.jpg",
    ],
    [
        "nama" => "Spy X Family",
        "pengarang" =>  "Tatsuya Endo",
        "penerbit" => "Shueisha",
        "studio" => "WitStudio",
        "gambar" => "sxf.jpg",
    ],
    [
        "nama" => "Hunter X Hunter",
        "pengarang" =>  "Yoshihiro Togashi",
        "penerbit" => "Shueisha",
        "studio" => "Nippon Animation",
        "gambar" => "hxh.jpg",
    ],
    [
        "nama" => "A Silent Voice",
        "pengarang" =>  "Yoshitoki Oima",
        "penerbit" => "Kodansha",
        "studio" => "Kyoto Animation",
        "gambar" => "asv.jpg",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensi</title>
</head>
<style>
    img {
        width: 100px;
        height: auto;
    }
</style>

<body>
    <h1> List </h1>
    <ul>
        <?php foreach ($anime as $a) : ?>
            <li>
                <a href="pengambilandata.php?nama=<?= $a["nama"]; ?>&pengarang=<?= $a["pengarang"]; ?>&penerbit=<?= $a["penerbit"]; ?>&studio=<?= $a["studio"]; ?>&gambar=<?= $a["gambar"]; ?>"><?= $a["nama"]; ?></a>
            </li>
            <br>
        <?php endforeach; ?>
    </ul>
</body>
</html>