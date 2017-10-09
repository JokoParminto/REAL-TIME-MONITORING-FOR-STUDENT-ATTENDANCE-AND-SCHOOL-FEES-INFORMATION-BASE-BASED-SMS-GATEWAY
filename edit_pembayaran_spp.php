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
	if (isset($_GET['id_pembayaran'])) {
	$id_pembayaran = $_GET['id_pembayaran'];
	}
	$query = "SELECT nis, nama,  id_pembayaran, periode,  level, tgl_bayar, status 
                
                FROM pembayaran_spp
                 JOIN siswa USING (nis)
                WHERE id_pembayaran = '$id_pembayaran'
                ORDER BY  (nis)  ";
                
	$hasil = mysqli_query($connect, $query);
		if (!$hasil) die ("Gagal Query");
	$data = mysqli_fetch_assoc($hasil);
    $id_pembayaran =$data['id_pembayaran'];
    $nis = $data['nis'];
    $nama = $data['nama'];
    $tgl_bayar = $data['tgl_bayar'];
    $periode = $data['periode'];
    $level = $data['level'];
    $status = $data['status'];

	
?>

<body>
	<div class="container">
<form class="form-horizontal" action='simpan_edit_batas_pembayaran_spp.php' method='POST'>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">ID Pembayaran</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="id_pembayaran"  value='<?php echo $id_pembayaran; ?>' readonly >
    </div>
  </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">NIS</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nis"  value='<?php echo $nis; ?>' readonly >
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama"  value='<?php echo $nama; ?>' readonly >
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Periode</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="periode"  value='<?php echo $periode; ?>' readonly >
    </div>
  </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Level</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="level"  value='<?php echo $level; ?>' >
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Bayar</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="tgl_bayar"  value='<?php echo $tgl_bayar; ?>' >
    </div>
  </div>

 <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
    <div class="col-sm-10">   
    <select id="disabledSelect" class="form-control" name="status">
              <option value="belum">Belum Bayar</option>
               <option value="Lunas">Lunas</option>

            </select>
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