<?php
include 'connect.php';
    
    $id_pembayaran =$_POST['id_pembayaran'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $periode = $_POST['periode'];
    $level = $_POST['level'];
    $status = $_POST['status'];
    $tgl_bayar =$_POST['tgl_bayar'];




     $query= "UPDATE pembayaran_spp SET 
                level='$level', 
                status='$status', 
                tgl_bayar='$tgl_bayar'  
            where id_pembayaran = $id_pembayaran ";
 
        $hasil = mysqli_query($connect, $query);
        
if (!$hasil) {
 	echo "Gagal Memasukan Data";
 }
 else {
 	header("Location: berhasil_update_spp.php");
 }





?>