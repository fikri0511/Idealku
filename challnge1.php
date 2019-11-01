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
    <link rel="stylesheet" type="text/css" href="challnge1.css">

    <title></title>
  </head>
  <body>
    <!-- Navbar -->

  	<nav>
  		<ul id="atas">
  			<center>
  		
  		<li id="idealku">
        <img src="atribut/logo.png" id="logo">

  			IDEALKU
  		</li>
  		<li id="login" >
  	 <?php
        if (empty($_SESSION['user'])) {
       
      ?>
     <li id="login" >
        <a href="login.php"> LOGIN</a>
      </li>
      <li id="daftar">
        <a href="register.php"> DAFTAR</a>
      </li>
        <?php
        }
else{

      ?>
        <li id="daftar">
        <a href="profil.php">
        <?php  
          include 'config.php';
            $user = $_SESSION["user"];

            $query_data = "SELECT foto from profil where username='$user'";
          $hasil_data= mysqli_query($conn,$query_data);
            foreach ($hasil_data as $value) {
                $foto=$value['foto'];
            }  

          ?>

      <?php if (empty($foto)) {
       ?>
       <img src="atribut/laki1.png">
      <?php }else{ ?>

       <img src="profil/image/<?php echo $foto ?>">

      <?php } ?>
        </a>
      </li>
      <li id="daftar">
      
        <a  href="logout.php" role="button" 
  onclick="return confirm('yakin akan logout ?')">Logout</a>
      </li>
      
        
      <?php
    }
      ?>
  		</center>

  		</ul>
  	</nav>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm justify-content-center menu">
  <!-- Brand/logo -->
  
  <!-- Links -->

   <ul class="navbar-nav ">
    <div>
  <a class="navbar-brand" href="#"><img src="atribut/ideal.png"></a>
    <li class="nav-item">
      <a class="nav-link" href="landing.php">IDEAL</a>
    </li>
    </div>

    <div>
  <a class="navbar-brand" href="#"><img src="atribut/bayi.png"></a>
    <li class="nav-item">
      <a class="nav-link" href="bayi.php">BAYI</a>
    </li>
  </div>

  <div>
  <a class="navbar-brand" href="ibu_hamil.php"><img src="atribut/ibu.png"></a>
    <li class="nav-item">
      <a class="nav-link" href="ibu_hamil.php">IBU HAMIL</a>
    </li>
  </div>

  <div>
  <a class="navbar-brand" href="tips.php"><img src="atribut/tips.png"></a>
    
    <li class="nav-item">
      <a class="nav-link" href="tips.php">Tips & Trick</a>
    </li>
</div>

<div>
  <a class="navbar-brand" href="video.php"><img src="atribut/video.png"></a>

    <li class="nav-item">
      <a class="nav-link" href="video.php">VIDEO</a>
    </li>
    </div>

  </ul>
</nav>

<!-- BOdy  -->
<div class="body">

<div class="gambar">
  <p>
    Push Up
  </p>
  <img src="atribut/pushup.gif">
  <p>20x</p>
</div>

<div class="gambar">
  <p>
    Bcyle slow
  </p>
  <img src="atribut/sepeda.gif">
  <p>20x</p>
</div>

<div class="gambar">
  <p>
    Bycle fast
  </p>
  <img src="atribut/mountain.gif">
  <p>20x</p>
</div>

<div class="gambar">
  <p>
    Splank
  </p>
  <img src="atribut/splank.gif">
  <p>20x</p>
</div>
<h3>
  <a href="video.php">
  Selesai 
  
</a>
</h3>
  
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
