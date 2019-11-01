<?php require '../connect.php';
  session_start();


  
  if ( isset($_COOKIE['login']) ) {
    if ($_COOKIE['login'] == "true") {
      $_SESSION['login'] == true;
    }
  }
  ?>
  
  <?php 
   if ( isset($_COOKIE['login']) ) {
    if ($_COOKIE['login'] == "true") {
      $_SESSION['login'] == true;
    }
  }
           $user = $_SESSION["user"];
          $query = "select * from users where username='$user'";
          $hasil= mysqli_query($conn,$query);
          $i=1;
          foreach ($hasil as $value) {
                $nama=$value['nama'];
                $password=$value['password'];
                $username=$value['username'];

          }

         $query1 = "select * from profil where username='$user'";
          $hasil1= mysqli_query($conn,$query1);
          $i=1;
         
          foreach ($hasil1 as $value) {
                 $umur_data=$value['umur'];
                $no_hp_data=$value['no_hp'];
                $jenis_kelamin_data=$value['jenis_kelamin'];
                $foto_data=$value['foto'];


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
<link rel="shortcut icon" href="atribut/logo.png">
    <!-- Bootstrap CSS -->
    <script src="jquery-3.4.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="profil_form.css">
    <title>Ideal Umum</title>

     <script>
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
    </script>
  </head>
  <body>

    <?php include '../nav/nav_hijau.php'; ?>
		
<!-- body -->

<div class="body">
	<h1>Profil of : <?php echo "$nama"; ?></h1>
<form enctype="multipart/form-data" method="POST" class="data">
	<div class="isi">

		<div class="foto">
			<?php if (empty($foto_data)) {
			 ?>
			 <img src="../atribut/laki1.png">
			<?php }else{ ?>

			 <img src="image/<?php echo $foto_data ?>">

			<?php } ?>
				<input id="uploadImage" type="file" name="foto" onchange="PreviewImage();" />
		</div>

		<div class="form">

			<div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        <h3>Personal info</h3>
         <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="user" value="<?php echo "$user"; ?>">
            </div>
          </div>

        <div class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Nama :</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="nama" value="<?php if(!empty($nama)){ echo $nama;} else{echo "";} ?>">
            </div>
          </div>
         
          <div class="form-group">
            <label class="col-lg-3 control-label">Umur :</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="umur" value="<?php if(!empty($umur_data)){ echo $umur_data;} else{echo "";} ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">No.HP:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="no_hp" value="<?php if(!empty($no_hp_data)){ echo $no_hp_data;} else{echo "";} ?>">
            </div>
          </div>
        
     		<label class="laki btn btn-info">
				<img src="../atribut/laki1.png">
				<span>Laki-Laki</span>
				<input type="radio" name="jenis_kelamin" value="1" <?php if ($jenis_kelamin_data==1) {
          # code...
        ?> checked <?php } ?> required>
				</label>

				<label class="laki btn btn-info">
				<img src="../atribut/perempuan1.png">
				<span>Perempuan</span>
				<input type="radio" name="jenis_kelamin" value="0" <?php if ($jenis_kelamin_data==0) {
          # code...
        ?> checked <?php } ?>>
				</label>
			


         
       
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="kirim btn btn-primary" name="kirim" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </div>
      </div>

		</div>
	</div>

</form>
</div>

<?php
if (isset($_POST['kirim'])) {
        include ("../config.php");

if (empty($umur_data)) {

 $umur=$_POST['umur'];
 $no_hp= $_POST['no_hp'];
 $jenis_kelamin= $_POST['jenis_kelamin'];
$user = $_SESSION["user"];
$nama1 = $_POST['nama'];
$username_ubah = $_POST['user'];






$ekstensi_diperbolehkan	= array('png','jpg');
	$foto = $_FILES['foto']['name'];
	$x = explode('.', $foto);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['foto']['size'];
	$file_tmp = $_FILES['foto']['tmp_name'];	
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		    if($ukuran < 1044070){			
			move_uploaded_file($file_tmp, 'image/'.$foto);
		  $query="INSERT into profil (umur, no_hp, jenis_kelamin, foto, username) values ('$umur','$no_hp','$jenis_kelamin','$foto','$user') ";
            $tambah = mysqli_query($conn,$query);
            $query1="UPDATE users SET nama='$nama1',username='$username_ubah' Where username='$user'";

			
            $tambah1 = mysqli_query($conn,$query1);	
      
			if($query){
				 if ($tambah==true) {
              ?> 
              <script type="text/javascript">
                alert('Data Berhasil diinput!');
                document.location.href='profil.php';

              </script>
              <?php
            }else{
              ?> 
              <script type="text/javascript">
                alert('Data Gagal diinput!');
              </script>
              <?php
            }
			}else{
				echo 'GAGAL MENGUPLOAD GAMBAR';
			}
		    }else{
			echo 'UKURAN FILE TERLALU BESAR';
		    }
	       }else{
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	       }
           
        

}else{

	 $umur=$_POST['umur'];
 $no_hp= $_POST['no_hp'];
 $jenis_kelamin= $_POST['jenis_kelamin'];
$user = $_SESSION["user"];
$nama1 = $_POST['nama'];
$username_ubah = $_POST['user'];


	 



$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
	$foto = $_FILES['foto']['name'];
	$x = explode('.', $foto);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['foto']['size'];
	$file_tmp = $_FILES['foto']['tmp_name'];

			if (!empty($foto)) {

		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		    if($ukuran < 11044070){			
			move_uploaded_file($file_tmp, 'image/'.$foto);
				# code...
			 $query="UPDATE profil SET umur='$umur',no_hp='$no_hp',jenis_kelamin='$jenis_kelamin',foto='$foto' Where username='$user'";
			
            $tambah = mysqli_query($conn,$query);	
            $query1="UPDATE users SET nama='$nama1',username='$username_ubah' Where username='$user'";
			
            $tambah1 = mysqli_query($conn,$query1);	
			if($query){
			if ($tambah==true) {
              ?> 
              <script type="text/javascript">
                alert('Data Berhasil Update!');
                document.location.href='profil.php';
              </script>
              <?php
            }else{
              ?> 
              <script type="text/javascript">
                alert('Data Gagal Update!');
              </script>
              <?php
            }
			}else{
				echo 'GAGAL MENGUPLOAD GAMBAR';
			}
		    }else{
			echo 'UKURAN FILE TERLALU BESAR';
		    }
	       }else{
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	       }
	   }else{
			 $query="UPDATE profil SET umur='$umur',no_hp='$no_hp',jenis_kelamin='$jenis_kelamin',foto='$foto_data'";

			}




}
}
      ?>

<script type="text/javascript">
	$(document).ready(function(){
		$(".tombol-simpan").click(function(){
			var data = $('.data').serialize();
			$.ajax({
				type: 'POST',
				url: "aksi.php",
				data: data,
				success: function() {
					$('.tampildata').load("tampil.php");
				}
			});
		});
	});
	</script>


</body>
</html>