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
<link rel="shortcut icon" href="atribut/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="bayi1.css">

    <title>Bayi Ideal</title>
  </head>
  <body>
    
    <!-- Navbar -->
<?php include 'nav_biru.php'; ?>
 

<div class="body">
	<div class="judul">
		<img src="atribut/logo_bayi.png">
		<h1>
		 BAYI dan ANAK-ANAK
		</h1>
	</div>

  <!-- Form nya  -->
	<form method="GET">

	<div class="hitung">

		<div class="gender">
        <div class="gamb">
				<label class="laki btn btn-primary">
				<img src="atribut/logo_bayi.png">
				</label>
        </div>

		</div>

		<div class="isian">
      <div class="inputan">

<label>
      <span>Pilih Kategori : </span>
     <select name="kategori" class="selectpicker show-menu-arrow" data-style="btn-info">
          <option value="">
            --Pilih Kategori Anak--
          </option>
          <option value="bayi">
            Bayi (0-12 Bulan)
          </option>
          <option value="anak">
            Anak-Anak (1-10 Tahun)
           
          </option>
        </select>
</label>
<label class="inputbox">
		
    <input type="text" name="berat"  required>
      <span>
    Berat Badan 
    </span>
    </label>

		<label class="inputbox">
			
			<input type="text" name="umur" required>
			<span>
      Umur  
      </span>
      </label>

        
     
      <input type="submit" name="submit" value="CEK IDEAL" id="submit">
			</div>

			<div class="poster">
				<img src="atribut/poster_anak.jpg">
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
      if (($_GET['umur']&&$_GET['kategori']&&$_GET['berat'])!="") {
      $umur=$_GET['umur'];
      $kategori=$_GET['kategori'];
      $berat=$_GET['berat'];
      if ($kategori=="bayi") {
        $ideal = ($umur/2)+4;
      }else{
        $ideal= 2*$umur +8;
      }
      if ($ideal<$berat) {
      $berat_ideal=$berat-$ideal;
      $berat_ideal1="Lebih ".$berat_ideal;
      }else{
        $berat_ideal=$ideal-$berat;
      $berat_ideal1="Kurang ".$berat_ideal;
      }

     ?>
     <p>
       Berat Badan : <?php echo "$berat kg";  ?>
     </p>
     <p>
       Umur : <?php echo "$umur Tahun";  ?>
     </p>
     <p>
       Berat Ideal : <?php echo "$ideal kg";  ?>
     </p>
     <p>
       Berat Anak : <?php echo "$berat_ideal1 kg";  ?>
     </p>
     
  </div>
<?php }else {?>
<script> alert ('Masukan Inputan dulu')</script>

<?php  }?>

<div class="bawah">
<img src="atribut/foot_bayi.png" style="width: 100%; height: 100px; margin-top: 50px;
">
</div>

<?php }?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
