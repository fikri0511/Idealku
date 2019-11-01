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
      Memilih Makanan Sehat
    </h2>
  <a href="makanan.php">
    <div class="container">
  <img src="sehat.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><p>Pilihlah buah dan sayuran yang<br> segar. Konsumsi <br>roti dan sereal yang<br> berbahan dasar gandum, <br>yang dapat membantu dan <br>menjaga pencernaan Anda <br>karena tinggi akan serat. </p></div>
  </div>
</a>

</div>
  </div>

  <div class="isi">
     <h2>
      Menghindari makanan instan
    </h2>
  <a href="makanan.php">

<div class="container1">
  <img src="olah.jpg" alt="Avatar" class="image">
  <div class="overlay1">
    <div class="text1">Makanan dan minuman dalam <br>kemasan biasanya mengandung <br>gula buatan yang tinggi. Sangat <br>tidak dianjurkan untuk<br> mengonsumsi makanan ringan<br> dalam jumlah yang banyak </div>
  </div>
</div>
</a>
  </div>

  <div class="isi">
     <h2>
    Perhatikan kalori makanan
    </h2>
  <a href="makanan.php">

    <div class="container">
  <img src="hitung.jpg" alt="Avatar" class="image">
    <div class="overlay">
    <div class="text">Perhatikan kalori yang <br>dikonsumsi setiap makan, Anda<br> akan cenderung memilih yang <br>rendah kalori dan tidak makan <br>berlebihan. Hindari junk food,<br> lebih baik makanan<br> seperti salad, sayuran, <br>atau sup.</div>
  </div>
</div>
</a>
  </div>


</div>

<div class="body">
  <div class="isi">
    <h2>
     Memasak di rumah 
    </h2>
  <a href="makanan.php">
    <div class="container">
  <img src="rumah.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><p>Jangan gunakan minyak <br>banyak saat memasak di <br>rumah, Masak dengan cara <br>menumis, merebus, atau dengan<br> steam,lebih baik <br>dibandingkan dengan <br>menggoreng.</p></div>
  </div>
</a>

</div>
  </div>

  <div class="isi">
     <h2>
      Olahraga rutin
    </h2>
  <a href="Olahraga.php">

<div class="container1">
  <img src="olahraga.jpg" alt="Avatar" class="image">
  <div class="overlay1">
    <div class="text1">Walaupun sedang hamil, bukan<br> berarti Anda tidak bisa<br> melakukan olahraga. Anda dapat<br> melakukan olahraga yang aman<br> seperti berjalan santai,<br> berenang, atau pun yoga <br>khusus untuk ibu hamil.</div>
  </div>
</div>
</a>
  </div>

</div>



</body>

</html>