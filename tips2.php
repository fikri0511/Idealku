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
    <link rel="stylesheet" type="text/css" href="landing2.css">

    <link rel="stylesheet" type="text/css" href="baru.css">


    <title></title>
  </head>
  <body>
    <!-- Navbar -->

      <nav>
      <ul id="atas">
        <center>
      
      <li id="idealku">
        <img src="atribut/logo.png" id="logo">

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
  <a class="navbar-brand" href="#"><img src="atribut/ideal.png"></a>
    <li class="nav-item">
      <a class="nav-link" href="landing.php">IDEAL</a>
    </li>
    </div>

    <div>
  <a class="navbar-brand" href="#"><img src="atribut/bayi.png"></a>
    <li class="nav-item">
      <a class="nav-link" href="bayi.php">BAYI</a>
    </li>
  </div>

  <div>
  <a class="navbar-brand" href="ibu_hamil.php"><img src="atribut/ibu.png"></a>
    <li class="nav-item">
      <a class="nav-link" href="ibu_hamil.php">IBU HAMIL</a>
    </li>
  </div>

  <div>
  <a class="navbar-brand" href="tips.php"><img src="atribut/tips.png"></a>
    
    <li class="nav-item">
      <a class="nav-link" href="tips.php">Tips & Trick</a>
    </li>
</div>

<div>
  <a class="navbar-brand" href="video.php"><img src="atribut/video.png"></a>

    <li class="nav-item">
      <a class="nav-link" href="video.php">VIDEO</a>
    </li>
    </div>

  </ul>
</nav>
<div class="body2 container">

  <!-- <div class="banner col-md-12 col-lg-12 col-sm-12">
    <div class="judul">
      <img src="atribut/logo.png">
      <h1>
        IDEAL UMUM
      </h1>
    </div>  
  </div> -->

  <!-- video 1 -->
  <div class="content row">
    <div class="artikel col-md-8 col-lg-8">
        <div class="title row">
          <h3 style="text-align: left;">5 Gerakan Sederhana yang Membuat Otot Bagian Bawah Lebih Kekar</h3>
        </div>
        <div class="konten">
          <img class="gambar" src="https://hellosehat.com/wp-content/uploads/2019/02/gerakan-olahraga-peregangan-membentuk-otot-tubuh-bawah.jpg">
          <p>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <h4>Kenapa otot tubuh bagian bawah perlu dibentuk?</h4>
          <img class="gambar" src="https://hellosehat.com/wp-content/uploads/2018/08/shutterstock_406642087-700x467.jpg">
                <p>
            Kalau diperhatikan, kebanyakan orang yang hobi fitnes menghabiskan waktu yang lebih lama untuk melatih otot-otot bagian atas tubuh. Mulai dari dada, bahu, serta punggung. Hanya segelintir dari mereka yang fokus membentuk otot tubuh bagian bawah.<br>
                <br>
            Ya, selain otot tubuh bagian atas, penting juga bagi Anda untuk membentuk otot tubuh bagian bawah. Mulai dari paha depan, paha belakang, betis, dan otot gluteal yang berada di bokong. Tentu akan terlihat aneh jika Anda sudah mempunyai dada yang bidang dan bahu yang lebar, tapi ukuran betis dan pahanya terlalu kecil atau besar.<br>
                <br>
            Bukan hanya penting bagi penampilan, memiliki otot tubuh bagian bawah yang kuat juga dapat mendukung aktivitas Anda sehari-hari. Baik untuk berjalan, melompat, naik tangga, bersepeda, dan aktivitas harian lainnya.s
                </p>
            <h4>Gerakan untuk membentuk otot tubuh bagian bawah</h4>
            <p>Otot-otot tubuh bagian bawah, terutama di paha, memiliki massa otot yang lebih banyak dibandingkan bagian tubuh lainnya. Karena itulah, Michael J. Joyner, MD, seorang ahli fisiologi dari Mayo Clinic, mengungkapkan bahwa diperlukan latihan ketahanan untuk membakar lebih banyak kalori dalam tubuh, khususnya di bagian kaki.<br>
              <br>
            Semakin banyak massa otot yang terbakar, maka kalori yang terbakar pun akan semakin banyak. Tenang, Anda tak perlu repot-repot melakukan olahraga yang berat, kok!<br>
              <br>
            Yuk, praktikkan gerakan sederhana berikut ini yang dapat membentuk otot tubuh bagian bawah, yaitu:</p>
          
            
            <ol>
              <li>
                <h5>Jogging</h5>
                <img class="gambar" src="https://hellosehat.com/wp-content/uploads/2016/06/8-Kesalahan-Saat-Lari-atau-Jogging-700x467.jpg">
                <p>Tak hanya sekadar jadi bagian pemanasan, jogging juga bisa membentuk otot tubuh bagian bawah, lho! Pasalnya, gerakan ini melibatkan otot-otot di sepanjang kaki, mulai dari paha depan, paha belakang, pangkal paha, hingga betis.<br>
                  <br>
                Perlu dicatat juga bahwa kaki dan bokong adalah dua bagian tubuh yang mempunyai kelompok otot terbesar. Karena itulah, Anda tentu membutuhkan lebih banyak energi supaya tidak cepat lelah setelah olahraga. Caranya adalah dengan mengonsumsi makanan dan minuman yang tepat sebelum olahraga.<br>
                  <br>
                Seorang ahli gizi olahraga, Penny Hunking, menyarankan Anda untuk minum jus dulu sebelum mulai latihan. Supaya lebih sehat, buatlah jus buah sendiri dengan mencampurkan jus apel, susu skim, yogurt bebas lemak, dan buah beri. Minuman ini dijamin bisa bikin Anda jadi lebih semangat dan bertenaga sebelum olahraga.</p>
              </li>
              <li>
                <h5>Side lunge</h5>
                <img class="gambar" src="https://hellosehat.com/wp-content/uploads/2019/02/79821362d34feae51815d7cf1735e0f0.gif?x54339">
                  <p>Gerakan yang satu ini efektif untuk melatih kekuatan otot-otot kaki, mulai dari paha hingga betis. Sebelum memulainya, siapkan dulu 2 buah dumbbell untuk menjaga keseimbangan sekaligus membentukgencangkan otot tangan.<br></p>

                Caranya:
                  <br>
                  <ol type="1">
                    <li>Lebarkan kedua kaki hingga sejajar dengan bahu. Lalu, masing-masing tangan memegang satu dumbbell.</li>
                    <li>Langkahkan kaki kanan ke depan, kemudian tekuk lutut membentuk sudut 90 derajat. Tahan selama 2 detik. Rasakan otot-otot di bagian perut hingga seluruh bagian kaki mengencang.</li>
                    <li>Mundur kembali dan kembali ke posisi awal.</li>
                    <li>Lakukan hal yang sama pada kaki kiri. Ulangi sebanyak 8-12 kali untuk masing-masing kaki.</li>
                  </ol>
              </li>

              <li>
                <h5>Squat</h5>
                <img class="gambar" src="https://media.self.com/photos/59f24377c308b12c3999b2b8/master/w_728,c_limit/bodyweight.gif">
                    <p>Dilansir dari WebMD, squat adalah latihan paling umum untuk membangun otot paha dan mengencangkan pantat. Akan tetapi, gerakan ini harus dilakukan dengan hati-hati untuk menghindari cedera lutut. <br>
                    Begini cara aman melakukan squat untuk membentuk otot tubuh bagian bawah:</p>
                  <ol type="1">
                    <li>Berdiri dengan kaki selebar bahu. Posisi tangan bisa lurus ke depan atau berada di depan dada dan dikepal.</li>
                    <li>Jongkok hingga lutut membentuk sudut 90 derajat. Tahan selama 4 detik, lalu kembali ke posisi berdiri.</li>
                    <li>Lakukan sebanyak 10 kali dan rasakan perubahannya pada otot-otot kaki dan bokong Anda.</li>
                  </ol>
              </li>

              <li>
                <h5>Squat</h5>
                <img class="gambar" src="https://media.self.com/photos/59f24377c308b12c3999b2b8/master/w_728,c_limit/bodyweight.gif">
                    <p>Dilansir dari WebMD, squat adalah latihan paling umum untuk membangun otot paha dan mengencangkan pantat. Akan tetapi, gerakan ini harus dilakukan dengan hati-hati untuk menghindari cedera lutut. <br>
                    Begini cara aman melakukan squat untuk membentuk otot tubuh bagian bawah:</p>
                  <ol type="1">
                    <li>Berdiri dengan kaki selebar bahu. Posisi tangan bisa lurus ke depan atau berada di depan dada dan dikepal.</li>
                    <li>Jongkok hingga lutut membentuk sudut 90 derajat. Tahan selama 4 detik, lalu kembali ke posisi berdiri.</li>
                    <li>Lakukan sebanyak 10 kali dan rasakan perubahannya pada otot-otot kaki dan bokong Anda.</li>
                  </ol>
              </li>
              
              <li>
                    <h5>Squat jump</h5>
                <img class="gambar" src="https://media.self.com/photos/59f2437b8fd3a330f81084d9/master/w_728,c_limit/bodyweight5.gif">
                    <p>Squat jump adalah salah satu latihan fisik yang terdiri dari 2 gerakan, yaitu jongkok dan melompat. Gerakan ini sebetulnya merupakan salah satu variasi squat. Bedanya, Anda harus melompat untuk mengencangkan otot-otot paha, betis, dan bokong. <br>
                    Caranya:</p>
                  <ol type="1">
                        <li>Berdiri dengan kaki selebar bahu. Posisi tangan bisa lurus ke depan atau berada di depan dada.</li>
                        <li>Jongkok hingga lutut membentuk sudut 90 derajat, lalu lompat setinggi mungkin. Ayunkan kedua lengan ke bawah untuk mendorong lompatan Anda lebih tinggi. Pastikan posisi kepala dan punggung tetap lurus.</li>
                        <li>Ketika mendarat, tekuk lutut Anda hingga membentuk sudut 45 derajat.</li>
                        <li>Lakukan gerakan ini sebanyak yang Anda mampu. Ingat, pahami kemampuan tubuh Anda dan segeralah berhenti jika kaki terasa sakit.</li>
                  </ol>

              </li>

              <li>
                    <h5>Single-Leg Deadlift</h5>
                <img class="gambar" src="https://i.gifer.com/ViZt.gif">
                    <p>Untuk membentuk otot tubuh bagian bawah, khususnya di bagian paha belakang, paha depan, dan bahu, Anda bisa melakukan gerakan single-leg deadlift. Sebelum melakukannya, siapkan 2 buah dumbbell atau stik untuk menjaga keseimbangan. <br>
                    Caranya:</p>
                  <ol type="1">
                        <li>Berdiri dengan kaki selebar bahu. Lalu, masing-masing tangan memegang satu dumbbell.</li>
                        <li>Angkat kaki kanan ke arah belakang, seperti pada ilustrasi. Pastikan pandangan tetap fokus ke depan, sambil membungkukkan badan lurus ke bawah secara perlahan.</li>
                        <li>Pastikan posisi punggung sudah sejajar lurus dengan lantai. Jaga keseimbangan tubuh Anda.</li>
                        <li>Selanjutnya, angkat tubuh kembali ke posisi semula. Rasakan otot-otot paha belakang, bokong, serta perut mengencang.</li>
                        <li>Ganti posisi menggunakan kaki yang lain. Lakukan sebanyak 10 kali pada setiap kaki.</li>
                  </ol>
              </li>

            </ol>

        </div>
        <a href="tips&trik.php"> <-- Back </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>