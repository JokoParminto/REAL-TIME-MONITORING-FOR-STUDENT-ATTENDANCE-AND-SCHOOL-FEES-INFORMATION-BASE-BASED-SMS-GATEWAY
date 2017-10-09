<?php
	include("header.php");
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Monitoring</title>
 
</head>
   <?php include('connect.php'); ?>
 
               
<link rel="stylesheet" href="lib/css/jquery-ui.css">
  <script src="date/js/jquery-1.10.2.min.js"></script>
  <script src="date/js/bootstrap-datepicker.js"></script>
  

  <script>
  $( function() {
    $( "#tanggale" ).datepicker({
                format : "yyyy-mm",
            viewMode : "months",
            miniViewMode : "months"


    });
    
        
  });
  </script>

  <div class="container">
    
 

<form class="form-horizontal" action='laporan_pembayaran_perbulan.php' method='POST'>


 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Kelas</label>
    <div class="col-sm-10">
     <select  class="form-control" name="kelas" >
         						<option>Pilih Kelas</option>
                                                    <?php
                                                         $query = ("select * from siswa group by kelas");
                                                         $connect =mysqli_query($connect, $query);
                                                            while ($data=mysqli_fetch_assoc($connect)){
                                                            echo "<option value='{$data['kelas']}'>{$data['kelas']}</option>";}?>
                                                </select>    
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Periode</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  id="tanggale" name="periode" placeholder="Masukkan Periode">
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