<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .kotak {
            width: 40px;
            height: 40px;
            background-color: #BADA55;
            text-align: center;
            line-height: 40px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <?php 
    $angka = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
    echo $angka[1][1];
    ?>
</body>
</html>