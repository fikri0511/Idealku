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
    <script src="jquery-3.4.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="landing2.css">
    <title>Ideal Umum</title>

     <script>
    var modal = document.getElementById('login');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    var modal = document.getElementById('register');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";

            }
        }
    </script>

  </head>
  <body>
   <?php include 'nav_hijau.php'; ?>

<div class="body">
	<div class="judul">
		<img src="atribut/logo.png">
		<h1>
			IDEAL UMUM
		</h1>
    <?php include 'config.php';?>

	</div>

  <!-- Form nya  -->
	<form method="GET">

	<div class="hitung">

		<div class="gender">
<h2>
  Pilih Jenis Kelamin
 

</h2>
				<label class="laki btn btn-info">
				<img src="atribut/laki1.png">
				<span>Laki-Laki</span>
				<input type="radio" name="jenis" value=1 required>
				</label>

				<label class="perempuan btn btn-info">
				<img src="atribut/perempuan1.png">
				<span>Perempuan</span>
				<input type="radio" name="jenis" value='p'>
				</label>

		</div>
    
		<div class="isian">

			<div class="inputan">
			<label class="inputbox">
		
			<input type="text" name="berat"  autocomplete="off" required>
        <span>
      Berat Badan 
      </span>
			</label>

			<label class="inputbox">
			
			<input type="text" name="tinggi" autocomplete="off" required>
			<span>
      Tinggi Badan  
      </span>
      </label>

			<label class="inputbox">
			
			<input type="text" name="umur" autocomplete="off" required>
			<span>
      Umur  
      </span>
      </label>
      <label>
      <select class="selectpicker show-menu-arrow" data-style="btn-info" name="aktivitas"  required >
        <option value="">
          --Pilih Aktivitas--
        </option>
        
        <option value=1>
          Kurang Aktif
        </option>
        
        <option value=2>
          Cukup Aktif
        </option>
        
        <option value=3>
          Aktif 
        </option>

        <option value=4>
         Sangat Aktif 
        </option>

      </select></label>
      
      <input type="submit" name="submit" value="CEK IDEAL" id="submit" onclick="document.getElementById('register').style.display='flex'" class="dropdown">


			</div>

			<div class="poster">
				<img src="atribut/poster.png">
			</div>
		</div>

	</div>



	</form>
 <?php
  if (isset($_GET['submit'])) {
    
  ?>
  <h1 onclick="document.getElementById('register').style.display='flex'" class="dropdown ceklah">
    Cek Ideal Anda Disini 
  <?php }?>
  </h1>
</div>

  <?php
  if (isset($_GET['submit'])) {

  ?>
       
      

    <?php 
      if (($_GET['berat']&&$_GET['tinggi']&&$_GET['umur']&&$_GET['aktivitas']&&$_GET['jenis'])!="") {
  $aktivitas=$_GET['aktivitas'];
 $berat= $_GET['berat'];
  $tinggi=$_GET['tinggi'];
  $umur=$_GET['umur'];
  $gender = $_GET['jenis'];

  if ($gender=='p') {
    $gender=0;
  }

  $tinggi1=$tinggi/100;
  $tinggii=$tinggi-100;

  $BMI = $berat/(($tinggi1*$tinggi1));
  $lemak = (1.20 *$BMI)+(0.23*$umur);
// Hitung BMI
if ($BMI<18.5) {
    $BMI_hasil = "Kurus";
 }elseif ($BMI>=18.5 && $BMI<=24.9) {
  $BMI_hasil = "Normal";
 }elseif ($BMI>=25&&$BMI<=29.9) {
    $BMI_hasil="Gemuk";
 }elseif ($BMI>=30&&$BMI<=34.9) {
    $BMI_hasil="Obesitas 1";
 }elseif ($BMI>=35&&$BMI<=39.9) {
    $BMI_hasil="Obesitas 2";
 }elseif ($BMI>=40) {
    $BMI_hasil="Obesitas 3";
 }

// Hitung IDEAL
 if ($gender==1) {
  $berat_ideal = $tinggii - ($tinggii*10/100);
 }elseif ($gender==0) {
  $berat_ideal = $tinggii - ($tinggii*15/100);
 }

// Hitung Lemak
  if ($gender==1) {
    $hasil_lem = $lemak -10.8-5.4;
    $hasil_lemak=number_format($hasil_lem,2);
 }elseif ($gender==0) {
    $hasil_lem = $lemak -5.4;
    $hasil_lemak=number_format($hasil_lem,2);

   }
// Kelamin
   if ($gender==1) {
    $kelamin="Laki-Laki";
   }else{
    $kelamin="Perempuan";
   }
// Hitung Kalori 
   if ($gender==1) {
    $kalori= 88.362 +(13.397*$berat) + 4.799*$tinggi-5.677*$umur;
   }else{
    $kalori= 447.6 +(9.24*$berat) + 3.1*$tinggi-4.33*$umur;
   }
   if ($aktivitas==1) {
    $hasil_kalori = $kalori *1.2;
   }elseif ($aktivitas==2) {
    $hasil_kalori = $kalori *1.375;
   }elseif ($aktivitas==3) {
    $hasil_kalori = $kalori *1.55;
   }elseif ($aktivitas==4) {
    $hasil_kalori = $kalori *1.725;
   }
    $hasil_kalorinya=number_format($hasil_kalori,2);

     ?>
     <div class="register_bg" id="register">
        <div class="register_konten animasi">
  <div class="hasil">
      <div onclick="document.getElementById('register').style.display='none'" class="tutup">+</div>

    <h2>
      Hasil BMI anda : 
    </h2>
        <?php
        if (!empty($_SESSION['user'])) {
        
          
      ?>
     <p>
       Nama : <?php echo $_SESSION["user"]; ?>
     </p>
   <?php }?>

     
     <p>
       Berat Badan : <?php echo "$berat kg";  ?>
     </p>
     <p>
       Tinggi Badan : <?php echo "$tinggi cm";  ?>
     </p>
     <p>
       Umur : <?php echo "$umur Tahun";  ?>
     </p>
     <p>
       Jenis Kelamin : <?php echo "$kelamin ";  ?>
     </p>
     <p>
       BMI : <?php echo "$BMI_hasil ";  ?>
     </p>
     <p>
       Berat Ideal : <?php echo "$berat_ideal kg";  ?>
     </p>
     <p>
       Lemak dalam Tubuh : <?php echo "$hasil_lemak %";  ?>
     </p>
     <p>
       Kebutuhan Kalori Perhari : <?php echo "$hasil_kalorinya ";  ?>
     </p>
     <?php if ($BMI_hasil=="Kurus") {
      ?>
      <h3>
        Wahh Badan Anda Terlalu Kurus
      </h3>
     <a href="kurus/menu.php">Kami menyarankan klik disini---></a>
   <?php }  elseif($BMI_hasil=="Normal") {
      ?>
      <h3>
        Wahh Badan Anda Normal Pertahankan!
      </h3>
     <a href="ideal/menu.php">Pertahankan Berat Badanmu disini ---></a>
   <?php }else {
      ?>
      <h3>
        Wahh Badan Anda Terlalu Gemuk
      </h3>
        
     <a href="gemuk/diet.php">Kami menyarankan klik disini---></a>
     <?php }
   if (!empty($user)) {
     # code...


          $query_data = "SELECT * from profil where username='$user'";
          $hasil_data= mysqli_query($conn,$query_data);
            foreach ($hasil_data as $value) {
                $gender_data=$value['jenis_kelamin'];
                $umur_data=$value['umur'];
            }  
   }
            

        if (!empty($user)&&$gender_data==$gender&&$umur_data==$umur) {
   ?>
     <h2>Kirim Data Mu Kesini</h2>

      <form method="post">
     <input type="submit" name="kirim" value="kirim">
     </form>
    <?php  }else{
      echo "";
    } ?>

 

    </div></div>
      
  </div>
<?php }else {?>
<script> alert ('Masukan Inputan dulu')</script>

<?php  }?>

<div class="bawah">
<img src="atribut/foot.png" style="width: 100%; height: 100px; margin-top: 50px;">
</div>

<?php }?>

<?php
        include ("config.php");
        if (isset($_POST['kirim'])) {
            $user = $_SESSION["user"];
$query="INSERT into laporan values('$berat','$aktivitas','$tinggi','$user',null)";

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
 <div id="akhir">
 </div>



        <!-- JS Back to top -->
    <script type="text/javascript">
        var $backToTop = $(".backTop");
        $backToTop.hide();
        $(window).on('scroll', function() {
          if ($(this).scrollTop() > 100) {
            $backToTop.fadeIn();
          } else {
            $backToTop.fadeOut();
          }
        });
    
        $backToTop.on('click', function(e) {
          $("html, body").animate({scrollTop: 0}, 500);
        });
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
          $('#akhir').load(#register)

      })


    </script>



    <!-- JS Back to top -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
