<?php require '../connect.php';
  session_start();


  
  
           $user = $_SESSION["user"];
          $query = "select * from profil where username='$user'";
          $hasil= mysqli_query($conn,$query);
          $i=1;
          $kelamin='';
          foreach ($hasil as $value) {
                $umur=$value['umur'];
                $kelamin=$value['jenis_kelamin'];
                $no_hp=$value['no_hp'];
          }

         

          $query = "select * from users where username='$user'";
          $hasil= mysqli_query($conn,$query);
            foreach ($hasil as $value) {
                $nama=$value['nama'];
               
          }
 
  if ( empty($_SESSION['login']) ) {
    echo "<script>
          alert('Anda Belum Login   !');
          document.location.href='../landing.php';
          </script>";
          
          die;  
  }

  ?>

  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="profil.css">

    <title></title>
    <script src="Chart.js"></script>
    <script src="../javascript/jquery-3.4.0.min.js"></script>
    <script type='text/javascript' src='../javascript/jquery-3.3.1.min.js'></script>

      
  </head>
  <body>
    <!-- Navbar -->

  	<?php include '../nav/nav_hijau.php'; ?>

    <!-- Bagian Modal Register -->
    <div class="register_bg" id="register">
        <div class="register_konten animasi">
            <div onclick="document.getElementById('register').style.display='none'" class="tutup">+</div>
            <?php require 'edit.php'; ?>
                </div>
            </form>
        </div>
    </div>
    <!-- Bagian Modal Register -->
  <div class="backTop">
        <img src="images/dropup.png" width="30px">
    </div>

<div class="body">
  <div class="profil">
    <div class="foto">
      <?php  
            $user = $_SESSION["user"];

            $query_data = "SELECT foto from profil where username='$user'";
          $hasil_data= mysqli_query($conn,$query_data);
            foreach ($hasil_data as $value) {
                $foto=$value['foto'];
            }  

          ?>

      <?php if (empty($foto)) {
       ?>
       <img src="../atribut/laki1.png">
      <?php }else{ ?>

       <img src="image/<?php echo $foto ?>">

      <?php } ?>
    </div>
    <div id="profil">
        <p>
      Nama : <?php $namanya = ucwords($nama);  echo "$namanya"; ?>
    </p>
    
    
  
    <p>
      Umur : <?php if (!empty($umur)) {
        # code...
       echo "$umur";}
       else {echo "Lengkapi Data";} ?>
    </p>
   
    <p>
      Jenis Kelamin : <?php
        # code...
// Kelamin
if (!empty($umur)) {
  # code...


   if ($kelamin==1) {
    $kelamin="Laki-Laki";
   }else{
    $kelamin="Perempuan";
   }

       echo "$kelamin";
}else{
  echo "Lengkapi Data ";
}


        ?>
    </p>
    <p>
      Nomor Hp : <?php if (!empty($no_hp)) {
        # code...
       echo "$no_hp";}else {echo "Lengapi Data";} ?>
    </p>

    <a href="profil_form.php" class="btn btn-info">Edit Data</a>
    
    </div>
    <div class="masukan">
      <form method="POST" class="form-user">
      <label class="inputbox">

          <input type="text" name="berat"  autocomplete="off" required>
        <span>
      Berat Badan 
      </span>
      </label>

      <label class="inputbox">
      
      <input type="text" name="tinggi" autocomplete="off" required>
      <span>
      Tinggi Badan  
      </span>
      </label>

   
      <select class="selectpicker show-menu-arrow" data-style="btn-info" name="aktivitas"  required >
        <option value="">
          --Pilih Aktivitas--
        </option>
        
        <option value=1>
          Kurang Aktif
        </option>
        
        <option value=2>
          Cukup Aktif
        </option>
        
        <option value=3>
          Aktif 
        </option>

        <option value=4>
         Sangat Aktif 
        </option>

      </select></label>
      
      <a class="tombol-simpan btn btn-primary" style="cursor: pointer;">Cek Ideal</a>
      </form>
    </div>

  </div>



  <div class="keterangan">
  
  </div>
 <div class="grafik"></div>
 <div style="width: 500px;height: 500px;display: inline-block;">
    <canvas id="myChart"></canvas>
  </div>








<script type="text/javascript">
  $(document).ready(function(){
    $(".tombol-simpan").click(function(){
      var data = $('.form-user').serialize();
      $.ajax({
        type: 'POST',
        url: "aksi.php",
        data: data,
        success: function() {
          $('.keterangan').load("tampil.php");
        }
      });
    });
  });

  $(document).ready(function(){
    $(".tombol-simpan_edit").click(function(){
      var data = $('.form-user_edit').serialize();
      $.ajax({
        type: 'POST',
        url: "update.php",
        data: data,
        success: function() {
          $('.keterangan').load("tampil.php");
        }
      });
    });
  });
  </script>

            <script type="text/javascript">
              $(document).on('click','#hapus',function(e){
        e.preventDefault();
        $.post('delete.php',
            {id:$(this).attr('data-id')},
           function() {
          $('.keterangan').load('tampil.php');
        }
        );
    });

            </script>

             
 <script type="text/javascript">
              $(document).on('click','#edit',function(e){
        e.preventDefault();
        $.post('update.php',
            {id:$(this).attr('data-id')},
           function() {
          $('.keterangan').load('tampil.php');
        }
        );
    });

            </script>

<!--  <script>
    var modal = document.getElementById('login');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    var modal = document.getElementById('register');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";

            }
        }

           var $backToTop = $(".backTop");
        $backToTop.hide();
        $(window).on('scroll', function() {
          if ($(this).scrollTop() > 100) {
            $backToTop.fadeIn();
          } else {
            $backToTop.fadeOut();
          }
        });
    
        $backToTop.on('click', function(e) {
          $("html, body").animate({scrollTop: 0}, 500);
        });
    </script> -->

    <script type="text/javascript">
      $(document).ready(function(){
          $('#akhir').load(#register)

      })
    </script>
                    

    <script type="text/javascript">


        var $backToTop = $(".backTop");
        $backToTop.hide();
        $(window).on('scroll', function() {
          if ($(this).scrollTop() > 100) {
            $backToTop.fadeIn();
          } else {
            $backToTop.fadeOut();
          }
        });
    
        $backToTop.on('click', function(e) {
          $("html, body").animate({scrollTop: 0}, 500);
        });
    </script>

<div id="modal-edit" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form role="form" id="form-edit" method="post" action="input.php">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Menambahkan Mahasiswa</h4>
                </div>
                    <div class="modal-body">
                        <div id="data-edit">
                       
                        </div>             
                    </div>
                   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" >Simpan</button>
                    </div>
                </form>    
            </div>


            <script type="text/javascript">
              
                  $(document).on('click','#edit',function(e){
        e.preventDefault();
        $("#modal-edit").modal('show');
        $.post('edit.php',
            {id:$(this).attr('data-id')},
            function(html){
                $("#data-edit").html(html);
            }  
        );
    });
   
   
    $("#form-edit").submit(function(e) {
        e.preventDefault();
       
        $("#error_nama").html('');
        $("#error_jenis_kelamin").html('');
        $("#error_telepon").html('');
        $("#error_alamat").html('');
       
        var dataform = $("#form-edit").serialize();
        $.ajax({
            url: "update.php",
            type: "post",
            data: dataform,
            success: function(result) {
                var hasil = JSON.parse(result);
                if (hasil.hasil !== "sukses") {
                    $("#error_edit_nama").html(hasil.error.edit_nama);
                    $("#error_edit_jenis_kelamin").html(hasil.error.edit_jenis_kelamin);
                    $("#error_edit_telepon").html(hasil.error.edit_telepon);
                    $("#error_edit_alamat").html(hasil.error.edit_alamat);
                } else {
                    $('#modal-edit').modal('hide');
                    $("#nama").val('');
                    $("#jenis_kelamin").val('');
                    $("#telepon").val('');
                    $("#alamat").val('');
                    $('#data-mahasiswa').load(data);
                }
            }
        });
    });
   
            </script>
</body>
</html>