<?php 
    //kode php disini
    require '../connect.php';
    if ( isset($_POST['submit']) ) {
        if ( register($_POST) > 0 ) {
            echo "<script>
                    alert('data berhasil disimpan');
                </script>";
            header('Location: login.php');
        } else {
            echo mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../atribut/logo.png">
    <link rel="stylesheet" href="register.css">
    <title>Register | Idealku</title>
</head>
<body>
    <div class="contain">
        <img class="logo" src="../atribut/logo.png">
        <form method="post">
            <div class="register-form">
                <div class="input-box">
                    <input type="text" name="nama" required>
                    <label>Nama</label>
                </div>

                <div class="input-box">
                    <input type="text" name="username" required>
                    <label>Username</label>
                </div>

                
                <div class="input-box">
                    <input type="text" name="umur" required>
                    <label>Umur</label>
                </div>


                <div class="input-box">
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>

                <div class="input-box">                  
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="input-box">                  
                    <input type="password" name="cpassword" required>
                    <label>Repeat Password</label>
                </div>
                <button type="submit" name="submit">REGISTER</button>
                <p class="register">Already have an account? <a href="login.php">Login here</a></p>
            </div>
        </form>
    </div>    
</body>
</html>