<?php 
    //kode php disini
    session_start();
    
    if ( isset($_SESSION['login'])) {
        header('Location: ../index.php');
        exit;
    }
    ?>
            <?php 
        require '../connect.php';
            if (isset($_POST["cek"])){
                ceklogin($_POST);
            }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../atribut/logo.png">
    <link rel="stylesheet" href="login.css">
    <title>Login | Idealku</title>
</head>
<body>
    <div class="contain">
        <img class="logo" src="../atribut/logo.png">
        <form method="post">
            <div class="login-form">
                <div class="input-box">
                    <input type="text" name="username"required>
                    <label>Username</label>
                </div>
                <div class="input-box">                  
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <input type="checkbox" name="rememberme" value="rememberme" id="remember" checked> 
                <span class="cek">Remember me</span> <br>
                <button type="submit" name="cek">LOGIN</button>
                <p class="register">Don't have an account? <a href="register.php">Register now</a></p>

            </div>
        </form>
    </div>    
</body>
</html>