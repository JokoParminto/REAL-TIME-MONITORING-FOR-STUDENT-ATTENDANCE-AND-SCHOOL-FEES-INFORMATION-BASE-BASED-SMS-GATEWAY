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
    
 

<form class="form-horizontal" action='simpan_siswa.php' method='POST'>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Id Pegawai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="id_pegawai"  value='<?php echo $id; ?>' readonly >
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">NIS</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nis" placeholder="Masukkan NIS">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Kelas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="kelas" placeholder="Masukkan Nama">
    </div>
  </div>

    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="3" name="alamat"></textarea>
    </div>
  </div>

 <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
    <div class="col-sm-10">   
    <label class="radio-inline">
      <input type="radio" name="jk" id="inlineRadio1" value="Laki-laki" checked> Laki-Laki
    </label>
    <label class="radio-inline">
      <input type="radio" name="jk" id="inlineRadio2" value="perempuan" checked> Perempuan
    </label>
        </div>
  </div>

<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Jenis Masuk</label>
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
    <label for="inputPassword3" class="col-sm-2 control-label">Nama Wali</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama_wali" placeholder="Masukkan Nama Wali">
    </div>
  </div>

 <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">No Handphone Wali</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="no_hp_wali" placeholder="Masukkan Nama Wali">
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
