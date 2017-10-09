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
    
 
     $query="select * from spp ";
  

     $hasil=mysqli_query($connect, $query);
    

                        //<!-- /.panel-heading -->
                       echo  "<div class='panel-body'>";
                         echo "<table width='100%' class='table table-striped'>";
                               echo " <thead>
                                    <tr>
                                        <th>Tahun Masuk</th>
                                        <th>Jumlah SPP</th>
                                        <th>Id Pegawai</th>
                                        <th>Aksi</th>
                                        
                                    </tr>
                                </thead>";

            while ($data=mysqli_fetch_assoc($hasil)){


                                echo 
                                "<tbody>
                                   <tr class='odd gradeX'>
                                   <td>".$data['tahun_masuk']."</td>
                                   <td>"."Rp."." ".$data['jumlah_spp']."</td>
                                   <td>".$data['id_pegawai']."</td>
                                   <td><a href='edit_spp.php?tahun_masuk={$data['tahun_masuk']}'><input type='submit' class='btn btn-primary' value='Edit'></a>
                                   <a href='hapus_spp.php?tahun_masuk={$data['tahun_masuk']}'><input type='submit' class='btn btn-primary' value='Delete'></a>
                                   </td>

                                </tbody>";
                                                                                       
                                 
                                 
                                 } 
                            echo "</table>";


                             ?>
   

	<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
	<a href='form_spp.php'><input type='submit' class='btn btn-primary' value='Tambah'></a>
     
    </div>

  </div>
	

</body>
</html>