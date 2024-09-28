<?php

require 'functions.php';
$data = query("SELECT * FROM kelas");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Data Kelas</title>
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
                    <a class="nav-link" aria-current="page" href="../siswa/index.php">Data Siswa</a>
                    <a class="nav-link" href="../guru/index.php">Data Guru</a>
                    <a class="nav-link active" href="index.php">Data Kelas</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir navbar -->

    <section>
        <h2> Data Kelas </h2>

        <!-- Tabel -->

        <table class="table table-bordered table-hover">
            <thead>
                <tr class="table-warning ">
                    <th scope="col"> No. </th>
                    <th scope="col"> Id Kelas </th>
                    <th scope="col"> Ruang Kelas </th>
                    <th scope="col"> Kelas </th>
                    <th scope="col"> Nama Wali Kelas </th>
                    <th scope="col"> Jumlah Siswa </th>
                    <th scope="col"> Aksi </th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 1; // Inisialisasi variabel $i untuk nomor urutan 
                ?>
                <?php foreach ($data as $row) : ?>
                    <tr style="background-color: #e3f2fd;">
                        <th scope="row"> <?= $i; ?></th>
                        <td> <?= $row["idKelas"]; ?> </td>
                        <td> <?= $row["ruangKelas"] ?> </td>
                        <td> <?= $row["kelas"] ?> </td>
                        <td> <?= $row["nama_wali_kelas"] ?> </td>
                        <td> <?= $row["jlh_siswa"] ?> </td>
                        <td>
                            <button type="button" class="btn btn-warning">
                                <a href="update.php?idKelas=<?= $row["idKelas"]; ?>">Update</a>
                            </button> |

                            <button type="button" class="btn btn-danger">
                                <a href="hapus.php?idKelas=<?= $row["idKelas"]; ?>" onclick="return confirm('yakin mau hapus data ini?');">Hapus</a>
                            </button>

                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Akhir tabel -->

        <!-- Tombol tambah -->
        <a href="tambah.php" class="btn btn-primary">Tambah Ruang Kelas</a>
        <!-- Akhir tombol tambah -->

    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>