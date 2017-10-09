<?php
	include("header.php");
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
  <?php
  if ($level==1){
        echo "<title>Daftar Presensi Perhari</title>";

  }
  ?>
	<title>Laporan Presensi Perhari</title>
</head>
<body>
	<div class="container">
	



<?php

     include "connect.php";
       $tanggal = $_POST['tanggal'];
       $kelas = $_POST['kelas'];
     
     $query=" SELECT siswa.nis, siswa.nama, siswa.kelas, presensi.tgl, presensi.keterangan 
            FROM presensi  
               INNER JOIN siswa ON presensi.nis = siswa.nis WHERE presensi.tgl= '$tanggal' AND siswa.kelas='$kelas' ";
    

     $hasil=mysqli_query($connect, $query);
    

                        //<!-- /.panel-heading -->
                       echo  "<div class='panel-body'>";
                         echo "<table width='100%' class='table table-striped'>";
                               echo " <thead>
                                     <tr>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        
                                    </tr>
                                </thead>";

            while ($data=mysqli_fetch_assoc($hasil)){


                                echo 
                                "<tbody>
                                   <tr class='odd gradeX'>
                                   <td>".$data['nis']."</td>
                                   <td>".$data['nama']."</td>
                                   <td>".$data['kelas']."</td>
                                    <td>".$data['tgl']."</td> 
                                    <td>".$data['keterangan']."</td>                               </tbody>";
                                                                                       
                                 
                                 
                                 } 
                            echo "</table>";


                             ?>
   
<button onclick="myFunction()">Print</button>
<script>
function myFunction() {
    window.print();
}
</script>

  
	</div>

</body>
</html>