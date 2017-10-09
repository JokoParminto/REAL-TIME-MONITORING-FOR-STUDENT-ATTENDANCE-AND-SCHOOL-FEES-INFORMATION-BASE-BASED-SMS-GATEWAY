<?php
	include("check.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="lib/css/jquery-ui.css">
  <script src="date/js/jquery-1.10.2.min.js"></script>
  <script src="date/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="date/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="date/css/datepicker.css"/>
 <link rel="jquery.js">
<style type="text/css">
  .bs-example{
      margin: 20px;
    }
</style>


<script src="date/js/bootstrap.js"></script>
 <script src="date/js/bootstrap.min.js"></script>
    <script src="date/js/bootstrap-datepicker.js"></script>
  
 
<script>
    $(".tanggale").datepicker({autoclose: true, todayHighlight: true});
    </script>

    
</head>
<body>
<div class="bs-example">
    <nav id="myNavbar" class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
        <?php
                if($level == 1){       
                    echo "<a class='navbar-brand'>Pegawai</a>";
                }

                if($level == 2){       
                    echo "<a class='navbar-brand'>Kepala Sekolah</a>";
                }
                if($level == 3){       
                    echo "<a class='navbar-brand'>Bendahara</a>";
                }
                if($level == 4){       
                    echo "<a class='navbar-brand'>Wali Kelas</a>";
                }
        ?>
       
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="home.php">Home</a></li>
                     
<?php  
         if($level == 1){          
                    echo "<li class='dropdown'>";
                        echo "<a href='#' data-toggle='dropdown' class='dropdown-toggl'>Form Input<b class='caret'></b></a>";
                        echo "<ul class='dropdown-menu'>";
                            echo "<li><a href='form_siswa.php'>Input Siswa</a></li>";
                            echo "<li><a href='form_admin.php'>Input Admin</a></li>";
                            echo "<li><a href='tampil_presensi.php'>Input Presensi</a></li>";
                            echo "<li><a href='form_batas_bayar.php'>Input Tabel Batas Pembayaran</a></li>";
                        echo "</ul>";
                    echo "</li>";

                   echo "<li class='dropdown'>";
                        echo "<a href='#' data-toggle='dropdown' class='dropdown-toggle'>Tabel<b class='caret'></b></a>";
                        echo "<ul class='dropdown-menu'>";
                            echo "<li><a href='tabel_siswa.php'>Tabel Siswa</a></li>";
                            echo "<li><a href='tampil_presensi.php'>Tabel Presensi</a></li>";
                             echo "<li><a href='batas_pembayaran.php'>Tabel Batas Pembayaran</a></li>";
                             echo "<li><a href='spp.php'>Tabel SPP</a></li>";
                        echo "</ul>";
                    echo "</li>";
                   

                    echo "<li class='dropdown'>";
                      echo "<a href='#' data-toggle='dropdown' class='dropdown-toggle'>Daftar <b class='caret'></b></a>";
                        echo "<ul class='dropdown-menu'>";
                            echo "<li><a href='laporan_presensi_pertanggal.php'>Daftar Presensi Pertanggal</a></li>";
                            echo "<li><a href='laporan_presensi_perbulan.php'>Daftar Presensi Per Bulan</a></li>";
                            echo "<li><a href='laporan_pembayaran_spp_perbulan.php'>Daftar Pembayaran SPP Per Bulan</a></li>";
                            echo "<li><a href='laporan_pembayaran_spp.php'>Daftar Pembayaran SPP Per Periode</a></li>";
                echo "</ul>";
                echo "</li>";
                echo "<li><a href='tagihan.php'>Buat Tagihan</a></li>";
                echo "<li><a href='cek_telat_bayar.php'>Cek Telat Bayar SPP</a></li>";

         };


 if($level == 2){
        echo "<li class='dropdown'>";
                      echo "<a href='#' data-toggle='dropdown' class='dropdown-toggle'>Laporan <b class='caret'></b></a>";
                        echo "<ul class='dropdown-menu'>";
                            echo "<li><a href='laporan_presensi_pertanggal.php'>Laporan Presensi Pertanggal</a></li>";
                            echo "<li><a href='laporan_presensi_perbulan.php'>Laporan Presensi Per Bulan</a></li>";
                            echo "<li><a href='laporan_pembayaran_spp_perbulan.php'>Laporan Pembayaran SPP Per Bulan</a></li>";
                            echo "<li><a href='laporan_pembayaran_spp.php'>Laporan Pembayaran SPP Per Periode</a></li>";
                            echo "<li><a href='laporan_kepala_perbulan.php'>Laporan Pembayaran SPP Belum Lunas Perbulan</a></li>";
                            echo "<li><a href='laporan_kepala.php'>Laporan Pembayaran SPP Belum Lunas Perperiode</a></li>";
               echo "</ul>";
                echo "</li>";
    };
                

if($level == 3){
                  echo "<li class='dropdown'>";
                      echo "<a href='#' data-toggle='dropdown' class='dropdown-toggle'>Laporan <b class='caret'></b></a>";
                        echo "<ul class='dropdown-menu'>";
                            echo "<li><a href='laporan_pembayaran_spp_perbulan.php'>Laporan Pembayaran SPP Per Bulan</a></li>";
                            echo "<li><a href='laporan_pembayaran_spp.php'>Laporan Pembayaran SPP Per Periode</a></li>";
               echo "</ul>";
               echo "</li>";

              echo " <li class='dropdown'>";
                       echo "<a href='#' data-toggle='dropdown' class='dropdown-toggle'>Grafik<b class='caret'></b></a>";
                        echo "<ul class='dropdown-menu'>";
                            echo "<li><a href='grafik_pembayaran_spp.php'>Grafik Pembayaran spp perperiode</a></li>";
                                                       
                       echo "</ul>";
                   
                        echo "</li>";
                };

if($level == 4){
                    echo "<li class='dropdown'>";
                      echo "<a href='#' data-toggle='dropdown' class='dropdown-toggle'>Laporan <b class='caret'></b></a>";
                        echo "<ul class='dropdown-menu'>";
                            echo "<li><a href='laporan_presensi_pertanggal.php'>Laporan Presensi Pertanggal</a></li>";
                            echo "<li><a href='laporan_presensi_perbulan.php'>Laporan Presensi Per Bulan</a></li>";
                            echo "<li><a href='laporan_pembayaran_spp_perbulan.php'>Laporan Pembayaran SPP Per Bulan</a></li>";
                            echo "<li><a href='laporan_pembayaran_spp.php'>Laporan Pembayaran SPP Per Periode</a></li>";
                echo "</ul>";
                echo "</li>";

};
?>              

                
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pegawai :<?php echo $nama;?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="logout.php">Logout</a></li>
                         </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>
</body>
</html>                                   