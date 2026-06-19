<?php

require "fungsi.php";

if(isset($_POST["submit"]))
{
    if(ubahdata($_POST) > 0)
    {
        echo "
        <script>
            alert('Data berhasil diubah!');
            document.location.href='mahasiswa.php';
        </script>
        ";
    }
    else
    {
        echo "
        <script>
            alert('Data gagal diubah atau tidak ada perubahan!');
            document.location.href='mahasiswa.php';
        </script>
        ";
    }
}
?>