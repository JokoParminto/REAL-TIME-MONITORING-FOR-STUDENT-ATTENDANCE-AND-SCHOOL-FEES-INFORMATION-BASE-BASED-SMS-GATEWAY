<?php
	include("header.php");
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <?php
  if ($level==1){
        echo "<title>Daftar Presensi Perbulan</title>";

  }
  ?>
	<title>Laporan Presensi Perbulan</title>
</head>
<body>
	<div class="container">

<?php

     include "connect.php";
    
$kelas = $_POST['kelas'];
$tgl = $_POST['tgl'];
$tgl1 = $_POST['tgl1'];

     $query="SELECT nis, nama , kelas, jk,
                COUNT(IF(keterangan ='masuk',1,NULL)) AS masuk,
                COUNT(IF(keterangan='sakit',1,NULL)) AS sakit,
                COUNT(IF(keterangan='ijin',1,NULL)) AS ijin,
                COUNT(IF(keterangan='tanpa keterangan',1,NULL)) AS alpa
            FROM presensi
	        JOIN siswa USING (nis)
                WHERE (tgl BETWEEN '$tgl' AND '$tgl1') and kelas='$kelas'
                GROUP BY  (nis)";
    

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
                                        <th>Masuk</th>
                                        <th>Sakit</th>
                                        <th>Ijin</th>
                                        <th>Tanpa Keterangan</th>
                                        
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
                                   <td>".$data['masuk']."</td>
                                   <td>".$data['sakit']."</td>
                                   <td>".$data['ijin']."</td>
                                   <td>".$data['alpa']."</td>
                                                                     
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

<?php
	include("fusion.php");
?>
<script src="chart/js/fusioncharts.js"></script>
<script src="chart/js/themes/fusioncharts.theme.fint.js"></script>

    

        <?php


$kelas = $_POST['kelas'];
$tgl = $_POST['tgl'];
$tgl1 = $_POST['tgl1'];

  $strQuery = "SELECT substr(tgl, 9,2) as tgl ,
                    COUNT(IF(keterangan ='masuk',1,NULL)) AS masuk,
                    COUNT(IF(keterangan='sakit',1,NULL)) AS sakit,
                    COUNT(IF(keterangan='ijin',1,NULL)) AS ijin,
                    COUNT(IF(keterangan='tanpa keterangan',1,NULL)) AS alpa
                FROM presensi
                    JOIN siswa USING (nis)
                        WHERE (tgl BETWEEN '$tgl' AND '$tgl1') and kelas='$kelas'
                        GROUP BY  (tgl)";

  $result = $connect->query($strQuery) or exit("Error code ({$connect->errno}): {$connect->error}");
  if ($result) {

  $arrData = array(
        "chart" => array(
            // "caption"=> "Grafik Pembayaran SPP",
            // "subCaption"=> "Periode 1 tahun",
            // "xAxisname"=> "Bulan",
            // "yAxisName"=> "Jumlah",
            // "legendItemFontColor"=> "#666666",
            // "theme"=> "zune"
            "caption"=>"Grafik Presensi",
            "subcaption"=> "Periode 1 Bulan",
            "yaxismaxvalue"=> "20",
            "decimals"=> "0",
            "numbersuffix"=> "",
            "placevaluesinside"=> "1",
            "rotatevalues"=> "0",
            "divlinealpha"=> "50",
            "plotfillalpha"=> "80",
            "drawCrossLine"=> "1",
            "crossLineColor"=> "#00b7cc",
            "crossLineAlpha"=> "100",
            "theme"=> "zune"
            )
          );

          $categoryArray=array();
          $dataseries1=array();
          $dataseries2=array();
          $dataseries3=array();
          $dataseries4=array();
          
          while($row = mysqli_fetch_array($result)) {
          array_push($categoryArray, array(
            "label" => $row['tgl']));
            array_push($dataseries1, array(
            "value" => $row['masuk']));
            array_push($dataseries2, array(
            "value" => $row['sakit']));
            array_push($dataseries3, array(
            "value" => $row['ijin']));
            array_push($dataseries4, array(
            "value" => $row['alpa']));
          }
        
       
      $arrData["categories"]=array(array("category"=>$categoryArray));
      //$arrData["dataset"] = array(array("data"=>$dataseries1), 
      //                            array("data"=>$dataseries2));
      $arrData["dataset"] = 
            array(array("seriesName"=> "Masuk", "data"=>$dataseries1), 
                 array("seriesName"=> "Sakit",   "data"=>$dataseries2),
                 array("seriesName"=> "Ijin", "data"=>$dataseries3),
                    array("seriesName"=> "alpa", "data"=>$dataseries4));

      $jsonEncodedData = json_encode($arrData);
      $msChart = new FusionCharts("mscombi2d", "chart1" , "1200", "500", "chart-container", "json", $jsonEncodedData);
      $msChart->render();
      $connect->close();

   }

?>

            <center>
                <div id="chart-container">Chart will render here!</div>
            </center>
    </body>

    </html>



  
	</div>

</body>
</html>