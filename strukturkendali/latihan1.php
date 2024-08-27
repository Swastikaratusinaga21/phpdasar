<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan perulangan</title>
</head>
<style>
    .bg-pink {
        background-color: pink;
    }
</style>

<body>
    <!-- Normal -->
    <h3>Tabel dengan perulangan</h3>
    <table border="1" cellpadding="10">
        <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                echo "<td> $i,$j </td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <!-- Menggunakan beberapa tag php -->
    <h3>Tabel dengan perulangan II</h3>
    <table border="1" cellpadding="10">
        <?php
        for ($i = 1; $i <= 3; $i++) { ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) { ?>
                    <td> <?php echo "$i,$j"; ?> </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

    <!-- Menggunakan beberapa tag php dengan menggunakan endfor. -->
    <h3>Tabel dengan perulangan III</h3>
    <table border="1" cellpadding="10">
        <?php
        for ($i = 1; $i <= 3; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <!-- tanda < ? = maksudnya adalah "php echo", yang dimana = adalah singkatan untuk php echo, yang diguanakan hanya untuk melakukan print output dari variabel saja.  -->
                    <td> <?= "$i,$j"; ?> </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    <!-- Menggunakan beberapa tag php dengan menggunakan endfor. // Menggunakan if... else if... else untuk mengubah background color beberapa baris  -->
    <h3>Tabel dengan perulangan IV - dengan bg color</h3>
    <table border="1" cellpadding="10">
        <?php
        for ($i = 1; $i <= 5; $i++) : ?>
            <?php
            if ($i % 2) : ?>
                <tr class="bg-pink">
                <?php else : ?>
                <tr>
                <?php endif; ?>

                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <!-- tanda < ? = maksudnya adalah "php echo", yang dimana = adalah singkatan untuk php echo, yang diguanakan hanya untuk melakukan print output dari variabel saja.  -->
                    <td> <?= "$i,$j"; ?> </td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table>
</body>

</html>