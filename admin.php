 <?php require 'connect.php';
@ob_start();
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
<link rel="shortcut icon" href="atribut/logo.png">
    <!-- Bootstrap CSS -->
    <script src="jquery-3.4.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="landing2.css">
    <title>Ideal Umum</title>

  

  </head>
  <body>
   <?php include 'nav_hijau.php'; ?>
    <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">
                  Nama
  </th>
                <th scope="col">
                  Username
  </th>
                <th scope="col">
                  Email
  </th>

              
               
              </thead>


      <tbody>

            <?php 
              include 'xml/nama.php';

            $file = simplexml_load_file('xml/nama.xml');
            $key = 'datauser';
foreach ($file->datauser as $value) {
//   $query = "select * from laporan where username='$value->username'";
//           $hasil1= mysqli_query($conn,$query);

//    foreach ($hasil1 as $value) {
//                 $berat=$value['berat'];
//                 $tinggi=$value['tinggi'];
//               }

//                 $tinggi1=$tinggi/100;
//   $tinggii=$tinggi-100;

//   $BMI = $berat/(($tinggi1*$tinggi1));
// // Hitung BMI
// if ($BMI<18.5) {
//     $BMI_hasil = "Kurus";
//  }elseif ($BMI>=18.5 && $BMI<=24.9) {
//   $BMI_hasil = "Normal";
//  }elseif ($BMI>=25&&$BMI<=29.9) {
//     $BMI_hasil="Gemuk";
//  }elseif ($BMI>=30&&$BMI<=34.9) {
//     $BMI_hasil="Obesitas 1";
//  }elseif ($BMI>=35&&$BMI<=39.9) {
//     $BMI_hasil="Obesitas 2";
//  }elseif ($BMI>=40) {
//     $BMI_hasil="Obesitas 3";
//  }


      ?>
<tr>
        <td>
          <?php echo "$value->nama"; ?>
        </td>
        <td scope="col">
          <?php echo "$value->username"; ?>
        </td>
        <td scope="col">
          <?php echo "$value->email"; ?>
        </td>
     
        </tr>

<?php 
  }

             ?>
      </tbody>
</table>
 </body>
 </html>