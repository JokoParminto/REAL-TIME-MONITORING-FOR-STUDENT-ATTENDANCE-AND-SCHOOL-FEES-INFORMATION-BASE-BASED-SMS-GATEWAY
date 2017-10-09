<?php
	include("header.php");
?>
<?php
	include("fusion.php");
?>
<script src="chart/js/fusioncharts.js"></script>
<script src="chart/js/themes/fusioncharts.theme.fint.js"></script>

    <html>

    <head>
        <title>FusionCharts | Multi-Series Chart using PHP and MySQL</title>
       
    </head>

    <body>

        <?php


$tahun_masuk = $_POST['tahun_masuk'];
$tahun       = $_POST['tahun'];

  $strQuery = "SELECT left(batas_bayar, 7) as bulan,
		COUNT(if(status='Lunas',1,null)) as jum_lunas,
		COUNT(if(status='belum',1,null)) as jum_belum
FROM pembayaran_spp
	JOIN siswa USING (nis)
where tahun_masuk = '$tahun_masuk' and tahun = '$tahun'
group by left (batas_bayar, 7)";

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
            "caption"=>"Grafik Pembayaran SPP",
            "subcaption"=> "Periode 1 tahun",
            "yaxismaxvalue"=> "20",
            "decimals"=> "0",
            "numbersuffix"=> " Siswa",
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
          
          while($row = mysqli_fetch_array($result)) {
          array_push($categoryArray, array(
            "label" => $row['bulan']));
            array_push($dataseries1, array(
            "value" => $row['jum_lunas']));
            array_push($dataseries2, array(
            "value" => $row['jum_belum']));
          }
        
       
      $arrData["categories"]=array(array("category"=>$categoryArray));
      //$arrData["dataset"] = array(array("data"=>$dataseries1), 
      //                            array("data"=>$dataseries2));
      $arrData["dataset"] = array(array("seriesName"=> "Lunas", "data"=>$dataseries1), 
      array("seriesName"=> "Belum Lunas",   "data"=>$dataseries2));

      $jsonEncodedData = json_encode($arrData);
      $msChart = new FusionCharts("mscombi2d", "chart1" , "750", "400", "chart-container", "json", $jsonEncodedData);
      $msChart->render();
      $connect->close();

   }

?>

            <center>
                <div id="chart-container">Chart will render here!</div>
            </center>
    </body>

    </html>