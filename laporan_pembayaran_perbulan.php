<?php
	include("header.php");
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <?php
  if ($level==1){
        echo "<title>Daftar Pembayaran SPP Perbulan</title>";

  }
  ?>
	<title>Laporan pembayaran SPP Perbulan</title>
</head>
<body>
	<div class="container">

<?php

     include "connect.php";
    
$kelas = $_POST['kelas'];
$periode = $_POST['periode'];

     $query="SELECT id_pembayaran, nis, nama , kelas, jk, status
                FROM pembayaran_spp
	                JOIN siswa USING (nis)
                         WHERE SUBSTR(batas_bayar, 1,7)= '$periode'  AND kelas='$kelas'
                            ORDER BY  (status)";
  

     $hasil=mysqli_query($connect, $query);
    

                        //<!-- /.panel-heading -->
                       echo  "<div class='panel-body'>";
                         echo "<table width='100%' class='table table-striped'>";
                               echo " <thead>
                                    <tr>
                                        
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Status</th>";
                                     if($level == 1){   
                                       echo  "<th>Aksi</th>";
                                     }  
                                    echo "
                                    </tr>
                                </thead>";

            while ($data=mysqli_fetch_assoc($hasil)){


                                echo 
                                "<tbody>
                                   <tr class='odd gradeX'>
                                   <td>".$data['nis']."</td>
                                   <td>".$data['nama']."</td>
                                   <td>".$data['kelas']."</td>
                                   <td>".$data['jk']."</td>
                                   <td>".$data['status']."</td>";
                        if($level == 1){  
                                   echo " 
                                   <td><a href='edit_pembayaran_spp.php?id_pembayaran={$data['id_pembayaran']}'>
                                            <input type='submit' class='btn btn-primary' value='Edit'></a></td>";
                                   
                               
                                                                                       
                        } 
                            echo  "</tbody>";     
                                 } 
                            echo "</table>";


                             ?>
   




<button onclick="myFunction()">Print</button>
  
	</div>
<script>
function myFunction() {
    window.print();
}
</script>

</body>
</html>