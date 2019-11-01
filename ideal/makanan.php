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
      Apel
    </h2>
    <div class="container">
  <img src="gambar/makanan/apell.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Apel adalah serat yang mudah diolah <br>dan juga dapat memerangi kolestrol. <br>Apel juga bagus untuk sumber <br>vitamin maka dari itu apel baik untuk <br> menjaga tubuh tetap ideal.
</div>
  </div>

</div>
  </div>

  <div class="isi">
     <h2>
      Bluberry
    </h2>

<div class="container1">
  <img src="gambar/makanan/berry.jpg" alt="Avatar" class="image">
  <div class="overlay1">
     <div class="text">Blueberry kaya serat,vitamin <br>Tipe berry yang lain dapat <br>juga jadi pilihan yang <br>sama bagusnya. Dimakan saat masih <br> segar dan bagus untuk kesehatan.
  </div>
  </div>
  </div>
  </div>

  <div class="isi">
     <h2>
      Bayam
    </h2>
    <div class="container">
  <img src="gambar/makanan/bayamm.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Bayam bermanfaat untuk tubuh <br>lantaran kaya zat besi <br>magnesiium dan vitamin A <br>Selain itu juga terdapat vitamin C <br> yang baik untuk tubuh ideal.</div>  
  </div>
</div>
  </div>


</div>

<div class="body">
  <div class="isi">
    <h2>
      Brokoli
    </h2>
    <div class="container">
  <img src="gambar/makanan/brokoli.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"> Brokoli adalah sumber kalsium, <br>potassium, dan vitamin A serta C. <br>.Untuk memperoleh hasil paling baik  <br>janganlah masak terlampau matang serta <br>jauhi menggunakan saus dan keju terlalu <br> berlebih.

</div>
  </div>

</div>
  </div>

  <div class="isi">
     <h2>
      Tuna
    </h2>

<div class="container1">
  <img src="gambar/makanan/tuna.jpg" alt="Avatar" class="image">
  <div class="overlay1">
    <div class="text1"> Tuna adalah makanan rendah kalori<br> dan tinggi protein lainnya. <br> Ikan tuna tanpa lemak,<br>artinya itu rendah lemak.<br>

</div>
  </div>
</div>
  </div>

  <div class="isi">
     <h2>
      Kacang-kacangan
    </h2>

    <div class="container">
  <img src="gambar/makanan/kacang.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Kacang-kacangan kaya akan serat<br> dan protein yang bisa membantu menjaga <br> berat badan kamu tetap ideal.
</div>
  </div>
</div>
  </div>


</div>


</body>

</html>


