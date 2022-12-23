<?php 
require 'function.php';

$buku = query("SELECT * FROM buku");

if( isset($_POST["cari"]) ) {
    $buku = cari($_POST["keyword"]);
}

//while( $mhs = mysqli_fetch_assoc($result) ){
//    var_dump($mhs);
//}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="UAS.css">
</head>
<body>

<h1 class="header">Daftar Buku</h1>

<br><br>

<a style="float: right" href="insert.php">Tambah data Buku</a>

<br><br><br>

<form action="" method="POST">

<input type="text" name="keyword" size="40" autofocus 
placeholder="masukkan keyword pencarian.." autocomplete="off">
<button type="submit" name="cari">Cari!</button>

<br><br>
</form>

<table class="tables" border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>ISBN</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($buku as $row ): ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a style="text-decoration: none;" href="update.php?id=<?= $row["id"]; ?>">ubah</a> <br>
            <a style="text-decoration: none;" href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="200"></td>
        <td><?= $row["judul"]; ?></td>
        <td><?= $row["pengarang"]; ?></td>
        <td><?= $row["penerbit"]; ?></td>
        <td><?= $row["tahun"]; ?></td>
        <td><?= $row["nomor"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>
    
</body>
</html>