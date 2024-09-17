<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Sekolah</title> 
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <table>
        <tr>
            <th>Id Kelas</th>
            <th>Ruang Kelas</th>
            <th>Tingkatan Kelas</th>
            <th>Nama Wali Kelas</th>
            <th>Jumlah Siswa</th>
        </tr>

        <?php
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'db_sekolah';

        $koneksi = new mysqli($host, $username, $password, $database);
        if ($koneksi->connect_error) {
            die("Connection Failed: " . $koneksi->connect_error);
        }

        $sql = "SELECT * FROM kelas";
        $result = $koneksi->query($sql);

        if ($result > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["idKelas"] . "</td>";
                echo "<td>" . $row["ruangKelas"] . "</td>";
                echo "<td>" . $row["kelas"] . "</td>";
                echo "<td>" . $row["nama_wali_kelas"] . "</td>";
                echo "<td>" . $row["jlh_siswa"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo '0 result';
        }
        $koneksi->close();

        ?>
    </table>

    <a href="index.php">Tabel Siswa</a>
    <a href="guru.php">Tabel Guru</a>
</body>

</html>