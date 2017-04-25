<?php session_start();
	unset($_SESSION['username']);
	unset($_SESSION['idtim']);
	header("location:index.php");
?>