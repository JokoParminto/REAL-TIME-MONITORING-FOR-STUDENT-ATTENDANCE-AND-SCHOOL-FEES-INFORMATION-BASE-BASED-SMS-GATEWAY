<?php
	$destination_number	= $_POST['nama'];
	$text_decoded		= $_POST['alamat'];
	

	$dataValid="YA";

	if ($dataValid == "TIDAK"){
		echo "Masih Ada Kesalahan, Silahkan Perbaiki!<br/>";
		echo "<input type='button' value='kembali' onClick='self.history.back()'>";
		exit;
	}
	include "config.php";
	$query = mysqli_query($connect, "INSERT INTO outbox (DestinationNumber, TextDecoded, CreatorID)
			values('$destination_number','$text_decoded', 'Gammu')"); 
	
	if (!$query) die (mysqli_error());
	
	header("location:form_sms.php");
?>