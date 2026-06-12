<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "root", "ifzeeweekly");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Fungsi untuk mengambil data (yang dipakai di mahasiswa.php)
function tampildata($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Tambahkan fungsi baru ini untuk menangani tambah data
function tambahdata($data)
{
    global $koneksi;

    // Ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $nohp = htmlspecialchars($data["nohp"]);
    $foto = htmlspecialchars($data["foto"]);

    // Query insert data
    $query = "INSERT INTO mahasiswa 
                (nama, nim, jurusan, email, no_hp, foto) VALUES
                ('$nama', '$nim', '$jurusan', '$email', '$nohp', '$foto')";

    mysqli_query($koneksi, $query);

    // Mengembalikan angka 1 jika berhasil, atau -1 jika gagal
    return mysqli_affected_rows($koneksi);
}
// FUNGSI UNTUK MENGHAPUS DATA
function hapusdata($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");
    
    return mysqli_affected_rows($koneksi);
}

// FUNGSI UNTUK MENGUBAH DATA
function ubahdata($data) {
    global $koneksi;
    
    // Ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $nohp = htmlspecialchars($data["nohp"]);
    $foto = htmlspecialchars($data["foto"]);

    // Query update data
    $query = "UPDATE mahasiswa SET 
                nama = '$nama',
                nim = '$nim',
                jurusan = '$jurusan',
                email = '$email',
                no_hp = '$nohp',
                foto = '$foto'
              WHERE id = $id";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
?>