<?php 
if(isset($_SESSION['username'])) 
	{ 
		$idtim    = $_SESSION['idtim'];
	}
	require_once("../koneksi.php");

	$sort = $_GET['order'];
	if($sort == 'asc')
	{
		$query = "SELECT * FROM pemain WHERE idtim = '$idtim' ORDER BY nama ASC";
		$hasil = mysqli_query($konek, $query);
		if($hasil)
		{
			header("location:myteam.php?sortname=asc");
		}
	else if($sort == 'desc')
		$query = "SELECT * FROM pemain WHERE idtim = '$idtim' ORDER BY nama DESC";
		$hasil = mysqli_query($konek, $query);
		if($hasil)
		{
			header("location:myteam.php");
		}
	}