<?php

$conn = mysqli_connect("localhost", "root", "", "ifzeeweekly");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

function tampildata($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambahdata($data)
{
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $nohp = htmlspecialchars($data["nohp"]);

    // upload foto
    $foto = $_FILES["foto"]["name"];
    $tmpName = $_FILES["foto"]["tmp_name"];

    move_uploaded_file(
        $tmpName,
        "assets/images/" . $foto
    );

    $query = "INSERT INTO mahasiswa
                (nama,nim,jurusan,email,no_hp,foto)
              VALUES
                ('$nama','$nim','$jurusan','$email','$nohp','$foto')";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function ubahdata($data)
{
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $nohp = htmlspecialchars($data["nohp"]);

    $fotoLama = $data["fotoLama"];

    if($_FILES["foto"]["error"] === 4)
    {
        $foto = $fotoLama;
    }
    else
    {
        $foto = $_FILES["foto"]["name"];
        $tmpName = $_FILES["foto"]["tmp_name"];

        move_uploaded_file(
            $tmpName,
            "assets/images/" . $foto
        );

        if(file_exists("assets/images/" . $fotoLama))
        {
            unlink("assets/images/" . $fotoLama);
        }
    }

    $query = "UPDATE mahasiswa SET
                nama='$nama',
                nim='$nim',
                jurusan='$jurusan',
                email='$email',
                no_hp='$nohp',
                foto='$foto'
              WHERE id=$id";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function hapusdata($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

?>