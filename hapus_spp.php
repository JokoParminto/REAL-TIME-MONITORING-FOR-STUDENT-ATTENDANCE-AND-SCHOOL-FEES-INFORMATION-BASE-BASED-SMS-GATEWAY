<?php
include 'connect.php';
    
    $tauhn_masuk =$_POST['tahun_masuk'];
    $jumlah_sppi = $_POST['jumlah_spp'];
    $id_pegawai = $_POST['id_pegawai'];
    




     $query= "DELETE FROM spp where tahun_masuk='$tahun_masuk'";
 
        $hasil = mysqli_query($connect, $query);
        
if (!$hasil) {
 	echo "Gagal Memasukan Data";
 }
 else {
 	header("Location: berhasil_hapus_spp.php");
 }





?>