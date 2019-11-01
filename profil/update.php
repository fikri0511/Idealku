<?php
include"../connect.php";
 
$id = $_POST['id_laporan'];
$nama = $_POST['berat'];
$jenis_kelamin = $_POST['aktivitas'];
$tinggi = $_POST['tinggi'];
        if ($nama == '') {
            $data['error']['edit_nama'] = 'Nama  harap diisi';
        }
        if ($jenis_kelamin == '') {
            $data['error']['edit_jenis_kelamin'] = 'Pilih Jenis Kelamin';
        }
      
        
 
        if (empty($data['error'])) {
            $query = "UPDATE laporan SET
                                            nama = '$nama',
                                            jenis_kelamin = '$jenis_kelamin',
                                            tinggi = '$tinggi',
                                           
                                            WHERE id_laporan = '$id'
                                            ";
 
            mysqli_query($conn, $query)
            or die ("Gagal Perintah SQL".mysql_error());
            $data['hasil'] = 'sukses';
        } else {
            $data['hasil'] = 'gagal';
        }
        echo json_encode($data);
 
?>

    