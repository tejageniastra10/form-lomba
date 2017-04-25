<?php session_start();
	unset($_SESSION['username']);
	unset($_SESSION['id_tim']);
	header("location:index.php");
?>