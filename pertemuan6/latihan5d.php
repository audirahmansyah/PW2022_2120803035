<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 5d</title>
</head>
<body>

        <form action="" method="POST">
            Masukan angka
            <input type="text" name="angka">
            <input type="submit" name="enter" value="Tampilkan!">
        </form>

        <?php 
        
        if (isset($_POST["enter"])){
            $angka = $_POST["angka"];
            
            for ($i= $angka; $i>=1; $i--){
                for ($j=1; $j<=$i; $j++){
                 echo "$j ";
                }
                echo "<br>";
              }
        }
        ?>
    
</body>
</html>