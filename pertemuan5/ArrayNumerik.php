<?php 

$mahasiswa = ["Audi", "2120803035", "Sistem Informasi", "audirahmansyah07@gmail.com"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach ?>    
    </ul>
</body>
</html>