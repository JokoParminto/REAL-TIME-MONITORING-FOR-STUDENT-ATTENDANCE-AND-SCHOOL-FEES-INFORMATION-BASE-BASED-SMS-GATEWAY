<?php
include 'connect.php';
    
    $level =$_GET['level'];
   
    




     $query= "DELETE FROM batas_pembayaran where level='$level'";
 
        $hasil = mysqli_query($connect, $query);
        
if (!$hasil) {
 	echo "Gagal Memasukan Data";
 }
 else {
 	header("Location: berhasil_hapus_batas_pembayaran.php");
 }





?>