<?php
  include '../connect.php';
  session_start();


    $user = $_SESSION["user"];
          $query = "select * from laporan where username='$user'";
          $hasil= mysqli_query($conn,$query);
          $i=1;

            ?>
            <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">
                  Minggu ke-
  </th>
                <th scope="col">
                  Berat
  </th>
                <th scope="col">
                  Tinggi
  </th>

              
                <th scope="col">
                  Aktifitas
                </th>
                <th scope="col">
                  BMI Hasil
                </th>
                <th scope="col">
                  Berat Ideal
                </th>
                <th scope="col">
                  Lemak Tubuh
                </th>
                <th scope="col">
                  Kalori/hari
                </th>
                <th>
                  Opsi
                </th>
              
              </tr>
              </thead>
              <?php

            $query1 = "select * from profil where username='$user'";
          $hasil1= mysqli_query($conn,$query1);
            foreach ($hasil1 as $value) {
                $gender=$value['jenis_kelamin'];
                $umur=$value['umur'];


            }
              foreach ($hasil as $value) {
                $berat=$value['berat'];
                $tinggi=$value['tinggi'];
                $aktivitas=$value['aktifitas'];

                $tinggi1=$tinggi/100;
  $tinggii=$tinggi-100;

  $BMI = $berat/(($tinggi1*$tinggi1));
  $lemak = (1.20 *$BMI)+(0.23*$umur);
// Hitung BMI
if ($BMI<18.5) {
    $BMI_hasil = "Kurus";
 }elseif ($BMI>=18.5 && $BMI<=24.9) {
  $BMI_hasil = "Normal";
 }elseif ($BMI>=25&&$BMI<=29.9) {
    $BMI_hasil="Gemuk";
 }elseif ($BMI>=30&&$BMI<=34.9) {
    $BMI_hasil="Obesitas 1";
 }elseif ($BMI>=35&&$BMI<=39.9) {
    $BMI_hasil="Obesitas 2";
 }elseif ($BMI>=40) {
    $BMI_hasil="Obesitas 3";
 }
// Hitung IDEAL
 if ($gender=="1") {
  $berat_ideal = $tinggii - ($tinggii*10/100);
 }elseif ($gender=="0") {
  $berat_ideal = $tinggii - ($tinggii*15/100);
 }

// Hitung Lemak
  if ($gender=="1") {
    $hasil_lem = $lemak -10.8-5.4;
    $hasil_lemak=number_format($hasil_lem,2);
 }elseif ($gender=="0") {
    $hasil_lem = $lemak -5.4;
    $hasil_lemak=number_format($hasil_lem,2);

   }
// Kelamin
   if ($gender=="1") {
    $kelamin="Laki-Laki";
   }else{
    $kelamin="Perempuan";
   }
// Hitung Kalori 
   if ($gender=="1") {
    $kalori= 88.362 +(13.397*$berat) + 4.799*$tinggi-5.677*$umur;
   }else{
    $kalori= 447.6 +(9.24*$berat) + 3.1*$tinggi-4.33*$umur;
   }
   if ($aktivitas==1) {
    $hasil_kalori = $kalori *1.2;
   }elseif ($aktivitas==2) {
    $hasil_kalori = $kalori *1.375;
   }elseif ($aktivitas==3) {
    $hasil_kalori = $kalori *1.55;
   }elseif ($aktivitas==4) {
    $hasil_kalori = $kalori *1.725;
   }
   if ($aktivitas==1) {
    $aktivitas="Kurang Aktif";
   }elseif ($aktivitas==2) {
    $aktivitas="Cukup Aktif";
   
   }elseif ($aktivitas==3) {
    $aktivitas="Aktif";
    
   }elseif ($aktivitas==4) {
    $aktivitas="Sangat Aktif";
    
   }
    $hasil_kalorinya=number_format($hasil_kalori,2);
            ?>
            <tr>
              <td>
                <?php
                echo "$i";?>
              </td>
              <td>
                <?php
                echo "$berat";
                ?>
              </td>
            
              <td>
                <?php
                echo "$tinggi";?>
              </td>
             
              <td>
                <?php
                echo "$aktivitas";?>
              </td>
               <td>
                  <?php
                echo "$BMI_hasil";?>
                </td>
                <td>
                   <?php
                echo "$berat_ideal";?>
                </td>
                <td>
                   <?php
                echo "$hasil_lemak %";?>
                </td>
                <td>
                   <?php
                echo "$hasil_kalorinya kalori";?>
                </td>
              <td>
         <a href="#" id="hapus" data-id="<?php echo $value['id_laporan']; ?>">Hapus <?php echo $value['id_laporan']; ?></a>       
              </td>
               
              
            </tr>
            <?php
            $i++;}?>
            </table>  

<script type="text/javascript" src="Chart.js"></script>
 <?php
          $query = "select * from laporan where username='$user'";
          $hasil1= mysqli_query($conn,$query);
          $hasil2= mysqli_query($conn,$query);
          $hasil3= mysqli_query($conn,$query);     
         


          ?>
<?php 
$query_gender = "select * from profil where username='$user'";
          $hasil_gender= mysqli_query($conn,$query_gender);

        foreach ($hasil_gender as $value) {
                $gender=$value['jenis_kelamin'];
                $umur=$value['umur'];
            }
            $query = "select * from laporan where username='$user'";
          $hasil= mysqli_query($conn,$query);
   foreach ($hasil as $value) {
    $tinggi=$value['tinggi'];
if (!empty($tinggi)) {
  # code...
  $tinggi1=$tinggi/100;
  $tinggii=$tinggi-100;
}
// Hitung IDEAL
 if ($gender=="1") {
  $berat_ideal = $tinggii - ($tinggii*10/100);
 }elseif ($gender=="0") {
  $berat_ideal = $tinggii - ($tinggii*15/100);
 }
}

   ?>


   <script>

    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["Minggu ke-0",<?php $i=1; while ($p = mysqli_fetch_array($hasil2)) { echo '"Minggu ke-' . $i++ . '",';} ?>],
        datasets: [{
          label: 'Berat Badan per-Minggu',
          data: [0,<?php while ($p = mysqli_fetch_array($hasil1)) { echo '"' . $p['berat'] . '",';}?>],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }, { label :'Berat Badan Ideal',
          backgroundColor: ['transparent'],
           borderColor:['rgba(79, 160, 174, 0.7)'],
           data: [ <?php while ($p = mysqli_fetch_array($hasil3)) { echo '"' . $berat_ideal . '",';}?> <?php echo '"' . $berat_ideal . '"'; ?>]
          }

        ]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });

  </script> 
  
  

