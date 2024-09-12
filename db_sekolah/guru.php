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
            <th>NIP</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
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

        $sql = "SELECT * FROM tb_guru";
        $result = $koneksi->query($sql);

        if ($result > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nip"] . "</td>";
                echo "<td>" . $row["nama"] . "</td>";
                echo "<td>" . $row["tglLahir"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo '0 result';
        }
        $koneksi->close();

        ?>
    </table>

    <a href="index.php">Tabel Siswa</a>
    <a href="kelas.php">Tabel Kelas</a>
</body>

</html>