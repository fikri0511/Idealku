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
    <link rel="stylesheet" type="text/css" href="video_gemuk.css">

    <title></title>
  </head>
  <body>
    <!-- Navbar -->
<?php include 'nav_hijau.php'; ?>
<!-- BOdy  -->
<div class="body">
  <div class="aside">
    <table>
    
      <tr>
        <th>
          
          <a href="video.php">Video</a>
        </th>
      </tr>

      <tr>
        <td>
      <a href="video_gemuk.php">
        <  Gemuk
      </a>

        </td>
      </tr>

     
      <tr>
        <td>
           <a href="video_kurus.php">
         < Kurus
          </a>
        </td>
      </tr>
    
    </table>
  </div>

  <div class="isi">

    <div class="hari">
      <div class="latihan">
      <img src="atribut/stop.png">
      <div class="tulisan">
        <a href="challnge1.php">
      <span id="tulis">
        1. Challenge Pada Hari Pertama 
      </span>
      <span>
        <br>
        Ada Beberapa olahraga yang anda harus lakukan
      </span>
      </a>
      </div>
      </div>

      <div class="latihan">
      <br>
       <img src="atribut/stop.png">
      <div class="tulisan">
        <a href="#">
      <span id="tulis">
        2. Challenge Pada Hari Kedua 
      </span>
      <span>
        <br>
        Ada Beberapa olahraga yang anda harus lakukan
      </span>
      </a>
      </div>
    </div>

      <div class="latihan">

        <br>
       <img src="atribut/stop.png">
      <div class="tulisan">
        <a href="#">
      <span id="tulis">
        3. Challenge Pada Hari Ketiga 
      </span>
      <span>
        <br>
        Ada Beberapa olahraga yang anda harus lakukan
      </span>
      </a>
      </div>
</div>

      <div class="latihan">

       <br>
       <img src="atribut/stop.png">
      <div class="tulisan">
        <a href="#">
      <span id="tulis">
        4. Challenge Pada Hari Keempat 
      </span>
      <span>
        <br>
        Ada Beberapa olahraga yang anda harus lakukan
      </span>
      </a>
      </div>
</div>

    </div>


  </div>


</div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
