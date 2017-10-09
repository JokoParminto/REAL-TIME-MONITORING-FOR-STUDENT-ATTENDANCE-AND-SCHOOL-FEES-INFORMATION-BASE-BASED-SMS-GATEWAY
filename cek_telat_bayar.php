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
    <h2>Tabel Keterlambatan Pembayaran SPP</h2>
	<?php


include  "connect.php";
$query = "SELECT siswa.nis, siswa.nama, siswa.kelas, pembayaran_spp.status, 
                 pembayaran_spp.level, pembayaran_spp.batas_bayar, pembayaran_spp.id_pembayaran
            FROM pembayaran_spp
                INNER JOIN siswa ON pembayaran_spp.nis = siswa.nis WHERE pembayaran_spp.status='belum' order by nis";
$hasil=mysqli_query($connect, $query);
$beda=array();
$datax=array();
    while ($data=mysqli_fetch_assoc($hasil)){
       $tanggal = date("Y-m-d");
           $tglsekarang = strtotime($tanggal); 
           $sekarang = date("Ymd", strtotime($tanggal));
           $batas_bayar= $data['batas_bayar'];
           $batas= date("Ymd", strtotime($batas_bayar));

          $diff = abs(strtotime($sekarang) - strtotime($batas));



          $days = floor($diff / (60 * 60 * 24));
                array_push($beda, $days);
                   //echo $data["nis"];
                   $datae = [$data["nis"], $data["nama"], $data["kelas"], $data["level"], $data["status"], $days, $data["id_pembayaran"]];
                   //print_r($datae);
             array_push($datax, $datae);     
}


 echo "<table width='100%' class='table table-striped'>";
                    echo  "<div class='panel-body'>";
                    echo " <thead>
                            <tr class='odd gradeX'>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Level</th>
                                <th>Status</th>
                                <th>Aksi </th>
                            </tr>
                        </thead>";




foreach($datax as $nm=>$value){
      $ret = cektelat($value[5]);
      $lev = ceksms($ret['level'], $value[6]);
     
      // echo $ret['level'];  
           if ($value[5] === '') {
            echo "OK";
      } 
      if($ret['level'] === $lev['level']){
            echo " ";

      }
    else {
        
        echo 
          "<tbody>
                                   
                                    <td>".$value[0]."</td>
                                    <td>".$value[1]."</td>
                                    <td>".$value[2]."</td>
                                    <td>".$ret['level']."</td>
                                    <td>"."Telat lebih dari"." ".$ret['hari']." "."hari"." "." (".$value[5]." "."hari "." )"."</td>
                                    
                                    <td><a href='kirim.php?id_pembayaran=$value[6]&level=".$ret['level']."&pesan=".$ret['pesan']."&pesan_siswa=".$ret['pesan_siswa']."
                                    &telat=$value[5]'><input type='submit' value='Kirim Pesan'></a></td>


                                   
                                </tbody>";


      }
      
}
function cektelat($telat){
  include  "connect.php";
  $query = "SELECT * from batas_pembayaran  order by hari desc ";
  $hasil=mysqli_query($connect, $query);
  $return = array('level'=>0,'hari'=>0,'pesan'=>'','status'=>'');
  while ($data=mysqli_fetch_assoc($hasil)){
        if ($telat > $data['hari']) {
            $return['level'] = $data['level'];
            $return['hari'] = $data['hari'];
            $return['pesan'] = $data['pesan'];
            $return['pesan_siswa'] = $data['pesan_siswa'];
            $return['status'] = 'TELAT';
            break;                                                                
        }           
  }
  return $return;
} 


function ceksms($level, $id){
  include  "connect.php";
  $query = "SELECT level from sms  where id_pembayaran = $id ";
  $hasil=mysqli_query($connect, $query);
  $return = array('level'=>0);
  while ($data=mysqli_fetch_assoc($hasil)){
        if ($level == $data['level']) {
            $return['level'] = $data['level'];
            
            break;                                                                
        }           
  }
  return $return;
} 


?>





  
	</div>

</body>
</html>