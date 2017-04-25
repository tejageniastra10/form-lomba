<?php

session_start();
		if(!isset($_SESSION['username'])) 
		{
			header('location:login1.php'); 
		}
		else 
		{ 
			$username = $_SESSION['username'];
			$idtim    = $_SESSION['idtim'];
		}
		require_once("../koneksi.php");
		var_dump($idtim);
		$id = $_GET['id'];

		$sql 	= 'SELECT id FROM user WHERE username = "'.$username.'"';
		$query	= mysqli_query($konek, $sql);
		$hasil = mysqli_fetch_array($query);
		

	if($hasil['id'] != $id)
	{
		header("location:list.php?fail=1");
	}
	else
	{
		header("location:myteam.php?idtim=$idtim");
	}

?>