<?php
include 'connect.php';
    
    $level =$_POST['level'];
    $hari = $_POST['hari'];
    $pesan = $_POST['pesan'];
    $pesan_siswa = $_POST['pesan_siswa'];
    echo $pesan;
     $query= "UPDATE batas_pembayaran SET 
                level='$level', 
                hari='$hari', 
                pesan='$pesan',
                pesan_siswa ='$pesan_siswa' 
            where level = $level ";
 
        $hasil = mysqli_query($connect, $query);
        
        
if (!$hasil) {
 	echo "Gagal Memasukan Data";
     echo $hasil;
 }
 else {
 	header("Location: berhasil_update_batas.php");
 }





?>