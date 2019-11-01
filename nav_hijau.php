
 <style>
.nav {
	position: sticky;
    top: 0;
    z-index: 1;
    box-shadow: 0px 0px 2px;
}
#atas {
    width: 100%;
    height: 45px;
    background-image: url('atribut/atas.png');
    background-size: cover;
}

#logo {
	width: 45px; 
	height: 45px;
margin-top: -10px;}
nav li {
    list-style: none;
    text-align: center;
    display: inline-block;
    font-family: "Prototype";

}
nav li a {
	color: white;
}
#idealku{
	font-size: 34px;
	color: white;
}
	


#login{
	float: right;
    border-left: 7px solid white;
    padding: 12px;

}
#daftar{
	float: right;
    padding: 12px;
}

/* navbar bawah */
.navbar{
   
}

.navbar-brand img {
	width: 40px;
	height: 40px;
}
.navbar-nav div{
	padding-right: 40px; 
}
.navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 1.5rem;
    padding-left: -0.5rem;
}
.menu {
	margin: auto;
	 background-image: url('atribut/nav.png');
      background-size: cover;
	    margin-top: -13px;
    width: 90%;
    border-radius: 10px ;
}

   </style>
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
        <a href="login/login.php"> LOGIN</a>
      </li>
      <li id="daftar">
        <a href="login/register.php"> DAFTAR</a>
      </li>
        <?php
        }
else{

      ?>
      <li id="daftar">
        <a href="profil/profil.php">
          <?php  
          include 'config.php';
            $user = $_SESSION["user"];

            $query_data = "SELECT foto from profil where username='$user'";
          $hasil_data= mysqli_query($conn,$query_data);
            foreach ($hasil_data as $value) {
                $foto=$value['foto'];
            }  

          ?>

      <?php if (empty($foto)) {
       ?>
       <img src="atribut/laki1.png" style="width: 43px; margin-top: -11px; height: 43px; border-radius: 50%;">
      <?php }else{ ?>

       <img src="profil/image/<?php echo $foto ?>" style="width: 43px; margin-top: -11px; height: 43px; border-radius: 50%;">

      <?php } ?>
        </a>
      </li>
      <li id="daftar">
      
        <a  href="login/logout.php" role="button" 
  onclick="return confirm('yakin akan logout ?')">Logout</a>
      </li>
      
        
      <?php
    }
      ?>
  		</center>

  		</ul>
  	</nav>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm justify-content-center menu" >
  <!-- Brand/logo -->
  
  <!-- Links -->

  <ul class="navbar-nav ">
  	<div>
  <a class="navbar-brand" href="#"><img src="atribut/ideal.png"></a>
    <li class="nav-item">
      <a class="nav-link" href="index.php">IDEAL</a>
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