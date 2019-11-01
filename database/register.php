<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="register.css">
</head>

<?php 
	//kode php disini
	require 'connect.php';
	if ( isset($_POST['submit']) ) {
		if ( register($_POST) > 0 ) {
			echo "
				<script>
					alert('data berhasil disimpan');
				</script>
			";
			header('Location: index.php');
		} else {
			echo mysqli_error($conn);
		}
	}
?>


<body>

	<div class="container mt-3" >
		<h1>Register</h1>
         <div class="contain">
        <img class="logo" src="atribut/logo_panjang.png">
		<form action="" method="POST">
              <div class="register-form">
                <div class="input-box">
			<input type="text" name="username" placeholder="Username" autocomplete="off" required="true" autofocus="on"></div><br>
			<input type="text" name="email" placeholder="Email" autocomplete="off" required="true" autofocus="on"> </div><br>
                <div class="input-box">
			<input type="text" name="no_hp" placeholder="Nomor Hp" autocomplete="off" required="true" autofocus="on"></div><br>
                <div class="input-box">
			<input type="password" name="password" placeholder="Password" required="true">
        </div><br>
                <div class="input-box">
			<input type="password" name="cpassword" placeholder="Confirm Password" required="true"></div><br>
			<button type="submit" name="submit">Register</button> <br>
			<a href="index.php">Login here.</a>
		</form>
	</div>

</body>
</html>