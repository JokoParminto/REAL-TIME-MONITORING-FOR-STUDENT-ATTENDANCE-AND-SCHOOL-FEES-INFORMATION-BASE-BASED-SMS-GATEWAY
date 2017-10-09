<?php
session_start();
 
unset($_SESSION['nama']);
header("location:index.php");
 
?>