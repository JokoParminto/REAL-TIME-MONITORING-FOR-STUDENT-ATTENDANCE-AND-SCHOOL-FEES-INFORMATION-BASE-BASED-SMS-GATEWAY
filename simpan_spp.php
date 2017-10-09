<?php
	$tahun_masuk   		= $_POST['tahun_masuk'];
	$jumlah_spp			= $_POST['jumlah_spp'];
    $id_pegawai 		=$_POST["id_pegawai"];
$dataValid	="YA";

if (strlen(trim($tahun_masuk))==0){
		echo "tahun masuk harus di isi.. <br/>";
		$dataValid="Tidak";
	}
if (strlen(trim($jumlah_spp))==0){
		echo "jumlah spp harus di isi.. <br/>";
		$dataValid="Tidak";
	}

	  if (strlen(trim($id_pegawai))==0){
  		echo "<br/>";
  		$dataValid="Tidak";
  	}
if ($dataValid == "Tidak") {
			echo "Masih Ada Kesalahan, silahkan perbaiki! </br>";
			echo "<input type='button' value='Kembali';
				onClick='self.history.back()'>";
				exit;
	}

	include "connect.php";
	$query=mysqli_query($connect, "insert into spp (tahun_masuk, jumlah_spp, id_pegawai)
						values('$tahun_masuk','$jumlah_spp', '$id_pegawai')");
	if(!$query) die(mysql_error());
	header('Location:berhasil_spp.php');


?>
