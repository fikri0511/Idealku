<?php 
include '../config.php'; 
if (!isset($_POST['id_laporan'])) {
	# code...
	echo '"Status": "Error", "Message": "Word ID, Sunda and Label Equired"';
	exit();

}

$id_laporan = $_POST['id_laporan'];

$sql = "DELETE from laporan where id_laporan ='$id_laporan'";
if (mysqli_query($conn,$sql)) {
if (mysqli_affected_rows($conn)>0) {
	echo '"status": "Berhasil"';
}else{
		echo '{"status": "Gagal","message":"No Word with Corresponding ID ."}';
}

}else{
	echo '{"Status": "Gagal","message":"'.mysqli_error($conn).'"}';

}


?>