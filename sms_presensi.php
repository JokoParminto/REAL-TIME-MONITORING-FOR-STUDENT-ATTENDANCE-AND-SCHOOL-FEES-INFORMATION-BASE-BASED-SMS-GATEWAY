<?php
ob_start();
include "connect.php";
	
	$tgl = date("Y-m-d");
	
$a=  "SELECT  no_hp_wali, no_hp_siswa, nama
       FROM siswa
             JOIN presensi USING (nis)
                WHERE keterangan = 'tanpa keterangan' AND tgl ='$tgl' ";
$hasil=mysqli_query($connect, $a);




 

if (mysqli_num_rows($hasil) > 0)
        {
    while ($data=mysqli_fetch_assoc($hasil)){
      $cek_tgl=$data['no_hp_wali'];
      $cek=$data['no_hp_siswa'];
       $isi=$data['nama'];
    $pesan= $isi." "."putra/putri bapk/ ibu, hari ini tidak masuk sekolah tanpa keterangan";
    $pesan_siswa =$isi." "."hari ini anda tidak masuk sekolah tanpa keterangan";
	include "config.php";
	$query = mysqli_query($connect, "INSERT INTO outbox (DestinationNumber, TextDecoded, CreatorID)
			values('$cek_tgl','$pesan', 'Gammu')"); 
           
           $siswa = mysqli_query($connect, "INSERT INTO outbox (DestinationNumber, TextDecoded, CreatorID)
			values('$cek','$pesan_siswa', 'Gammu')"); 
           
	header('Location:berhasil_presensi.php'); 
        }
        }

else {
   header('Location:berhasil_presensi.php'); 
       }
 
 
ob_end_flush();
?>