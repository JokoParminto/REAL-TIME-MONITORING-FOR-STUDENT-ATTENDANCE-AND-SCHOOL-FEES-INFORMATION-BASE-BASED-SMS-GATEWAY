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
    
 
     $query="select * from batas_pembayaran ";
  

     $hasil=mysqli_query($connect, $query);
    

                        //<!-- /.panel-heading -->
                       echo  "<div class='panel-body'>";
                         echo "<table width='100%' class='table table-striped'>";
                               echo " <thead>
                                    <tr>
                                        <th>Level</th>
                                        <th>Hari</th>
                                        <th>Pesan</th>
                                        <th>Pesan Siswa</th>
                                        <th>Aksi</th>
                                        
                                    </tr>
                                </thead>";

            while ($data=mysqli_fetch_assoc($hasil)){


                                echo 
                                "<tbody>
                                   <tr class='odd gradeX'>
                                   <td>".$data['level']."</td>
                                   <td>".$data['hari']."</td>
                                   <td>".$data['pesan']."</td>
                                   <td>".$data['pesan_siswa']."</td>
                                   <td><a href='edit_batas_pembayaran.php?level={$data['level']}'><input type='submit' class='btn btn-primary' value='Edit'></a>
                                   <a href='hapus_batas_pembayaran.php?level={$data['level']}'><input type='submit' class='btn btn-primary' value='Delete'></a>
                                   </td>

                                </tbody>";
                                                                                       
                                 
                                 
                                 } 
                            echo "</table>";


                             ?>
   


  </div>
	

</body>
</html>