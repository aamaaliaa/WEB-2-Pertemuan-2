<?php
//array multidimensi
$mahasiswa =[
            [
            "nama" => "Amalia Priliantini", 
            "nim" => "23510009",
            "jurusan" => "Sistem Informasi",
            "email" =>"amalia23510009@stimata.ac.id",
            "gambar" => "GambarPenulis.jpg"
            ],

            [
            "nama" => "Oda", 
            "nim" => "235120001",
            "jurusan" => "Teknologi Informasi", 
            "email" => "oda23520001@stimata.ac.id",
            "gambar" => "coba.jpg"
            ]
        ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiwa</h1>
    <?php foreach ($mahasiswa as $mhs): ?>
    <ul>
        <li>
            <img src="Aset/<?= $mhs["gambar"]; ?>" alt="Image" height="75px">
        </li>
        <li>Nama : <?= $mhs["nama"] ?></li>
        <li>NIM :<?= $mhs["nim"] ?></li>
        <li>Jurusan : <?= $mhs["jurusan"] ?></li>
        <li>Email : <?= $mhs["email"] ?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>