<?php
	$level       			= $_POST['level'];
	$hari      				= $_POST['hari'];
    $pesan     				= $_POST['pesan'];
	$pesan_siswa 			= $_POST['pesan_siswa'];
	$id 					=$_POST['id'];
$dataValid	="YA";

if (strlen(trim($level))==0){
		echo "level harus di isi.. <br/>";
		$dataValid="Tidak";
	}
if (strlen(trim($hari))==0){
		echo "hari harus di isi.. <br/>";
		$dataValid="Tidak";
	}
	if (strlen(trim($pesan))==0){
			echo "pesan  harus di isi.. <br/>";
			$dataValid="Tidak";
		}
	if (strlen(trim($pesan_siswa))==0){
			echo "pesan siswa harus di isi.. <br/>";
			$dataValid="Tidak";
		}
if ($dataValid == "Tidak") {
			echo "Masih Ada Kesalahan, silahkan perbaiki! </br>";
			echo "<input type='button' value='Kembali';
				onClick='self.history.back()'>";
				exit;
	}



include "connect.php";

$a=  "select level from batas_pembayaran where level = '$level'";
$cek_level =mysqli_num_rows( mysqli_query($connect, $a));

if ($cek_level > 0){

echo "Maaf Data tidak bisa disimpan, Level tersebut telah di inputkan sebelumnya";
echo "<br/>";
echo "<input type='button' value='Back' onClick='history.go(-1);' >";
}

else {
   $query=mysqli_query($connect, "insert into batas_pembayaran (level, hari, pesan, pesan_siswa, id_pegawai)
						values('$level','$hari','$pesan','$pesan_siswa', '$id')");

     echo header('Location:berhasil_batas.php');
	
    }



	






?>
