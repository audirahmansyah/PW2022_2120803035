<?php 

require 'function.php';

// ambil data di URL
$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa Where id = $id")[0];




if(isset($_POST["submit"])){
        
// cek apakah data berhasil di ubah atau tidak
if( ubah($_POST) > 0 ){
    echo "
    <script>
        alert('data berhasil diubah!');
        document.location.href = 'index.php'
    </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal diubah!');
        document.location.href = 'index.php'
    </script>
    ";
}


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="NIM">NIM :</label>
                <input type="text" name="NIM" id="NIM" required value="<?= $mhs["NIM"]; ?>">
            </li>
            <li>
                <label for="Nama">Nama :</label>
                <input type="text" name="Nama" id="Nama" required value="<?= $mhs["Nama"]; ?>">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <img src="img/<?= $mhs['gambar']; ?>" width="40"> <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>

    </form>
    
</body>
</html>