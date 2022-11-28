<?php 
function volume_dua_kubus ($a, $b) {
    
    $volume_a = $a * $a * $a;
    $volume_b = $b * $b * $b;

    $total = $volume_a + $volume_b;

    return $total;

}

echo volume_dua_kubus(9,4);
?>
