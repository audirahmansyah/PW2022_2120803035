<?php 

$asean = [
    "Indonesia" => "D.K.I jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Associative</title>
</head>
<body>
    <h1>Daftar Negara ASEAN dan Ibukota</h1>
    <?php 
    
    foreach($asean as $s => $j) : ?>
    <li><?php echo "$s : $j" ?></li>
    <?php endforeach ?>

</body>
</html>