<?php 
	//kode php disini
	require 'connect.php';
	session_start();
	
	if ( isset($_COOKIE['login']) ) {
		if ($_COOKIE['login'] == "true") {
			$_SESSION['login'] == true;

		}
	}
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="form_profil.css">
</head>

<body>
	<div class="container mt-3" >
		<h1>LOGIN</h1>
		
<div class="contain">
        <img class="logo" src="atribut/logo_panjang.png">

		<form action="" method="POST">
			 <div class="login-form">
                <div class="input-box">
				<input type="text" name="nama" placeholder="Nama" autocomplete="off" required="true" autofocus="on">
                </div>
                <div class="input-box">
				<input type="text" name="no_hp" placeholder="Nomor HP" autocomplete="off" required="true" autofocus="on">
                </div>
                <div class="input-box">
				<input type="text" name="umur" placeholder="Umur" autocomplete="off" required="true" autofocus="on">
                </div>

                 <select name="kelamin">
        <option value="">
          --Pilih Jenis Kelamin--
        </option>
        
        <option value="Laki-Laki">
          Laki-Laki
        </option>
        <option value="Perempuan">
        	Perempuan
        </option>
    </select>
		
		</div>
		  <div class="input-box">
			<button type="submit" name="submit">Masukan Data</button>
			</div> <br>
			  <div class="input-box">
			<input type="checkbox" name="rememberme" value="rememberme" id="remember">
		</div>
			<br>
			<a href="register.php">Register here. </a>
		</form>
	</div>

	<?php
				include ("config.php");
				if (isset($_POST['submit'])) {
						$no_hp=$_POST['no_hp'];
						$nama=$_POST['nama'];
						$umur=$_POST['umur'];
						$kelamin=$_POST['kelamin'];
						$query="insert into profil values ('','','$nama','$umur','$kelamin','$no_hp')";
						$tambah = mysqli_query($conn,$query);
						if ($tambah==true) {
							?> 
							<script type="text/javascript">
								alert('Data Berhasil diinput!');
							</script>
							<?php
						}else{
							?> 
							<script type="text/javascript">
								alert('Data Gagal diinput!');
							</script>
							<?php
						}
				}
			?>
</body>

</html>