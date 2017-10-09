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
    <form action='simpan_presensi.php' method='POST'>
<?php

     include "connect.php";
     
       $kelas = $_POST['kelas'];
     $query="select nis, nama, kelas from siswa
             where kelas ='$kelas' ";
    
   

     $hasil=mysqli_query($connect, $query);
    

                        //<!-- /.panel-heading -->
                       echo  "<div class='panel-body'>";
                         echo "<table width='100%' class='table table-striped'>";
                               echo " <thead>
                                     <tr>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Keterangan</th>
                                        
                                    </tr>
                                </thead>";

            while ($data=mysqli_fetch_assoc($hasil)){


                                echo 
                                "<tbody>
                                   <tr class='odd gradeX'>
                                   <td><input type='text' class='form-control' name = 'nis[]' value='{$data['nis']}' readonly  ></td>
                                   <td>".$data['nama']."</td>
                                   <td>".$data['kelas']."</td>
                                    <td>  <select name='keterangan[]' class='form-control'>
                                    <option value='masuk'>Masuk</option>
                                    <option value='sakit'>Sakit</option>
                                    <option value='ijin'>Ijin</option>
                                    <option value='tanpa keterangan'>Tidak Masuk tanpa Keterangan</option>
                                                    </select>
                                </td>
                                </tbody>";
                                                                                       
                                 
                                 
                                 } 
                            echo "</table>";


                             ?>
   
 <button type="submit" class="btn btn-default">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                            </form>

  </div>

</body>
</html>



