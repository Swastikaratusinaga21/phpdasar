<?php
include_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data</title>
</head>

<body>
    <?php
    $sql = 'SELECT * FROM tb_siswa;';
    $result = mysqli_query($koneksi, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo $row['nama'];
        }
    }
    ?>
</body>

</html>