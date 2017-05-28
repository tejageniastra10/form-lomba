<?php
	include("../koneksi.php");

session_start();
if(isset($_GET['id_penyelenggara']))
{
		$id_penyelenggara=$_GET['id_penyelenggara'];
		$sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_penyelenggara='$id_penyelenggara'");
		$row = mysqli_fetch_assoc($sql);
		$_SESSION['id_penyelenggara']=$id_penyelenggara;
		$_SESSION['nama_lomba']=$row['nama_lomba'];
		header("Location: ../penyelenggara/index.php");	
}
if(isset($_GET['id_tim']))
{
		$id_tim=$_GET['id_tim'];
		$sql = mysqli_query($koneksi, "SELECT * FROM tim WHERE id_tim='$id_tim'");
		$row = mysqli_fetch_assoc($sql);
		$_SESSION['id_tim']=$id_tim;
		$_SESSION['nama_tim']=$row['nama_tim'];
		header("Location: ../tim/index.php");	
}



  ?>