<?php

require 'functions.php';

$nrp = $_GET["nrp"];

if (hapus($nrp) > 0) {
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
