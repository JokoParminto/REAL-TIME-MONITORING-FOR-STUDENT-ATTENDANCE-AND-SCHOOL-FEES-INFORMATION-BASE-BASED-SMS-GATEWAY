<?php
ob_start();
include ("connect.php");
include ("header.php");
	$nis       				= $_POST['nis'];
	$tgl      				= date("Y-m-d");
	$jam                    = date("h:i:sa");
    $keterangan     	    = $_POST['keterangan'];
	

    $max= count($nis);
    for($i=0; $i<$max; $i++){
        $a = "SELECT id_presensi FROM presensi WHERE tgl = '$tgl' AND keterangan='$keterangan[$i]' AND nis='$nis[$i]' ";
        $hasil=mysqli_query($connect, $a);
        if(mysqli_num_rows($hasil) > 0){
            
           header('Location:berhasil_presensi.php');
        }else {
            $z= count($nis);
                    for($x=0; $x<$z; $x++){
                            $query=mysqli_query($connect, "INSERT into presensi (nis, tgl, jam, keterangan, id_pegawai)
                                    values('$nis[$x]','$tgl','$jam','$keterangan[$x]', '$id')");
                            
                    }
                                
                }
          if(!$query) die(mysql_error());
	header('Location:sms_presensi.php'); 
}   
    
ob_end_flush();
?>
              
  



