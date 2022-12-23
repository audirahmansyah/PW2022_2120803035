<?php 

function luas_persegi_panjang ($a, $b) {

    $panjang = $a;
    $lebar = $b;

    $luas = $panjang * $lebar;

    return $luas;
}

echo "Luas Persegi panjang tersebut adalah :";
echo "<br>";
echo luas_persegi_panjang(10, 6.5). " cm";

?>
