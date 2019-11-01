<?php require 'connect.php';
  session_start();


  
  if ( isset($_COOKIE['login']) ) {
    if ($_COOKIE['login'] == "true") {
      $_SESSION['login'] == true;
    }
  }
  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="ibu_hamil.css">
<link rel="shortcut icon" href="atribut/logo.png">

    <title>Ideal Ibu Hamil</title>
  </head>
  <body>

    <!-- Navbar -->

  <?php include 'nav_pink.php';  ?>

<div class="body">
	<div class="judul">
		<img src="atribut/logo.png">
		<h1>
			IBU HAMIL
		</h1>
	</div>

  <!-- Form nya  -->
	<form method="GET">

	<div class="hitung">

		<div class="gender">
        <div class="gamb">
				<label class="laki">
				<img src="atribut/logo-ibuhamil.png">
				</label>
        </div>

		</div>

		<div class="isian">
    <div class="inputan">
			<label class="inputbox">
		
			<input type="text" name="berat"  required>
        <span>
      Berat Badan 
      </span>
			</label>

      <label class="inputbox">
			
			<input type="text" name="tinggi" required>
			<span>
      Tinggi Badan  
      </span>
      </label>

      <label class="inputbox">
			
			<input type="text" name="umur" required>
			<span>
      Umur Kehamilan(Minggu)
      </span>
      </label>
      <label>

		

        
     
      <input type="submit" name="submit" value="CEK IDEAL" id="submit">
			</div>

			<div class="poster">
				<img src="atribut/poster_ibu.jpg">
			</div>
		</div>

	</div>
	</form>

</div>

  <?php
  if (isset($_GET['submit'])) {
    
  ?>
  <div class="hasil">
    <h2>
      Hasil BMI anda : 

    </h2>
    <?php 
      if (($_GET['umur']&&$_GET['tinggi']&&$_GET['berat'])!="") {
      $umur=$_GET['umur'];
      $tinggi=$_GET['tinggi'];
      $berat=$_GET['berat'];

  $tinggii=$tinggi-100;
 $berat_ideal = $tinggii - ($tinggii*15/100);

 $Bbhi= $berat_ideal +($umur*0.35);


      

     ?>
     <p>
       Berat Badan : <?php echo "$berat kg";  ?>
     </p>
     <p>
       Umur Kehamilan: <?php echo "$umur Minggu";  ?>
     </p>
     <p>
       Berat Ideal : <?php echo "$Bbhi kg";  ?>
     </p>
     <h3>
        Tips Untuk Ibu Hamil Sehat
      </h3>
     <a href="ibu/menu.php"> klik disini---></a>
     
  </div>
<?php }else {?>
<script> alert ('Masukan Inputan dulu')</script>

<?php  }?>

<div class="bawah">
<img src="atribut/foot_ibu.png" style="width: 100%; height: 100px; margin-top: 50px;
">
</div>

<?php }?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
