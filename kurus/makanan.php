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
  <h2>Makanan Untuk Kurus</h2>
  </div>
<div class="body">
  <div class="isi">
    <h2>
      Daging Merah
    </h2>
    <div class="container">
  <img src="gambar/makanan/daging.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">makanan yang kaya akan nutrisi <br>seperti daging merah. <br>Daging yang <br>dimaksud ini bisa berupa daging sapi <br>ataupun kambing.

</div>
  </div>

</div>
  </div>

  <div class="isi">
     <h2>
      Alpukat
    </h2>

<div class="container1">
  <img src="gambar/makanan/alpukat.jpg" alt="Avatar" class="image">
  <div class="overlay1">
    <div class="text1">Alpukat menjadi salah satu <br>buah yang sangat baik<br> kamu konsumsi jika<br> ingin menambah berat badan.<br> Segelas jus alpukat ditambah <br>susu kental manis ataupun<br> gula bisa memberi asupan kalori yang<br> tinggi untuk tubuhmu!

</div>
  </div>
</div>
  </div>

  <div class="isi">
     <h2>
      Keju
    </h2>
    <div class="container">
  <img src="gambar/makanan/keju.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Olahan keju seperti martabak keju mozzarella<br>, cake dengan topping keju maupun<br> telur goreng yang ditambah keju <br>bisa menambah kalori tubuhmu.</div>
  </div>
</div>
  </div>


</div>

<div class="body">
  <div class="isi">
    <h2>
      Susu
    </h2>
    <div class="container">
  <img src="gambar/makanan/susu.jpeg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Meningkatkan asupan kalori<br> tubuh dapat dilakukan<br> dengan mengonsumsi susu full <br>cream setiap harinya. Kamu bisa <br>mengonsumsinya di pagi<br> maupun malam hari. Dengan begitu, <br>kalori dalam tubuhmu akan bertamba<br>h dan bisa bikin berat badanmu naik.

</div>
  </div>

</div>
  </div>

  <div class="isi">
     <h2>
      Roti
    </h2>

<div class="container1">
  <img src="gambar/makanan/roti.jpg" alt="Avatar" class="image">
  <div class="overlay1">
    <div class="text1">Roti gandum mengandung sekitar<br> 69 kalori baik dan sehat untuk tubuh. <br>Kalau kamu mau menambah berat badan, <br>kamu bisa konsumsi roti gandum<br> setiap harinya!

</div>
  </div>
</div>
  </div>

  <div class="isi">
     <h2>
      Kentang
    </h2>

    <div class="container">
  <img src="gambar/makanan/kentang.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Kentang mengandung protein yang tinggi.<br> Selain itu, kandungan serat dan vitamin<br> C dalam kentang juga melimpah. 

</div>
  </div>
</div>
  </div>


</div>


</body>

</html>


