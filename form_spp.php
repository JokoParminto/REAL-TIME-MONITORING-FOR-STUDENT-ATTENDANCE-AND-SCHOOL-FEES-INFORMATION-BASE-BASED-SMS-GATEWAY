
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
    
 

<form class="form-horizontal" action='simpan_spp.php' method='POST'>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Id Pegawai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="id_pegawai"  value='<?php echo $id; ?>' readonly >
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Tahun Masuk</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tahun_masuk" placeholder="Masukkan Tahun Masuk">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Jumlah SPP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="jumlah_spp" placeholder="Masukkan Jumlah SPP">
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
