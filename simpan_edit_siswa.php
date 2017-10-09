<?php
include 'connect.php';
    
   $nis_lama =$_GET['nislama'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $no_hp_siswa = $_POST['no_hp_siswa'];
    $tahun_masuk = $_POST['tahun_masuk'];
    $nama_wali = $_POST['nama_wali'];
    $no_hp_wali = $_POST['no_hp_wali'];
    $id_pegawai =$_POST['id_pegawai'];

echo $nis_lama;
echo $nis;



     $query= "UPDATE siswa SET 
                nis='$nis', 
                nama='$nama',
                kelas='$kelas',
                alamat='$alamat',
                jk='$jk',
                no_hp_siswa='$no_hp_siswa',
                tahun_masuk='$tahun_masuk',
                nama_wali='$nama_wali', 
                no_hp_wali='$no_hp_wali',
                id_pegawai ='$id_pegawai'  
            where nis = $nis_lama";
 
        $hasil = mysqli_query($connect, $query);
        
if (!$hasil) {
 	echo "Gagal Memasukan Data";
 }
 else {
 	header("Location: berhasil_update_siswa.php");
 }





?>