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
<?php
$nis='';
	if (isset($_GET['nis'])) {
	$nis = $_GET['nis'];
	}
	$query = "select * from siswa where nis = $nis";
	$hasil = mysqli_query($connect, $query);
		if (!$hasil) die ("Gagal Query");
	$data = mysqli_fetch_assoc($hasil);
	$nis        = $data['nis'];
  $nis_lama = $data['nis'];
	$nama       = $data['nama'];
  $no_hp_siswa       = $data['no_hp_siswa'];
	$kelas      = $data['kelas'];
	$alamat       = $data['alamat'];
	$jk         = $data['jk'];
	$tahun_masuk = $data['tahun_masuk'];
	$nama_wali  = $data['nama_wali'];
	$no_hp_wali      = $data['no_hp_wali'];
  $id_pegawai      = $data['id_pegawai'];

?>
	<div class="container">
		

<form class="form-horizontal" action='simpan_edit_siswa.php?nislama=<?php echo $nis_lama; ?>'  method='POST'>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Id Pegawai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="id_pegawai" value='<?php echo $id_pegawai; ?>'readonly>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">NIS</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nis" value='<?php echo $nis; ?>' placeholder="Masukkan NIS">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama" value='<?php echo $nama; ?>' placeholder="Masukkan Nama">
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Kelas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="kelas" value='<?php echo $kelas; ?>' placeholder="Masukkan Nama">
    </div>
  </div>

    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="3" name="alamat" ><?php echo $alamat; ?></textarea>
    </div>
  </div>

 <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
    <div class="col-sm-10">   
    <label class="radio-inline">
      <input type="radio"name="jk" id="inlineRadio1" value="Laki-laki" checked> Laki-Laki
    </label>
    <label class="radio-inline">
      <input type="radio" name="jk" id="inlineRadio2" value="perempuan" checked> Perempuan
    </label>
        </div>
  </div>
  

<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
    <div class="col-sm-10">   
    <select id="disabledSelect" class="form-control" name="tahun_masuk">
         <option>Pilih Tahun Angkatan</option>
             <option value="2015">2015</option>
               <option value="2016">2016</option>
                 <option value="2017">2017</option>
            </select>
        </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">No. Hp Siswa</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="no_hp_siswa" value='<?php echo $no_hp_siswa; ?>' placeholder="Masukkan Nomor Hp Siswa">
    </div>
  </div>

   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nama Wali</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama_wali" value='<?php echo $nama_wali; ?>' placeholder="Masukkan Nama Wali">
    </div>
  </div>

 <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">No Handphone Wali</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="no_hp_wali" value='<?php echo $no_hp_wali; ?>' placeholder="Masukkan Nama Wali">
    </div>
  </div>

  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-primary" onClick='history.go(-1);' >Back</button>
    </div>
  </div>
</form>
  </div>



	</div>

</body>
</html>