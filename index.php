<?php
$nama = "NUR AFIQAH MAISARA BINTI MOHD ZAKI";
$nomatrik = "18DIT24F1013";
$kelas = "DIT4C";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profil Pelajar</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            margin-top: 50px;
        }

        img {
            margin-top: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>Butiran Diri</h1>

    <img src="gambar.jpg" width="200">

    <p><b>Nama:</b> <?= $nama ?></p>
    <p><b>No Matrik:</b> <?= $nomatrik ?></p>
    <p><b>Kelas:</b> <?= $kelas ?></p>
</body>
</html>