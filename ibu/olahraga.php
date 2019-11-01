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

  	<?php include '../nav/nav_pink.php'; ?>

<div class="body">
  <div class="isi">
    <h2>
      Senam Jongkok
    </h2>
    <div class="container">
  <img src="jongkok.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Gerakan senam jongkok <br>bisa memperkuat otot di <br>sekitar panggul dan paha, <br>sehingga berguna untuk<br> memperlancar proses persalinan.
</div>
  </div>

</div>
  </div>

  <div class="isi">
     <h2>
      Yoga Kupu-kupu
    </h2>

<div class="container1">
  
  <img src="kupu.jpg" alt="Avatar" class="image">

  <div class="overlay1">
    <div class="text1">Senam hamil pose <br>kupu-kupu untuk<br> melatih otot paha d<br>an mengurangi resiko<br> sakit punggung yang<br> sering dialami oleh <br>ibu hamil.
</div>
  </div>
</div>
  </div>

  <div class="isi">
     <h2>
      Gerakan Duduk Bersila
    </h2>

    <div class="container">
  <img src="sila.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Senam hamil berguna<br> untuk mengencangkan otot <br>sekaligus mencegah stres <br>selama kehamilan. </div>
  </div>
</div>
  </div>
</div>



</body>

</html>


