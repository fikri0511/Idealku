<?php 
include '../config.php';
  session_start();


    $user = $_SESSION["user"];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$aktivitas = $_POST['aktivitas'];
 

if ($berat == '') {
    $data['error']['nama'] = 'Nama tidak boleh kosong';
}
if ($tinggi == '') {
    $data['error']['jenis_kelamin'] = 'Piih Jenis Kelammin';
}
if ($aktivitas == '') {
    $data['error']['telepon'] = 'Telepon Tidak Boleh Kosong';
}
if (empty($data['error'])) {

$query="INSERT into laporan values('$berat','$aktivitas','$tinggi','$user',null)";
 $tambah = mysqli_query($conn,$query);
            if ($tambah==true) {
              ?> 
              <script type="text/javascript">
                alert('Data Berhasil diinput!');
              </script>
              <?php
            }else{
              ?> 
              <script type="text/javascript">
                alert('Data Gagal diinput!');
              </script>
              <?php
            }
             $data['hasil'] = 'sukses';
   
} else {
   
    $data['hasil'] = 'gagal';
}
?>
