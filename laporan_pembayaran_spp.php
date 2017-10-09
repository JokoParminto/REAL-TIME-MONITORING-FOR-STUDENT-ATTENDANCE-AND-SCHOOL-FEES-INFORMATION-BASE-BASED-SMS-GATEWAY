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
		
<form class="form-horizontal" action='laporan_permbayaran_spp_perperiode.php' method='POST'>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Kelas</label>
    
    <div class="col-sm-10">
     <select  class="form-control" name="kelas" >
         						<option>Pilih Kelas</option>
                                                    <?php
                                                         $queryb = ("select * from siswa group by kelas");
                                                         $connectb =mysqli_query($connect, $queryb);
                                                            while ($data=mysqli_fetch_assoc($connectb)){
                                                            echo "<option value='{$data['kelas']}'>{$data['kelas']}</option>";}?>
                                                </select>    
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Tahun Angkatan</label>
    <div class="col-sm-10">
     <select  class="form-control" name="tahun_masuk" >
         						<option>Pilih Tahun Angkatan</option>
                                                <?php
                                                         $query = ("select * from siswa group by tahun_masuk");
                                                         $connecti =mysqli_query($connect, $query);
                                                            while ($data=mysqli_fetch_assoc($connecti)){
                                                            echo "<option value='{$data['tahun_masuk']}'>{$data['tahun_masuk']}</option>";
                                                            }
                                                     ?>
                                                </select>    
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Periode</label>
    <div class="col-sm-10">
     <select  class="form-control" name="tahun" >
         						<option>Pilih Tahun Periode</option>
                                                    <?php
                                                         $queryv = ("select * from pembayaran_spp group by tahun");
                                                         $connectv =mysqli_query($connect, $queryv);
                                                            while ($datav=mysqli_fetch_assoc($connectv)){
                                                            echo "<option value='{$datav['tahun']}'>{$datav['tahun']}</option>";
                                                            }
                                                    ?>
                                                </select> 
    </div>
  </div>
  
   
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-primary">reset</button>
    </div>
  </div>
</form>

  
	</div>

</body>
</html>