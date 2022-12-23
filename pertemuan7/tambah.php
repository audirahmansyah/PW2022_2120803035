<?php 

require 'function.php';

if(isset($_POST["submit"])){

        
// cek apakah data berhasil di tambahkan atau tidak
if(tambah($_POST) > 0){
    echo "
    <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php'
    </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php'
    </script>
    ";
}


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="NIM">NIM :</label>
                <input type="text" name="NIM" id="NIM" required>
            </li>
            <li>
                <label for="Nama">Nama :</label>
                <input type="text" name="Nama" id="Nama" required>
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan :</label require>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar :</label require>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>

    </form>
    
</body>
</html>