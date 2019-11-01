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

<?php include '../nav/nav_hijau.php'; ?>
  	



  <div class="judul">
  <h2>Tips Untuk Kurus</h2>
  </div>
<div class="body">

  <div class="isi">
    <h2>
      Makanan
    </h2>
  <a href="makanan.php">
    <div class="container">
  <img src="gambar/makanan.png" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><p>Makanan yang tepat akan membantu anda<br> untuk
    mempercepat kenaikan badan</p></div>
  </div>
</a>

</div>
  </div>

  <div class="isi">
     <h2>
      Olahraga
    </h2>
  <a href="Olahraga.php">

<div class="container1">
  <img src="gambar/olahraga.jpg" alt="Avatar" class="image">
  <div class="overlay1">
    <div class="text1">Olahraga juga penting untuk orang kurus <br> 
    banyak olahraga yang baik untuk orang kurus</div>
  </div>
</div>
</a>
  </div>

  <div class="isi">
     <h2>
      Sering Makan
    </h2>
  <a href="makanan.php">

    <div class="container">
  <img src="gambar/sering.jpg" alt="Avatar" class="image">
    <div class="overlay">
    <div class="text">Sering Makan dengan porsi kecil</div>
  </div>
</div>
</a>
  </div>


</div>

<div class="body">
  <div class="isi">
    <h2>
      Jangan Lupa Makan Malam
    </h2>
  <a href="makanan.php">
    <div class="container">
  <img src="gambar/malam.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><p>Makan malam baik untuk menambah<br> Berat badan anda</p></div>
  </div>
</a>

</div>
  </div>

  <div class="isi">
     <h2>
      Tingkatkan Porsi Lauk
    </h2>
  <a href="Olahraga.php">

<div class="container1">
  <img src="gambar/lauk.jpg" alt="Avatar" class="image">
  <div class="overlay1">
    <div class="text1">Olahraga juga penting untuk orang kurus <br> 
    banyak olahraga yang baik untuk orang kurus</div>
  </div>
</div>
</a>
  </div>

  <div class="isi">
     <h2>
      Tidur yang Cukup
    </h2>
  <a href="makanan.php">

    <div class="container">
  <img src="gambar/tidur.jpg" alt="Avatar" class="image">
    <div class="overlay">
    <div class="text">Sering Makan dengan porsi kecil</div>
  </div>
</div>
</a>
  </div>


</div>


<div class="body">
  <div class="isi">
    <h2 style="font-size: 23px">
      Jangan Minum Air Sebelum Makan
    </h2>
  <a href="makanan.php">
    <div class="container">
  <img src="gambar/air.jpg" alt="Avatar" class="image">

  <div class="overlay">
    <div class="text"><p>Anda akan cepat kenyang dan kembung<br> apabila meminum air sebelum makan <br> membuat makan anda lebih sedikit</p></div>
  </div>
</a>

</div>
  </div>

  <div class="isi">
     <h2>
      Makan Teratur
    </h2>
  <a href="Olahraga.php">

<div class="container1">
  <img src="gambar/jam.jpg" alt="Avatar" class="image">
  <div class="overlay1">
    <div class="text1">Olahraga juga penting untuk orang kurus <br> 
    banyak olahraga yang baik untuk orang kurus</div>
  </div>
</div>
</a>
  </div>

  <div class="isi">
     <h2>
     Banyak Minum
    </h2>
  <a href="makanan.php">

    <div class="container">
  <img src="gambar/minum.jpg" alt="Avatar" class="image">
    <div class="overlay">
    <div class="text">Sering Makan dengan porsi kecil</div>
  </div>
</div>
</a>
  </div>


</div>
</body>

</html>


