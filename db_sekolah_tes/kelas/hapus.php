<?php

require 'functions.php';

$idKelas = $_GET["idKelas"];

if (hapus($idKelas) > 0) {
    echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Data gagal dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
}
