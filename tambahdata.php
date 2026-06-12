<?php

    require "fungsi.php";

    if(isset($_POST["submit"]))
    {
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $jurusan = $_POST["jurusan"];
        $email = $_POST["email"];
        $nohp = $_POST["nohp"]; 
        $foto = $_POST["foto"];

        $query = "INSERT INTO mahasiswa 
        (nama,nim,jurusan,email,no_hp,foto) VALUES
        ('$nama','$nim','$jurusan','$email','$nohp','$foto')";
        
        mysqli_query($koneksi, $query);

        if(mysqli_affected_rows($koneksi) > 0) {
            echo "<script>alert('Data berhasil ditambahkan!');</script>";
        } else {
            echo "<script>alert('Data gagal ditambahkan!');</script>";
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
        /* Reset margin & padding dasar */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8; /* Warna background abu-abu kebiruan yang soft */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* Container mirip Card */
        .form-container {
            background-color: #ffffff;
            width: 100%;
            max-width: 450px;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08); /* Efek melayang */
        }

        .form-container h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #34495e;
            font-size: 14px;
            font-weight: 600;
        }

        .form-group input[type="text"] {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #dcdde1;
            border-radius: 8px;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
        }

        /* Efek nyala saat kotak input diklik */
        .form-group input[type="text"]:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }

        .btn-submit {
            width: 100%;
            padding: 14px;
            background-color: #3498db;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
            font-family: 'Poppins', sans-serif;
        }

        .btn-submit:hover {
            background-color: #2980b9;
        }

    </style>
</head>
<body>

    <div class="form-container">
        <h2>Tambah Data Mahasiswa</h2>

        <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required>
            </div>
            
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" required>
            </div>
            
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" id="jurusan" name="jurusan" placeholder="Masukkan jurusan" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="contoh@email.com" required>
            </div>
            
            <div class="form-group">
                <label for="nohp">No. Handphone</label>
                <input type="text" id="nohp" name="nohp" placeholder="08xxxxxxxxxx" required>
            </div>
            
            <div class="form-group">
                <label for="foto">Nama File Foto</label>
                <input type="text" id="foto" name="foto" placeholder="foto_profil.jpg" required>
            </div>
            
            <button type="submit" name="submit" class="btn-submit">Simpan Data</button>
        </form>
    </div>

</body>
</html>