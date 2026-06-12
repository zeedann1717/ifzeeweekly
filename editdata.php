<?php
require "fungsi.php";

// Ambil data di URL
$id = $_GET["id"];

// Query data mahasiswa berdasarkan ID
// Index [0] dipakai karena fungsi tampildata menghasilkan array multi-dimensi
$mhs = tampildata("SELECT * FROM mahasiswa WHERE id = $id")[0];

// Cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {
    
    // Cek apakah data berhasil diubah atau tidak
    if(ubahdata($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'mahasiswa.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah / tidak ada perubahan!');
                document.location.href = 'mahasiswa.php';
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
    <title>Edit Data Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .form-container {
            background-color: #ffffff;
            width: 100%;
            max-width: 450px;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }
        .form-container h2 {
            text-align: center; color: #2c3e50; margin-bottom: 30px; font-size: 24px; font-weight: 600;
        }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; color: #34495e; font-size: 14px; font-weight: 600; }
        .form-group input[type="text"] {
            width: 100%; padding: 12px 15px; border: 1px solid #dcdde1; border-radius: 8px;
            font-size: 14px; font-family: 'Poppins', sans-serif; transition: all 0.3s ease;
        }
        .form-group input[type="text"]:focus {
            border-color: #f39c12; outline: none; box-shadow: 0 0 0 3px rgba(243, 156, 18, 0.2);
        }
        .btn-submit {
            width: 100%; padding: 14px; background-color: #f39c12; color: #ffffff; border: none;
            border-radius: 8px; font-size: 16px; font-weight: 600; cursor: pointer; transition: 0.3s ease; margin-top: 10px;
        }
        .btn-submit:hover { background-color: #e67e22; }
        .btn-back {
            display: block; text-align: center; margin-top: 15px; text-decoration: none; color: #7f8c8d; font-size: 14px;
        }
        .btn-back:hover { color: #34495e; text-decoration: underline; }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Edit Data Mahasiswa</h2>

        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">

            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" value="<?= $mhs["nama"]; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" id="nim" name="nim" value="<?= $mhs["nim"]; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" id="jurusan" name="jurusan" value="<?= $mhs["jurusan"]; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" value="<?= $mhs["email"]; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="nohp">No. Handphone</label>
                <input type="text" id="nohp" name="nohp" value="<?= $mhs["no_hp"]; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="foto">Nama File Foto</label>
                <input type="text" id="foto" name="foto" value="<?= $mhs["foto"]; ?>" required>
            </div>
            
            <button type="submit" name="submit" class="btn-submit">Ubah Data</button>
            <a href="mahasiswa.php" class="btn-back">Batal & Kembali</a>
        </form>
    </div>

</body>
</html>