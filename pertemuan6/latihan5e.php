<?php 

if (isset($_POST["submit"]) ) {
    if ( $_POST["username"] == "admin" && $_POST["password"] == "123" ) {
        header("location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
    <style type="text/css">
        body{
            background-color: lightgrey;
        }
        h1 {
            text-align: center;
            font-weight: bold;
            margin-top: 100px;
        }

        .form {
            position: fixed;
            width: 550px;
            height: px;
            border: 8px solid darkgrey;
            text-align: center;
            background-color: white;
            left: 50%;
            margin-left: -279px;
        }

        .input{
            margin-bottom: 40px;
            margin-top: 40px;
            margin-left: 50px;
            margin-right: 50px;
            word-spacing: 1cm;
        }

        .tombol {
            margin-top: 15px;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <h1>Login</h1>
<div class="form">
    <form action="" method="POST">
            <div class="input">
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
            </div>

            <div class="input">
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
            </div>
             
        <?php if(isset($error) ) : ?>
            <p style=" margin-top: 27px; color: red; font-style: italic">username atau password salah</p>
        <?php endif; ?>
        

        <div class="tombol">
           <button type="submit" name="submit">Login</button>
           </div>
        
    </form>    
    </div>
</body>
</html>