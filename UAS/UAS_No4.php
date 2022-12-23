<?php 

    $angka = [76, 56, 79, 88, 74, 97, 39, 48, 57];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Perulangan Foreach</title>
</head>
<body>
    <p>perulangan Foreach :</p>
    <?php 

        foreach ($angka as $bilangan) {
            echo "$bilangan";
            echo "<br>";
        }

    ?>
</body>
</html>