<?php
include 'connect.php';
     $tahun_masuk_lama =$_GET['tauhn_masuk_lama'];
    $tahun_masuk =$_POST['tahun_masuk'];
    $jumlah_spp = $_POST['jumlah_spp'];
    $id_pegawai = $_POST['id_pegawai'];
    
     $query= "UPDATE spp SET 
                tahun_masuk='$tahun_masuk', 
                jumlah_spp='$jumlah_spp', 
                id_pegawai='$id_pegawai'  
            where tahun_masuk = '$tahun_masuk_lama' ";
 
        $hasil = mysqli_query($connect, $query);
        
if (!$hasil) {
 	echo "Gagal Memasukan Data";
 }
 else {
 	header("Location: berhasil_update_spp.php");
 }





?>