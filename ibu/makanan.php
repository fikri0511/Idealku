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
 <?php include '../nav/nav_pink.php'; ?>

<div class="body">
  <div class="isi">
    <h2>
      Kacang-kacangan
    </h2>
    <div class="container">
  <img src="kacang.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"> jenis kacang-kacangan yang <br>bisa dijadikan sumber asam<br> folat, serat, protein, zat besi,<br> dan kalsium yang diperlukan <br>tubuh selama kehamilan. ini<br> dapat mencegah risiko beberapa <br>kondisi cacat lahir dan <br>penyakit pada bayi ketika lahir.  

</div>
  </div>

</div>
  </div>

  <div class="isi">
     <h2>
      Ubi
    </h2>

<div class="container1">
  <img src="ubi.png" alt="Avatar" class="image">
  <div class="overlay1">
    <div class="text1">Ubi merupakan salah satu <br>makanan sehat untuk ibu. Vitamin <br>A pada sayuran dan umbi-umbian<br> penting untuk pertumbuhan dan<br> perkembangan sel pada janin <br>yang sedang tumbuh.

</div>
  </div>
</div>
  </div>

  <div class="isi">
     <h2>
      Ikan Salmon
    </h2>
    <div class="container">
  <img src="salmon.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"> Ikan salmon mengandung <br>asam lemak omega-3 <br>seperti EPA dan DHA,<br> penting untuk perkembangan<br> otak dan mata pada bayi<br> yang sedang tumbuh. <br>
    </div>
  </div>
</div>
  </div>


</div>

<div class="body">
  <div class="isi">
    <h2>
      Telur
    </h2>
    <div class="container">
  <img src="telur.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Telur bagus untuk meningkatkan<br> asupan gizi secara keseluruhan.<br> Di dalam telur juga terdapat <br>kolin, yaitu nutrisi penting<br> untuk kesehatan otak dan<br> perkembangan janin.

</div>
  </div>

</div>
  </div>

  <div class="isi">
     <h2>
      Brokoli & Sayuran Hijau
    </h2>

<div class="container1">
  <img src="brokoli.jpg" alt="Avatar" class="image">
  <div class="overlay1">
    <div class="text1">Brokoli dan sayuran berdaun hijau,<br> biasanya banyak mengandung <br>sebagian besar nutrisi yang<br> dibutuhkan ibu hamil.<br> Nutrisi yang terkandung pada<br> sayuran antara lain seperti<br> vitamin C, vitamin K, vitamin A, <br>kalsium, zat besi, folat, dan kalium. 
</div>
  </div>
</div>
  </div>

  <div class="isi">
     <h2>
      Air Putih
    </h2>

    <div class="container">
  <img src="air.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Air merupakan salah satu hal yang <br>harus banyak dikonsusmi selama hamil. <br> volume darah ibu hamil akan<br> meningkat hingga 1,5 liter.

</div>
  </div>
</div>
  </div>


</div>


</body>

</html>


