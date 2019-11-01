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
  <h2>Tips Untuk Gemuk</h2>
  </div>
<div class="body">
  <div class="isi">
    <h2>
      Hindari makan lebih dari jam 6 sore
    </h2>
    <div class="container">
  <img src="gambar/diet/makan_sore.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Sarapan tentu membutuhkan porsi <br>yang lebih banyak sebagai asupan <br>energi kita selama seharian penuh,<br> begitu juga dengan makan siang.<br> Porsi makan siang harus lebih <br>sedikit daripada sarapan.<br> Begitu pula makan malam. <br>Karena aktivitas sudah selesai,<br> Anda tidak perlu mengonsumsi<br>makanan berat lagi.

</div>
  </div>

</div>
  </div>

  <div class="isi">
     <h2>
     Hindari makanan snack
    </h2>
<div class="container1">
  <img src="gambar/diet/snack.jpg" alt="Avatar" class="image">
  <div class="overlay1">
    <div class="text1">Hindarilah mengonsumsi makanan <br>dengan kandungan gula yang tinggi.<br>memiliki banyak risiko seperti diabetes,<br> kolesterol tinggi, kecanduan ingin makan manis,<br> Sobesitas, gigi berlubang<br> dan penyakit lainnya. <br>Hindari pula minuman<br> bersoda karena<br> dalam minuman bersoda<br> mengandung gula yang sangat tinggi.

</div>
  </div>
</div>
  </div>

  <div class="isi">
     <h2>
      Perbanyak minum air mineral
    </h2>
    <div class="container">
  <img src="gambar/diet/minum.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Air mineral penting bagi tubuh.<br>Air mineral membantu metabolisme tubuh,<br> meningkatkan kinerja ginjal,<br>membuang racun yang masuk dalam tubuh,<br> membuat kulit tampak lembut dan cerah,<br>dan membantu meningkatkan kinerja otak.</div>
  </div>
</div>
  </div>


</div>

<div class="body">
  <div class="isi">
    <h2>
      Yoga
    </h2>
    <div class="container">
  <img src="gambar/diet/yoga.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Yoga merupakan olahraga <br>yang memusatkan pada kekuatan,<br> dkelenturan, dan pernapasan. <br>Penelitian di India membuktikan yoga <br>sangat membantu menghilangkan gas <br> berlebih di perut, <br>sehingga melancarkan pencernaan<br> dan menghilangkan lemak di perut.
</div>
  </div>

</div>
  </div>

  <div class="isi">
     <h2>
      Aktif bergerak
    </h2>

<div class="container1">
  <img src="gambar/diet/bergerak.jpg" alt="Avatar" class="image">
  <div class="overlay1">
    <div class="text1">Anda termasuk orang yang <br>malas gerak atau mager.<br> Dari pada kemana-mana <br>menggunakan kendaraan bermotor, <br>mulailah berjalan kaki kemanapun. <br>Jangan cuma duduk diam di depan komputer<br> setiap harinya.

</div>
  </div>
</div>
  </div>

  <div class="isi">
     <h2>
      Sit-up dan push-up
    </h2>
    <div class="container">
  <img src="gambar/diet/situp.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Hal mudah lainnya yang bisa<br> dilakukan adalah sit-up dan push-up.<br> Namun tentu saja Anda harus<br>melakukannya secara rutin<br>untuk mendapatkan hasil yang maksimal.  

</div>
  </div>
</div>
  </div>


</div>


</body>

</html>


