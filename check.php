<?php
include('connect.php');
session_start();
		$nama=$_SESSION['nama'];
		$ses_sql = mysqli_query($connect,"SELECT * FROM pegawai WHERE nama='$nama'");
				

				$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
				$nama=$row['nama'];
				$id=$row['id_pegawai'];
				$level=$row['level'];


if(!isset($nama))
{
header("Location: index.php");
}
?>