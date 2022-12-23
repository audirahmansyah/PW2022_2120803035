<?php 

require 'function.php';

// ambil data di URL
$id = $_GET["id"];

$bk = query("SELECT * FROM buku Where id = $id")[0];




if(isset($_POST["submit"])){
        
// cek apakah data berhasil di ubah atau tidak
if( update($_POST) > 0 ){
    echo "
    <script>
        alert('data berhasil diubah!');
        document.location.href = 'tampil.php'
    </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal diubah!');
        document.location.href = 'tampil.php'
    </script>
    ";
}


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah Data Buku</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans');

        *{
            margin: 0;
            padding: 0;
            outline: none;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            height: 100vh;
            font-family: 'Open Sans', sans-serif;
        }

        h1 {
            text-align: center;
            background: #afeeee;
        }

        .wrapper {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .contact-form {
            width: 100%;
            max-width: 500px;
            height: auto;
            background: #6495ed;
            padding: 40px, 50px;
            border-radius: 5px;
        }
        .input-fields {
            padding: 0 30px;
        }
        .input-fields .items {
            width: 100%;
            padding-bottom: 15px;
        }
        .input-fields .items .label {
            display: block;
            font-size: 1em;
            color: white;
            padding-bottom: 5px;
        }
        .send {
            margin: 0 30px;
            padding: 10px 0;
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Ubah Data Buku</h1>
<div class="wrapper">
    <div class="contact-form">
        <div class="input-fields">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $bk["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $bk["gambar"]; ?>">
                <div class="items">
                <label class="label" for="judul">Judul Buku :</label>
                <input class="input" type="text" name="judul" id="judul" required value="<?= $bk["judul"]; ?>">
                </div>
                <div class="items">
                <label class="label" for="pengarang">Pengarang :</label>
                <input class="input" type="text" name="pengarang" id="pengarang" required value="<?= $bk["pengarang"]; ?>">
                </div>
                <div class="items">
                <label class="label" for="penerbit">Penerbit :</label>
                <input class="input" type="text" name="penerbit" id="penerbit" required value="<?= $bk["penerbit"]; ?>">
                </div>
                <div class="items">
                <label class="label" for="tahun">Tahun Terbit :</label>
                <input class="input" type="text" name="tahun" id="tahun" required value="<?= $bk["tahun"]; ?>">
                </div>
                <div class="items">
                <label class="label" for="nomor">ISBN :</label>
                <input class="input" type="text" name="nomor" id="nomor" required value="<?= $bk["nomor"]; ?>">
                </div>
                <div class="items">
                <label class="label" for="gambar">Gambar :</label>
                <img src="img/<?= $bk['gambar']; ?>" width="40"> <br>
                <input class="input" type="file" name="gambar" id="gambar">
                </div>
                <button class="send" type="submit" name="submit">Ubah Data!</button>

            </form>
        </div>
    </div>
</div> 
</body>
</html>