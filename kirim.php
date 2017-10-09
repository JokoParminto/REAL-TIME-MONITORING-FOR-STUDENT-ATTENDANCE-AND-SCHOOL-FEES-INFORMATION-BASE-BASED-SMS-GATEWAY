<?php
	include("header.php");
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Monitoring</title>
</head>
<body>
	<div class="container">


<?php
include "connect.php";

$id_pembayaran      = $_GET['id_pembayaran'];
$pesan              = $_GET['pesan'];
$pesan_siswa              = $_GET['pesan_siswa'];
$level              = $_GET['level'];
$telat              = $_GET['telat'];
$tgl   		    = date("Y-m-d");
$jam                = date("h:i:sa");

        $query = "SELECT siswa.nama, siswa.no_hp_wali, siswa.no_hp_siswa,  batas_pembayaran.pesan, batas_pembayaran.pesan_siswa, pembayaran_spp.level
                  FROM ((pembayaran_spp
                        INNER JOIN siswa ON pembayaran_spp.nis = siswa.nis)
                            INNER JOIN batas_pembayaran ON pembayaran_spp.level = batas_pembayaran.level) 
                                    WHERE pembayaran_spp.id_pembayaran='$id_pembayaran'";

 $hasil=mysqli_query($connect, $query); 
    while($data=mysqli_fetch_assoc($hasil)){
           
$nama= $data['nama'];
$isi = $nama." ".$pesan;
$isi_siswa =$nama ." ".$pesan_siswa;

$no=$data['no_hp_wali'];
$no_siswa=$data['no_hp_siswa'];


if ($id_pembayaran > 0) {
    include "config.php";
            $sms =mysqli_query($connect,  "INSERT INTO outbox (DestinationNumber, TextDecoded, CreatorID)
			values('$no','$isi', 'Gammu')"); 
                        
        
                $sms_siswa =mysqli_query($connect,  "INSERT INTO outbox (DestinationNumber, TextDecoded, CreatorID)
			values('$no_siswa','$isi_siswa', 'Gammu')"); 
            


            echo "SMS Ke "." ".$no." ". "berhasil dikirm dan ke nomor "." ".$no_siswa;
            




} else {
    echo "gagal kirim sms";


}


  
   }

?>

<?php
   
include "connect.php";
$a=  "select level from sms where id_pembayaran = '$id_pembayaran'";

    $cek_level =mysqli_num_rows( mysqli_query($connect, $a));
  
        if ($cek_level !== $level){
                $query=mysqli_query($connect, "UPDATE sms SET level='$level', telat='$telat', tgl='$tgl', jam='$jam', id_pegawai='$id'  
                where id_pembayaran=$id_pembayaran ");
                
}
        if ($cek_level === 0){
                $query=mysqli_query($connect, "insert into sms(id_pembayaran, level, telat, tgl, jam, id_pegawai)
                                    values('$id_pembayaran','$level','$telat', '$tgl', '$jam', '$id')");

}

else{
        echo "Tidak Ada Insert";

}

   
 
    
?>
      
   <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
            <a href='cek_telat_bayar.php'><input type='button' class='btn btn-primary' value='Back'></a> 
    </div>
  </div>
	</div>

</body>
</html>
