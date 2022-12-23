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
    <title>Halaman Admin</title>
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
    <h1>Tambah Data Buku</h1>


    <div class="wrapper">
        <div class="contact-form">
            <div class="input-fields">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="items">
                <label class="label" for="judul">Judul Buku :</label>
                <input class="input"  type="text" name="judul" id="judul" required>
        </div>
        <div class="items">
                <label class="label" for="pengarang">Pengarang :</label>
                <input class="input"  type="text" name="pengarang" id="pengarang" required>
        </div>
        <div class="items"> 
                <label class="label" for="penerbit">Penerbit :</label>
                <input class="input"  type="text" name="penerbit" id="penerbit" required>
        </div>
        <div class="items">
                <label class="label" for="tahun">Tahun Terbit :</label require>
                <input class="input"  type="text" name="tahun" id="tahun">
        </div>
        <div class="items">
                <label class="label"  for="nomor">ISBN :</label require>
                <input class="input"  type="text" name="nomor" id="nomor">
        </div>
        <div class="items">   
                <label class="label" for="gambar">Gambar :</label require>
                <input class="input"  type="file" name="gambar" id="gambar">
        </div>   
                <button class="send" type="submit" name="submit">Tambah Data!</button>
           
    </form>
    
</body>
</html>