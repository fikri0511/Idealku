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
<?php include '../nav/nav_hijau.php'; ?>

  <div class="judul">
  <h2>Olahraga Untuk Kurus</h2>
  </div>
<div class="body">
  <div class="isi">
    <h2>
      Angkat Beban
    </h2>
    <div class="container">
  <img src="gambar/olahraga/beban.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">mengencangkan otot-otot inti atau<br> core mucsles dan membantu <br>membangun massa otot
</div>
  </div>

</div>
  </div>

  <div class="isi">
     <h2>
      Push Up
    </h2>

<div class="container1">
  
  <img src="gambar/olahraga/push.gif" alt="Avatar" class="image">

  <div class="overlay1">
    <div class="text1">Selain melatih otot tubuh bagian atas,<br> latihan push up juga melatih kardiovaskularmu
</div>
  </div>
</div>
  </div>

  <div class="isi">
     <h2>
      Berenang
    </h2>

    <div class="container">
  <img src="gambar/olahraga/berenang.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Tak hanya meningkatkan kesehatan jantung,<br> berenang juga bermanfaat untuk otot tubuh.</div>
  </div>
</div>
  </div>


</div>


</body>

</html>


