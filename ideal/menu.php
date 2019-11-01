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
    <link rel="stylesheet" type="text/css" href="menu.css">

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
      Makan dengan tepat waktu
    </h2>
  <a href="makanan.php">
    <div class="container">
  <img src="gambar/makanansehat.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><p>Makan makanan dengan tepat waktu <br> juga  membantu agar tubuh tetap ideal</p></div>
  </div>
</a>

</div>
  </div>

  <div class="isi">
     <h2>
      Banyak bergerak dan olahraga
    </h2>
  <a href="Olahraga.php">

<div class="container1">
  <img src="gambar/olahragasehat.jpg" alt="Avatar" class="image1">
  <div class="overlay1">
    <div class="text1">Olahraga juga sangat penting untuk <br> 
    menjaga agar tubuh tetap ideal</div>
  </div>
</div>
</a>
  </div>

  <div class="isi">
     <h2>
       Konsumsi protein yang cukup
    </h2>
  <a href="makanan.php">

    <div class="container">
  <img src="gambar/protein.jpg" alt="Avatar" class="image2">
    <div class="overlay">
    <div class="text">Protein merupakan salah satu zat yang <br> membantu agar tubuh tetap ideal</div>
  </div>
</div>
</a>
  </div>


</div>

<div class="body">
  <div class="isi">
    <h2>
      Makan makanan yang kaya akan serat
    </h2>
  <a href="makanan.php">
    <div class="container">
  <img src="gambar/serat.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><p>Makanan berserat juga baik untuk <br> menjaga berat badan agar tetap ideal</p></div>
  </div>
</a>
  
</div>
  </div>

  <div class="isi">
     <h2>
      Pola tidur dan istirahat yang cukup
    </h2>
  <a href="Olahraga.php">

<div class="container1">
  <img src="gambar/tidursehat.jpg" alt="Avatar" class="image1">
  <div class="overlay1">
    <div class="text1">Pola hidup yang sehat berhubungan <br> 
    dengan pola tidur yang cukup</div>
  </div>
</div>
</a>
  </div>
    
  <div class="isi">
     <h2>
       Selalu berpikir positif hindari stress
    </h2>
  <a href="olahraga.php">

    <div class="container">
  <img src="gambar/positif.jpg" alt="Avatar" class="image2">
    <div class="overlay">
    <div class="text">Selalu berpikir positif dan hindari stress <br> agar berat badan kita tetap ideal</div>
  </div>
</div>
</a>
  </div>


</div>


<div class="body">
  <div class="isi">
    <h2>
      Minum air putih yang cukup
    </h2>
  <a href="makanan.php">
    <div class="container">
  <img src="gambar/minumsehat.jpg" alt="Avatar" class="image">

  <div class="overlay">
    <div class="text"><p>Minum air putih yang cukup<br> agar tubuh tetap fit dan selalu ideal</p></div>
  </div>
</a>

</div>
  </div>

  <div class="isi">
     <h2>
      Perhatikan makan malam anda
    </h2>
  <a href="makanan.php">

<div class="container1">
  <img src="gambar/makananmalam.jpg" alt="Avatar" class="image1">
  <div class="overlay1">
    <div class="text1">Dimalam hari tubuh butuh istirahat <br> 
    yang cukup agar tetap dalam keadaan fit</div>
  </div>
</div>
</a>
  </div>

  <div class="isi">
     <h2>
     Mengkonsumsi karbohidrat yang cukup
    </h2>
  <a href="makanan.php">

    <div class="container">
  <img src="gambar/karbo.jpg" alt="Avatar" class="image2">
    <div class="overlay">
    <div class="text">Karbohidrat juga sangat membantu dalam <br> menjaga agar tubuh tetap ideal</div>
  </div>
</div>
</a>
  </div>


</div>
</body>

</html>


