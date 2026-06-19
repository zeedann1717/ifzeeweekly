<?php
require "fungsi.php";

// Ambil ID dari URL
$id = $_GET["id"];

// Ambil data mahasiswa berdasarkan ID
$mhs = tampildata("SELECT * FROM mahasiswa WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        *{
            box-sizing:border-box;
            margin:0;
            padding:0;
        }

        body{
            font-family:'Poppins',sans-serif;
            background-color:#f0f4f8;
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
            padding:20px;
        }

        .form-container{
            background:#fff;
            width:100%;
            max-width:450px;
            padding:40px 30px;
            border-radius:12px;
            box-shadow:0 10px 25px rgba(0,0,0,0.08);
        }

        .form-container h2{
            text-align:center;
            color:#2c3e50;
            margin-bottom:30px;
        }

        .form-group{
            margin-bottom:20px;
        }

        .form-group label{
            display:block;
            margin-bottom:8px;
            font-weight:600;
            color:#34495e;
        }

        .form-group input{
            width:100%;
            padding:12px 15px;
            border:1px solid #dcdde1;
            border-radius:8px;
            font-size:14px;
        }

        .form-group input:focus{
            border-color:#f39c12;
            outline:none;
            box-shadow:0 0 0 3px rgba(243,156,18,0.2);
        }

        .btn-submit{
            width:100%;
            padding:14px;
            background:#f39c12;
            color:white;
            border:none;
            border-radius:8px;
            cursor:pointer;
            font-size:16px;
            font-weight:600;
        }

        .btn-submit:hover{
            background:#e67e22;
        }

        .btn-back{
            display:block;
            text-align:center;
            margin-top:15px;
            text-decoration:none;
            color:#7f8c8d;
        }
    </style>
</head>
<body>

<div class="form-container">

    <h2>Edit Data Mahasiswa</h2>

    <form action="ubahdata.php" method="post" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?= $mhs['id']; ?>">

        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" value="<?= $mhs['nama']; ?>" required>
        </div>

        <div class="form-group">
            <label>NIM</label>
            <input type="text" name="nim" value="<?= $mhs['nim']; ?>" required>
        </div>

        <div class="form-group">
            <label>Jurusan</label>
            <input type="text" name="jurusan" value="<?= $mhs['jurusan']; ?>" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" value="<?= $mhs['email']; ?>" required>
        </div>

        <div class="form-group">
            <label>No. Handphone</label>
            <input type="text" name="nohp" value="<?= $mhs['no_hp']; ?>" required>
        </div>

        <div class="form-group">
            <label>Foto Saat Ini</label>
            <br>
            <img
                src="assets/images/<?= $mhs['foto']; ?>"
                width="100"
                style="border-radius:8px;margin-bottom:10px;"
            >
        </div>

        <input type="hidden" name="fotoLama" value="<?= $mhs['foto']; ?>">

        <div class="form-group">
            <label>Pilih Foto Baru</label>
            <input type="file" name="foto" accept=".jpg,.jpeg,.png">
        </div>

        <button type="submit" name="submit" class="btn-submit">
            Ubah Data
        </button>

        <a href="mahasiswa.php" class="btn-back">
            Batal & Kembali
        </a>

    </form>

</div>

</body>
</html>