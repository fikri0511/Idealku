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
    
    <link rel="stylesheet" type="text/css" href="tips.css">

<link rel="shortcut icon" href="atribut/logo.png">

    <title>Tips Hidup Sehat</title>
  </head>
  <body>
    <!-- Navbar -->

   <?php include 'nav_hijau.php'; ?>
  


<div class="body">

<div class="menu_atas">
   <div class="kurus">


    <h2>
      Kurus
    </h2>
<a href="kurus/menu.php">

    <img src="atribut/kurus.png">
</a>

  </div>

 <div class="kurus">


    <h2>
      Hamil
    </h2>
<a href="ibu/menu.php">

    <img src="atribut/ibu_ibu.png">
</a>

  </div>

 <div class="gemuk">


    <h2>
      Gemuk
    </h2>
<a href="gemuk/diet.php">

    <img src="atribut/gemuk.png">
</a>

  </div>
</div>

<div class="tips">
  <h1>
    Tips Pola Hidup Sehat
  </h1>
  <div class="tips_atas">
    <div class="gambar">
      <img src="atribut/tips.jpg" alt="gambar">
    </div>
    <div class="judul_kesehatan">
      <h2>
        Tips Hidup,Sehat
      </h2>
      <h3>
        Ini judul untuk tipsnya 
      </h3>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque id aspernatur, repellendus veritatis at tempore rem iure dolorum est sit natus, ex hic! In, atque illum alias asperiores cumque earum.
      </p>
      <a href="tips2.php">
        Selengkapnya disini --->
      </a>
    </div>
  </div>
  
  <div class="tips_bawah">
    <div class="tips_kecil">
      <img src="atribut/squat.gif" alt="squat">
      <h4>
        Ini judul untuk tips nya 
      </h4>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum autem inventore veniam, sapiente modi aspernatur est eaque officiis quia? Corporis, et? Sint omnis est corrupti accusantium id quae vero dolores.</p>
    </div>
    
    <div class="tips_kecil">
      <img src="atribut/squat.gif" alt="squat">
      <h4>
        Ini judul untuk tips nya 
      </h4>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum autem inventore veniam, sapiente modi aspernatur est eaque officiis quia? Corporis, et? Sint omnis est corrupti accusantium id quae vero dolores.</p>
    </div>

    <div class="tips_kecil">
      <img src="atribut/squat.gif" alt="squat">
      <h4>
        Ini judul untuk tips nya 
      </h4>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum autem inventore veniam, sapiente modi aspernatur est eaque officiis quia? Corporis, et? Sint omnis est corrupti accusantium id quae vero dolores.</p>
    </div>

  </div>
</div>

  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>