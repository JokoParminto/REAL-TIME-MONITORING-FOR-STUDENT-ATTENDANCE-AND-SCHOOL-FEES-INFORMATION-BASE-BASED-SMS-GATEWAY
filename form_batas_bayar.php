<?php
	include("header.php");
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Monitoring</title>
</head>
<script>
function myFunction() {
    var x = document.getElementById("fname");
    
    var sisa = 150 - x.value.length
    var karakter = "sisa karater";
    document.getElementById( 'sisa').innerHTML=sisa;
}
</script>

<body>
	<div class="container">
<form class="form-horizontal" action='simpan_batas_pembayaran.php' method='POST'>


<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Id Pegawai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="id" value= '<?php echo $id?>' readonly>
    </div>
  </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Level</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="level" placeholder="Masukkan Level">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">jumlah Hari</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="hari" placeholder="Masukkan Jumlah hari">
    </div>
  </div>


    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Pesan</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="3" name="pesan" id="fname" maxlength="150" onkeyup="myFunction()"></textarea>
    </div>
</div>
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Pesan Siswa</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="3" name="pesan_siswa" id="fname" maxlength="150" onkeyup="myFunction()"></textarea>
    </div>
      </div>

<div class="form-group">
<div class="col-sm-10"  style ="text-align:right;">
        <span id="sisa"></span> sisa karakter
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