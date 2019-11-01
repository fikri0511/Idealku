<?php 

$conn = mysqli_connect("localhost","root","","pt");

function register($infologin){
	global $conn;
	
	$username = htmlspecialchars(stripcslashes($infologin["username"]));
	$email = htmlspecialchars(stripcslashes($infologin["email"])); 
	$no_hp = htmlspecialchars(stripcslashes($infologin["no_hp"])); 
	$password = mysqli_real_escape_string($conn,$infologin["password"]);
	$cpassword = mysqli_real_escape_string($conn,$infologin["cpassword"]); 
	$cek = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username' OR email = '$email'");

	if (mysqli_num_rows($cek) > 0){
		echo "<script>alert('Username / email sudah ada !');</script>";
		return false;
	}

	if ($password !== $cpassword) {
		echo "<script>alert('Password tidak sama !');</script>";
		return false;
	} 
	
	$password = password_hash($password, PASSWORD_DEFAULT);

	$query = mysqli_query($conn, "INSERT INTO users (username, password, email,no_hp) VALUES ('$username','$password', '$email','$no_hp')");

	return mysqli_affected_rows($conn);
	
}

function ceklogin($datalogin){
	global $conn;
	$username = $datalogin["username"];
	$password = $datalogin["password"];

	$cekuser = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' OR email='$username'");

	if (mysqli_num_rows($cekuser) === 1){

		$hasil = mysqli_fetch_assoc($cekuser);

		if (password_verify($password,$hasil["password"])){
			
			if ( $hasil['status'] == 1 ) {
				$_SESSION["user"] = $username;
				$_SESSION["login"] = true;
				if (isset($datalogin["rememberme"])){
					setcookie("login","tetap_ingat", time() + (3600*24));
				} 
				echo "<script>
					alert('Anda berhasil login!');
					document.location.href='landing.php';
					</script>";
			} else {
				echo "<p style=\"color:red; font-style: italic;\">Akun belum aktif!</p>";
			}

		}
	} else {
		echo "<p style=\"color:red; font-style: italic;\"> Username / Password Salah !</p>";
	}
}

 ?>

