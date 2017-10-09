<?php
	
	$nip         = $_POST['nip'];
	$nama        = $_POST['nama'];
	$alamat      = $_POST['alamat'];
   	$no_hp       = $_POST['no_hp'];
    $pass        = md5($_POST['pass']);

$dataValid	="YA";

if (strlen(trim($nip))==0){
		echo "nip harus di isi.. <br/>";
		$dataValid="Tidak";
	}
if (strlen(trim($nama))==0){
		echo "nama harus di isi.. <br/>";
		$dataValid="Tidak";
	}
if (strlen(trim($alamat))==0){
		echo "Alamat Harus Diisi.. <br/>";
		$dataValid="Tidak";
	}
  if (strlen(trim($no_hp))==0){
  		echo "no_hp harus di isi.. <br/>";
  		$dataValid="Tidak";
  	}
 if (strlen(trim($pass))==0){
  		echo "Password harus di isi.. <br/>";
  		$dataValid="Tidak";
  	}
if ($dataValid == "Tidak") {
			echo "Masih Ada Kesalahan, silahkan perbaiki! </br>";
			echo "<input type='button' value='Kembali';
				onClick='self.history.back()'>";
				exit;
	}

	include "connect.php";
	$query=mysqli_query($connect, "insert into pegawai (nip, nama, alamat, no_hp, pass)
						values('$nip','$nama', '$alamat', '$no_hp', '$pass')");

						echo $query;
	if(!$query) die(mysql_error());
	header('Location:berhasil_admin.php');
	
?>
