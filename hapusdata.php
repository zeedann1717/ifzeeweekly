<?php

require "fungsi.php";

$id = $_GET["id"];

$query = "DELETE FROM mahasiswa WHERE id=$id";

mysqli_query($koneksi,$query);

if( hapusdata($id) > 0 ) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'mahasiswa.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'mahasiswa.php';
        </script>
    ";
}
?>