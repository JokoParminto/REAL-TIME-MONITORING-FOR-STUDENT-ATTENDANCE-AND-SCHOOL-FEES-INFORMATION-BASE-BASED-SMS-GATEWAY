<?php
	include("header.php");
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Monitoring</title>
</head>


<?php
$level='';
	if (isset($_GET['tahun_masuk'])) {
	$tahun_masuk = $_GET['tahun_masuk'];
	}
	$query = "select * from spp where tahun_masuk = '$tahun_masuk'";
	$hasil = mysqli_query($connect, $query);
		if (!$hasil) die ("Gagal Query");
	$data = mysqli_fetch_assoc($hasil);
	$tahun_masuk_lama        = $data['tahun_masuk'];
	$jumlah_spp       = $data['jumlah_spp'];
    $tahun_masuk        = $data['tahun_masuk'];
	
	
?>

<body>
	<div class="container">
<form class="form-horizontal" action='simpan_edit_spp.php?tahun_masuk_lama=<?php echo $tahun_masuk_lama; ?>' method='POST'>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Id Pegawai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="id_pegawai"  value='<?php echo $id; ?>' readonly>
    </div>
  </div>


<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Tahun Masuk</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tahun_masuk"  value='<?php echo $tahun_masuk; ?>' placeholder="Masukkan Tahun Masuk">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Jumlah SPP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="jumlah_spp"  value='<?php echo $jumlah_spp; ?>' placeholder="Masukkan Jumlah spp">
    </div>
  </div>

  
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset"   class="btn btn-primary">Reset</button>
    </div>
  </div>

</form>



  
	</div>

</body>
</html>