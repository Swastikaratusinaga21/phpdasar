<?php

require 'functions.php';
$data = query("SELECT * FROM siswa");


// SEARCH
// Apabila tombol cari ditekan :

if (isset($_POST["cari"])) {
    // Ambil data keyword yang dicari
    $data = cari($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        section {
            margin: 20px;
        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Awal navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Data Sekolah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Data Siswa</a>
                    <a class="nav-link" href="../guru/index.php">Data Guru</a>
                    <a class="nav-link" href="../kelas/index.php">Data Kelas</a>
                </div>
            </div>

            <!-- SEARCH -->
            <form class="d-flex" action="" method="post">
                <input class="form-control me-2" type="search" name="keyword" autofocus size="35" autocomplete="off" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary btn-light" type="submit" name="cari">Search</button>
            </form>
            <!-- FUngsi elemen form : 
                autofokus :  membuat input auto fill, tanpa harus mengklik,
                size : ukuran inputnya agar lebih lebar,
                placeholder : memberikan teks di dalam input sebagai penanda input itu untuk apa,
                autocomplete : mengaktifkan/menonaktifkan history pencarian yg pernah dilakukan input,
                aria-label : memberikan label yang dapat diakses oleh skrip yang membaca teks, 
                -->
        </div>
    </nav>
    <!-- Akhir navbar -->

    <section>
        <h2> Data Siswa </h2>


        <!-- Tabel -->

        <table class="table table-bordered table-hover">
            <thead>
                <tr class="table-warning ">
                    <th scope="col">No. </th>
                    <th scope="col">NISN</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Email</th>
                    <th scope="col"> Aksi </th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 1; // Inisialisasi variabel $i untuk nomor urutan 
                ?>
                <?php foreach ($data as $row) : ?>
                    <tr style="background-color: #e3f2fd;">
                        <th scope="row"> <?= $i; ?></th>
                        <td> <?= $row["nisn"]; ?> </td>
                        <td> <?= $row["nama"] ?> </td>
                        <td> <?= $row["tempat_lahir"] ?> </td>
                        <td> <?= $row["tanggal_lahir"] ?> </td>
                        <td> <?= $row["alamat"] ?> </td>
                        <td> <?= $row["kelas"] ?> </td>
                        <td> <?= $row["email"] ?> </td>
                        <td>
                            <button type="button" class="btn btn-warning">
                                <a href="update.php?nisn=<?= $row["nisn"]; ?>">Update</a>
                            </button> |

                            <button type="button" class="btn btn-danger">
                                <a href="hapus.php?nisn=<?= $row["nisn"]; ?>" onclick="return confirm('yakin mau hapus data ini?');">Hapus</a>
                            </button>

                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Akhir tabel -->

        <!-- Tombol tambah -->
        <a href="tambah.php" class="btn btn-primary">Tambah Data Siswa</a>
        <!-- Akhir tombol tambah -->

    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>