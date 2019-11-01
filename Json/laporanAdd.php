<?php 
include '../config.php'; 
if (!isset($_POST['berat'])|| !isset($_POST['tinggi'])||!isset($_POST['aktifitas'])) {
	# code...
	echo '"Status": "Error", "Pesan": "Anda Belum Isi Datang Dengan Lengkap"';
	exit();

}

$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$aktifitas = $_POST['aktifitas'];
$sql = "INSERT into laporan values ( '$berat' , '$tinggi', '$aktifitas','fikri',null)";
if (mysqli_query($conn,$sql)) {
	echo '{"Status": "Berhasil","LaporanID":'.mysqli_insert_id($conn).'}';
}else{
	echo '{"Status": "Gagal","Pesan":"'.mysqli_error($conn).'"}';

}


?>