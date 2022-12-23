<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while( $row = mysqli_fetch_assoc($result) ) {
    $rows[] = $row;
  }
  return $rows;
}


function tambah($_data) {
  global $conn;
  $judul = htmlspecialchars($_data["namaoperator"]);
  $pengarang = htmlspecialchars($_data["pilihanpaket"]);
  $penerbit = htmlspecialchars($_data["penerbit"]);
  $tahun = htmlspecialchars($_data["tahun"]);
  $nomor = htmlspecialchars($_data["nomor"]);

  $gambar = upload();
  if( !$gambar ) {
    return false;
  }

  $query = "INSERT INTO paketkuotaa
              VALUES
              ('', '$judul', '$pengarang', '$penerbit', '$tahun', '$nomor', '$gambar')
              ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function upload() {
  
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpname = $_FILES['gambar']['tmp_name'];


  if( $error === 4 ) {
    echo "<script>
            alert('pilih gambar terlebih dahulu!');
            </script>";
          return false;
  }

$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
$ekstensiGambar = explode('.', $namaFile);
$ekstensiGambar = strtolower(end($ekstensiGambar));
if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
  echo "<script>
          alert('yang anda upload bukan gambar!');
          </script>";
          return false;
}


if( $ukuranFile > 1000000 ) {
  echo "<script>
          alert('ukuran gambar terlalu besar!');
          </script>";
        return false;
}

$namaFileBaru = uniqid();
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensiGambar;


  move_uploaded_file($tmpname, 'img/' . $namaFileBaru);

  return $namaFileBaru;
}


function hapus($id) {
  global $conn;
  mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

  return mysqli_affected_rows($conn);
}


function update($_data) {
  global $conn;

  $id = $_data["id"];
  $judul = htmlspecialchars($_data["judul"]);
  $pengarang = htmlspecialchars($_data["pengarang"]);
  $penerbit = htmlspecialchars($_data["penerbit"]);
  $tahun = htmlspecialchars($_data["tahun"]);
  $nomor = htmlspecialchars($_data["nomor"]);
  $gambar = htmlspecialchars($_data["gambar"]);


  if( $_FILES['gambar']['error'] === 4 ) {
    $gambar = $gambar;
  } else {
  $gambar = upload();
  }

  $query = "UPDATE buku SET
              judul = '$judul',
              pengarang = '$pengarang',
              penerbit = '$penerbit',
              tahun = '$tahun',
              nomor = '$nomor',
              gambar = '$gambar'
            WHERE id = $id
              ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function cari($keyword) {
  $query = "SELECT * FROM buku
            WHERE
            judul LIKE '%$keyword%' OR
            pengarang LIKE '%$keyword%' OR
            penerbit LIKE '%$keyword%' OR
            tahun LIKE '%$keyword%' OR
            nomor LIKE '%$keyword%' 
            ";
  return query($query);
}

?>