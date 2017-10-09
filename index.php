<?php
	include('login.php'); // Include Login Script
	if ((isset($_SESSION['nama']) != '')) 
	{
		header('Location: home.php');
	}	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Monitoring</title>
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="./bs/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="./bs/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="./bs/js/bootstrap.min.js"></script>
    <!--jquarry google-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
		<form method="post" action="">
            <div class="form-login">
            <h2>Welcome</h2>
            <input type="text" name="nama" class="form-control input-sm chat-input" placeholder="Masukkan Nama" required/>
            </br>
            <input type="password" name="pass" class="form-control input-sm chat-input" placeholder="Masukkan Password" required/>
            </br>
            <div class="wrapper">
            <span class="group-btn">
			<input type="submit" name="submit" class="btn btn-info" value="Login" />
            </span>
            </div>
            </div>
        </form>
        </div>
    </div>
</div>
</body>
</html>