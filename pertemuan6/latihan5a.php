<?php 

if(!isset($_GET['angka'])){
    echo "";
    exit;
}

$angka = $_GET['angka'];

for ($i = $angka; $i >= 1; $i--){
  for ($j = 1; $j <= $i; $j++){
   echo "$j ";
  }
  echo "<br>";
}
?>