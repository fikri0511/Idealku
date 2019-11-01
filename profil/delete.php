<?php
include "../connect.php";
session_start();

if ( isset($_COOKIE['login']) ) {
    if ($_COOKIE['login'] == "true") {
      $_SESSION['login'] == true;
    }
  }
  
    $query = "DELETE FROM laporan
                            WHERE id_laporan ='$_POST[id]'
                                ";
 
mysqli_query($conn, $query)
or die ("Gagal Perintah SQL".mysql_error());
 


?>