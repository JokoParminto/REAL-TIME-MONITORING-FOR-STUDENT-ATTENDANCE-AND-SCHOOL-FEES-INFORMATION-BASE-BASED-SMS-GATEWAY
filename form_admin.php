<?php
  include("header.php");
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Form Input Admin</title>
</head>
<body>
  <div class="container">
    
 

<form class="form-horizontal" action='simpan_admin.php' method='POST'>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">NIP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nip" placeholder="Masukkan NIP">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
    </div>
  </div>
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="3" name="alamat" ></textarea>
    </div>
  </div>

    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">No Handphone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="no_hp" placeholder="Masukkan Nomor Hnadphone">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass">
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
