<?php
	session_start();
	include("connect.php"); //Establishing connection with our database
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["nama"]) || empty($_POST["pass"]))
		{
			$error = "Silahkan isi terlebih dahulu.";
		}else
		{
			// Define $username and $password
			$nama=$_POST['nama'];
			$pass=$_POST['pass'];
			echo $nama;
			echo $pass;
			// To protect from MySQL injection
			$nama = stripslashes($nama);
			$pass = stripslashes($pass);
			$nama = mysqli_real_escape_string($connect, $nama);
			$pass = mysqli_real_escape_string($connect, $pass);
			$pass = md5($pass);
			//Check username and password from database
			$sql="SELECT id_pegawai FROM pegawai WHERE nama='$nama' and pass='$pass'";
			echo $sql;
			$result=mysqli_query($connect,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			//If username and password exist in our database then create a session.
			//Otherwise echo error.
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['nama'] = $nama; // Initializing Session
				header("location: home.php"); // Redirecting To Other Page
			}else
			{
				$error = "Incorrect username or password.";
			}
		}
	}
?>