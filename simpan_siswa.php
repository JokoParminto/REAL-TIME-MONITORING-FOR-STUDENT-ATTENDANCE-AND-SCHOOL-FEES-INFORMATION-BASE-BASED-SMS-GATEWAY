<?php
$nis       				= $_POST['nis'];
$nama      				= $_POST['nama'];
$kelas     				= $_POST['kelas'];
$alamat    				= $_POST['alamat'];
$jk        				= $_POST['jk'];
$tahun_masuk      = $_POST['tahun_masuk'];
$nama_wali        = $_POST['nama_wali'];
$no_hp_wali     	= $_POST['no_hp_wali'];
$id_pegawai 		=$_POST["id_pegawai"];
$dataValid	="YA";

if (strlen(trim($nis))==0){
		echo "nis harus di isi.. <br/>";
		$dataValid="Tidak";
	}
if (strlen(trim($nama))==0){
		echo "nama harus di isi.. <br/>";
		$dataValid="Tidak";
	}
	if (strlen(trim($kelas))==0){
			echo "kelas harus di isi.. <br/>";
			$dataValid="Tidak";
		}
if (strlen(trim($alamat))==0){
		echo "Alamat Harus Diisi.. <br/>";
		$dataValid="Tidak";
	}
	if (strlen(trim($jk))==0){
			echo "jenis kelamin harus di isi.. <br/>";
			$dataValid="Tidak";
		}
		if (strlen(trim($tahun_masuk))==0){
				echo "tahun masuk harus di isi.. <br/>";
				$dataValid="Tidak";
			}
			if (strlen(trim($nama_wali))==0){
					echo "nama wali harus di isi.. <br/>";
					$dataValid="Tidak";
				}
  if (strlen(trim($no_hp_wali))==0){
  		echo "no_hp harus di isi.. <br/>";
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
	$query=mysqli_query($connect, "insert into siswa (nis, nama,kelas, jk, alamat, tahun_masuk,
											nama_wali, no_hp_wali, id_pegawai)
						values('$nis','$nama','$kelas','$jk','$alamat','$tahun_masuk','$nama_wali',
						     		'$no_hp_wali','$id_pegawai')");
	
	
	
	if(!$query) die(mysql_error());
	header('Location:berhasil_siswa.php');


?>
