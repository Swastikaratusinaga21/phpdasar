<?php

require 'functions.php';

$nisn = $_GET["nisn"];
var_dump($id);

if (hapus($nisn) > 0) {
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
