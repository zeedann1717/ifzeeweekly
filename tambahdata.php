<?php

require "fungsi.php";

if(isset($_POST["submit"]))
{
    if(tambahdata($_POST) > 0)
    {
        echo "
        <script>
            alert('Data berhasil ditambahkan!');
            document.location.href='mahasiswa.php';
        </script>
        ";
    }
    else
    {
        echo "
        <script>
            alert('Data gagal ditambahkan!');
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Data Mahasiswa</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Poppins',sans-serif;
    background:#f0f4f8;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
    padding:20px;
}

.form-container{
    background:#fff;
    width:100%;
    max-width:500px;
    padding:40px;
    border-radius:12px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

h2{
    text-align:center;
    margin-bottom:30px;
    color:#2c3e50;
}

.form-group{
    margin-bottom:18px;
}

.form-group label{
    display:block;
    margin-bottom:8px;
    font-weight:600;
}

.form-group input{
    width:100%;
    padding:12px;
    border:1px solid #ddd;
    border-radius:8px;
}

.btn-submit{
    width:100%;
    padding:14px;
    border:none;
    border-radius:8px;
    background:#3498db;
    color:#fff;
    cursor:pointer;
    font-size:16px;
    font-weight:600;
}

.btn-submit:hover{
    background:#2980b9;
}

</style>

</head>
<body>

<div class="form-container">

    <h2>Tambah Data Mahasiswa</h2>

    <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" required>
        </div>

        <div class="form-group">
            <label>NIM</label>
            <input type="text" name="nim" required>
        </div>

        <div class="form-group">
            <label>Jurusan</label>
            <input type="text" name="jurusan" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" required>
        </div>

        <div class="form-group">
            <label>No HP</label>
            <input type="text" name="nohp" required>
        </div>

        <div class="form-group">
            <label>Pilih Foto</label>
            <input type="file" name="foto" accept=".jpg,.jpeg,.png" required>
        </div>

        <button type="submit" name="submit" class="btn-submit">
            Simpan Data
        </button>

    </form>

</div>

</body>
</html>