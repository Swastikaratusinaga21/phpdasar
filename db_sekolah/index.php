<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Sekolah</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Membuat Tabel untuk data -->
    <table>
        <tr>
            <!-- th untuk table header dari data yang akan diambil dari database -->
            <th>NISN</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Email</th>
        </tr>

        <!-- kode php yang mengambil data dari database  -->
        <?php
        // Memasukkan data database user (Admin PHP) ke dalam variabel 
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'db_sekolah';

        // membuat koneksi dari database ke PHP dengan memasukkan variabel data user Admin PHP
        $koneksi = new mysqli($host, $username, $password, $database);
        // Membuat kondisi jika koneksinya gagal
        if ($koneksi->connect_error) {
            die("Connection Failed: " . $koneksi->connect_error);
        }

        // Membuat SQL query yang akan mengambil data siswa
        // SELECT : Pilih
        //  * : semua data
        //  FROM : Dari
        //  tb_siswa : nama tabel di database yang telah kita koneksikan sebelumnya
        $sql = "SELECT * FROM siswa";
        $result = $koneksi->query($sql);

        // membuat kondisi, ketika ada data yang ditemukan dari tb_siswa, maka akan membuat baris baru yang berisi data di $row. setiap $row akan berubah menjadi field/kolom di satu baris.
        if ($result > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nisn"] . "</td>";
                echo "<td>" . $row["nama"] . "</td>";
                echo "<td>" . $row["tempat_lahir"] . "</td>";
                echo "<td>" . $row["tanggal_lahir"] . "</td>";
                echo "<td>" . $row["alamat"] . "</td>";
                echo "<td>" . $row["kelas"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "</tr>";
            }
        } else {
            // jika tidak ada data yang ditemukan, maka akan memunculkan kalimat "0 result" di browser.
            echo '0 result';
        }
        // Menutup koneksi ke database
        $koneksi->close();
        ?>
    </table>

    <!-- Membuat link ke tabel yang bersangkutan, yang berada dalam 1 database. -->
    <a href="guru.php">Tabel Guru</a>
    <a href="kelas.php">Tabel Kelas</a>
</body>

</html>