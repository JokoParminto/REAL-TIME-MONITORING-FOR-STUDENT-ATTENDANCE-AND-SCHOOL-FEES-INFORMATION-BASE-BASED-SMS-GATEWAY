<?php
include "connect.php";
	$nis       				= $_POST['nis'];
    $tahun                = $_POST['tahun'];
    $periode                = $_POST['periode'];
	$batas_bayar            = $_POST['batas_bayar'];
    $tgl_bayar    			= $_POST['tgl_bayar'];
    $level       	        = 0;
	$status     	        = $_POST['status'];
    $id_pegawai     	        = $_POST['id_pegawai'];
	
   
   

    $max= count($nis);
    for($i=0; $i<$max; $i++){
	$query=mysqli_query($connect, "insert into pembayaran_spp (nis, tahun, periode, batas_bayar, level, tgl_bayar, status, id_pegawai)
						values('$nis[$i]','$tahun[$i]','$periode[$i]','$batas_bayar[$i]','$level[$i]', '$tgl_bayar[$i]', '$status[$i]','$id_pegawai' )");


           

    }

if(!$query) die(mysql_error());
print_r(error);
	header('Location:berhasil_tagihan.php');

?>
