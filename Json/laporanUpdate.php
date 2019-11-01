<?php 
include '../config.php'; 
if (!isset($_POST['berat'])|| !isset($_POST['tinggi'])||!isset($_POST['aktifitas'])||!isset($_POST['id_laporan'])) {
	# code...
	echo '"Status": "Error", "Message": "Data Belum Diisi Semua"';
	exit();

}
$id_laporan = $_POST['id_laporan'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$aktifitas = $_POST['aktifitas'];
$sql = "UPDATE laporan set berat='$berat', tinggi='$tinggi', aktifitas=$aktifitas where id_laporan ='$id_laporan'";
if (mysqli_query($conn,$sql)) {
if (mysqli_affected_rows($conn)>0) {
	echo '"status": "Berhasil"';
}else{
		echo '{"status": "Gagal","message":"ID Tidak Ditemukan ."}';
}

}else{
	echo '{"Status": "Gagal","message":"'.mysqli_error($conn).'"}';

}


?>