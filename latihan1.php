<?php 
$mahasiswa =[
    [
    "nim" => "23510009",
    "nama" => "Amalia Priliantini", 
    "jurusan" => "Sistem Informasi",
    "email" => "amalia23510009@stimata.ac.id",
    "gambar" => "GambarPenulis.jpg"
    ],

    [
    "nama" => "Oda", 
    "nim" => "235120001",
    "jurusan" => "Teknologi Informasi", 
    "email" => "Oda23520001@stimata.ac.id",
    "gambar" => "coba.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET</title>
</head>
<body>
    <h1>Daftar Mahasiwa</h1>
    <ul>
         <?php foreach ($mahasiswa as $mhs) : ?>
        <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim= <?= $mhs["nim"]; 
            ?>&jurusan=<?= $mhs["jurusan"]; ?>&email= <?= $mhs["email"];
            ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>