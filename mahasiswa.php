<?php

require "fungsi.php";

$qmahasiswa = "SELECT * FROM mahasiswa";
$mahasiswas = tampildata($qmahasiswa);

?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>David Beckham | Data Mahasiswa</title>
    <link rel="stylesheet" href="mahasiswa.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="mahasiswa-page">

    <div class="container">
        
        <header class="site-header">
            <h1 class="site-title">DAVID BECKHAM</h1>
            <nav class="site-nav">
                <a href="index.php">Home</a>
                <a href="profile.php">Profile</a>
                <a href="contact.php">Contact</a>
                <a href="mahasiswa.php" class="active">Mahasiswa</a>
            </nav>
        </header>

        <main class="content-layout">
            
            <section class="data-section">
                <div class="section-header">
                    <h2 class="section-title">Data Mahasiswa</h2>
                    <a href="tambahdata.php" class="btn-link">
                        <button class="add-btn">+ Tambah Data</button>
                    </a>
                </div>

                <div class="table-container">
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th >No</th>
                                <th >Nama</th>
                                <th >Nim</th>
                                <th >Jurusan</th>
                                <th >Email</th>
                                <th >No.Hp</th>
                                <th >Foto</th>
                                <th >Aksi</th>
                            </tr>
                            <?php
                                $i = 1;
                                foreach($mahasiswas as $mhs)
                                    {
                            ?>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center"><?=$i?></td>
                                <td><?= $mhs["nama"]?></td>
                                <td><?= $mhs["nim"]?></td>
                                <td><?= $mhs["jurusan"]?></td>
                                <td><?= $mhs["email"]?></td>
                                <td><?= $mhs["no_hp"]?></td>
                                <td><img src="assets/images/<?= $mhs["foto"]?>"alt="foto"width=50px"></td>
                                <td>
                                    <a href="editdata.php"><button>Edit</button></a> 
                                    <a href="deletedata.php"><button>Hapus</button></a> 
                                </td>    
                            </tr>
                                <?php
                                    $i++;
                                    }
                                ?>
                            <!-- <tr>
                                <td>2</td>
                               <td><strong>David</strong></td>
                                 <td>123</td>
                                  <td>infor</td>
                                   <td>zzz@gmail.com</td>
                                    <td>089</td>
                                <td><img src="assets/images/david2.jpg" alt="David" class="avatar"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><strong>David</strong></td>
                                 <td>123</td>
                                  <td>infor</td>
                                   <td>zzz@gmail.com</td>
                                    <td>089</td>
                                <td><img src="assets/images/david2.jpg" alt="David" class="avatar"></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </section>

            <hr class="divider"/>

            <section class="latihan-section">
                <h2 class="section-title">Latihan Tabel</h2>
                <div class="latihan-container">
                    <table class="latihan-table">
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td colspan="2" rowspan="2" class="mid-cell">MID</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>9</td>
                            <td>8</td>
                            <td>7</td>
                        </tr>
                    </table>
                </div>
            </section>

        </main>

    </div>

</body>
</html>