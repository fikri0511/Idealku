<?php 
  //kode php disini
  require '../connect.php';
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
    <link rel="stylesheet" type="text/css" href="olahraga.css">

    <title></title>
  </head>
  <body>
    <!-- Navbar -->

  	<nav>
  		<ul id="atas">
  			<center>
  		
  		<li id="idealku">
        <img src="../atribut/logo.png" id="logo">

  			IDEALKU
      </li>
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
  <a class="navbar-brand" href="#"><img src="../atribut/ideal.png"></a>
    <li class="nav-item">
      <a class="nav-link" href="../landing.php">IDEAL</a>
    </li>
    </div>

    <div>
  <a class="navbar-brand" href="#"><img src="../atribut/bayi.png"></a>
    <li class="nav-item">
      <a class="nav-link" href="../bayi.php">BAYI</a>
    </li>
  </div>

  <div>
  <a class="navbar-brand" href="../ibu_hamil.php"><img src="../atribut/ibu.png"></a>
    <li class="nav-item">
      <a class="nav-link" href="../ibu_hamil.php">IBU HAMIL</a>
    </li>
  </div>

  <div>
  <a class="navbar-brand" href="../tips.php"><img src="../atribut/tips.png"></a>
    
    <li class="nav-item">
      <a class="nav-link" href="../tips.php">Tips & Trick</a>
    </li>
</div>

<div>
  <a class="navbar-brand" href="../video.php"><img src="../atribut/video.png"></a>

    <li class="nav-item">
      <a class="nav-link" href="../video.php">VIDEO</a>
    </li>
    </div>
  </ul>
</nav>

<div class="body">
  <div class="isi">
    <h2>
      Aerobik
    </h2>
    <div class="container">
  <img src="gambar/olahraga/aerobikk.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Olahraga aerobik ini yang akan <br> membantu meningkatkan fungsi <br> jantung dan membuat aliran <br> darah semakin lancar <br>
</div>
  </div>

</div>
  </div>

  <div class="isi">
     <h2>
      Jogging
    </h2>

<div class="container1">
  
  <img src="gambar/olahraga/joging.jpg" alt="Avatar" class="image">

  <div class="overlay1">
    <div class="text1">Jogging merupakan salah satu <br> olahraga yang baik untuk menjaga <br> berat badan agar tetap ideal</div>
  </div>
</div>
  </div>

  <div class="isi">
     <h2>
      Bersepeda
    </h2>

    <div class="container">
  <img src="gambar/olahraga/sepeda.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Manfaat bersepeda yang paling besar <br> adalah Pembakaran kalori <br> tentu saja sangat <br>baik untuk menjaga berat <br>badan tetap ideal.</div>
  </div>
</div>
  </div>

 

</div>


</body>

</html>


