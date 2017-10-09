<?php
	include("header.php");
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <?php
  if ($level==1){
        echo "<title>Daftar Pembayaran SPP Perperiode</title>";

  }
  ?>
	<title>Laporan Pembayaran SPP Perperiode</title>
</head>
<body>
	<div class="container">

<?php

     include "connect.php";
    
$tahun_masuk = $_POST['tahun_masuk'];
$tahun = $_POST['tahun'];
$kelas =$_POST['kelas'];
     $query="SELECT nis, nama, jk,
                    SUM(IF(bulan='01', bayar, 0)) as jan,
                    SUM(IF(bulan='02', bayar, 0)) as feb,
                    SUM(IF(bulan='03', bayar, 0)) as mar,
                    SUM(IF(bulan='04', bayar, 0)) as apr,
                    SUM(IF(bulan='05', bayar, 0)) as mei,
                    SUM(IF(bulan='06', bayar, 0)) as jun,
                    SUM(IF(bulan='07', bayar, 0)) as jul,
                    SUM(IF(bulan='08', bayar, 0)) as agus,
                    SUM(IF(bulan='09', bayar, 0)) as sep,
                    SUM(IF(bulan='10', bayar, 0)) as okt,
                    SUM(IF(bulan='11', bayar, 0)) as nov,
                    SUM(IF(bulan='12', bayar, 0)) as des
                FROM (
                    SELECT nis, nama,jk, substr(batas_bayar, 6,2) as bulan,
                        IF(status='Lunas', jumlah_spp,0) as bayar
                FROM 
                    pembayaran_spp
                JOIN siswa USING (nis)
                JOIN spp USING (tahun_masuk)
                WHERE tahun_masuk = '$tahun_masuk' AND tahun = '$tahun' AND kelas='$kelas') qbayar
                GROUP BY nis, nama";
  

     $hasil=mysqli_query($connect, $query);
    

                        //<!-- /.panel-heading -->
                       echo  "<div class='panel-body'>";
                         echo "<table width='100%' class='table table-striped'>";
                               echo " <thead>
                                    <tr>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Januari</th>
                                        <th>Febuari</th>
                                        <th>Maret</th>
                                        <th>April</th>
                                        <th>Mei</th>
                                        <th>Juni</th>
                                        <th>Juli</th>
                                        <th>Agustus</th>
                                        <th>September</th>
                                        <th>Oktober</th>
                                        <th>November</th>
                                        <th>Desember</th>
                                        
                                    </tr>
                                </thead>";

            while ($data=mysqli_fetch_assoc($hasil)){


                                echo 
                                "<tbody>
                                   <tr class='odd gradeX'>
                                   <td>".$data['nis']."</td>
                                   <td>".$data['nama']."</td>
                                   <td>".$data['jk']."</td>
                                   <td>".$data['jan']."</td>
                                   <td>".$data['feb']."</td>
                                   <td>".$data['mar']."</td>
                                   <td>".$data['apr']."</td>
                                   <td>".$data['mei']."</td>
                                   <td>".$data['jun']."</td>
                                   <td>".$data['jul']."</td>
                                   <td>".$data['agus']."</td>
                                   <td>".$data['sep']."</td>
                                   <td>".$data['okt']."</td>
                                   <td>".$data['nov']."</td>
                                   <td>".$data['des']."</td>
                                  
                                </tbody>";
                                                                                       
                                 
                                 
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