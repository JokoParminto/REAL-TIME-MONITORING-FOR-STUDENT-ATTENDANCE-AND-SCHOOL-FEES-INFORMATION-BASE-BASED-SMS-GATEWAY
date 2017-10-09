<!doctype html>
<html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Monitoring</title>
</head>
<body>
  <div class="container">
<?php

     include "connect.php";
    
     $kelas = $_POST['kelas'];
     $query="select * from siswa where kelas ='$kelas'";
  

     $hasil=mysqli_query($connect, $query);
    

                        //<!-- /.panel-heading -->
                       echo  "<div class='panel-body'>";
                         echo "<table width='100%' class='table table-striped'>";
                               echo " <thead>
                                    <tr>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Alamat</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No. Hp Siswa</th>
                                        <th>Tahun Masuk</th>
                                        <th>Nama Wali</th>
                                        <th>No. Hp Wali</th>
                                          <th>Id Pegawai</th>
                                       <th>Aksi</th>
                                        
                                    </tr>
                                </thead>";

            while ($data=mysqli_fetch_assoc($hasil)){


                                echo 
                                "<tbody>
                                   <tr class='odd gradeX'>
                                   <td>".$data['nis']."</td>
                                   <td>".$data['nama']."</td>
                                   <td>".$data['kelas']."</td>
                                   <td>".$data['alamat']."</td>
                                   <td>".$data['jk']."</td>
                                   <td>".$data['no_hp_siswa']."</td>
                                   <td>".$data['tahun_masuk']."</td>
                                   <td>".$data['nama_wali']."</td>
                                   <td>".$data['no_hp_wali']."</td>
                                   <td>".$data['id_pegawai']."</td>
                                  <td><a href='edit_siswa.php?nis={$data['nis']}'><input type='submit' value='Edit'></a></td>

                                </tbody>";
                                                                                       
                                 
                                 
                                 } 
                            echo "</table>";


                             ?>
   


  </div>

</body>
</html>



